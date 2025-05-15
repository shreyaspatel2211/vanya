<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\MessageSent;
use App\Models\Message;
use Illuminate\Support\Facades\Redis;
use App\Models\ChatSession;
use App\Models\User;

class ChatController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'sender_id' => 'required|exists:users,id',
            'receiver_id' => 'required|exists:users,id',
            'message' => 'required|string',
        ]);
    
        // store message
        $message = Message::create([
            'sender_id' => $request->sender_id,
            'receiver_id' => $request->receiver_id,
            'message' => $request->message
        ]);
    
        // broadcast
        broadcast(new MessageSent($message))->toOthers();
    
        return response()->json(['status' => 'Message saved and broadcasted!', 'message' => $message]);
    }

    public function getMessages($sender_id, $receiver_id)
    {
        $messages = Message::where(function ($query) use ($sender_id, $receiver_id) {
            $query->where('sender_id', $sender_id)
                ->where('receiver_id', $receiver_id);
        })->orWhere(function ($query) use ($sender_id, $receiver_id) {
            $query->where('sender_id', $receiver_id)
                ->where('receiver_id', $sender_id);
        })->orderBy('created_at', 'asc')->get();

        return response()->json($messages);
    }

    function getChatChannel($userId1, $userId2)
    {
        $ids = [$userId1, $userId2];
        sort($ids); // ensures consistent order
        return "chat:{$ids[0]}:{$ids[1]}";
    }

    function storeMessage($senderId, $receiverId, $message)
    {
        $channel = getChatChannel($senderId, $receiverId);
        $payload = json_encode([
            'sender_id' => $senderId,
            'receiver_id' => $receiverId,
            'message' => $message,
            'timestamp' => now(),
        ]);

        Redis::rpush($channel, $payload);
    }

    function getChatMessages($userId1, $userId2)
    {
        $channel = getChatChannel($userId1, $userId2);
        $messages = Redis::lrange($channel, 0, -1);
        return array_map('json_decode', $messages);
    }

    public function show($user1, $user2)
    {
        $channel = $this->getChatChannel($user1, $user2);
        $messages = Redis::lrange($channel, 0, -1);
        $decodedMessages = array_map('json_decode', $messages);

        $first_user_name = User::where('id', $user1)->first();
        $second_user_name = User::where('id', $user2)->first();

        return view('vendor.voyager.chat.show', compact('user1', 'user2', 'decodedMessages', 'first_user_name', 'second_user_name'));
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'sender_id' => 'required|integer',
            'receiver_id' => 'required|integer',
            'message' => 'required|string',
        ]);

        $channel = $this->getChatChannel($request->sender_id, $request->receiver_id);

        ChatSession::firstOrCreate([
            'user1_id' => min($request->sender_id, $request->receiver_id),
            'user2_id' => max($request->sender_id, $request->receiver_id),
        ]);

        Message::create([
            'sender_id' => $request->sender_id,
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
        ]);

        $payload = json_encode([
            'sender_id' => $request->sender_id,
            'receiver_id' => $request->receiver_id,
            'message' => $request->message,
            'timestamp' => now()->toDateTimeString(),
        ]);

        Redis::rpush($channel, $payload);

        return response()->json(['status' => 'success', 'message' => 'Message sent']);
    }

    public function getChatHistory(Request $request)
    {
        $request->validate([
            'user1_id' => 'required|integer',
            'user2_id' => 'required|integer',
        ]);

        $channel = $this->getChatChannel($request->user1_id, $request->user2_id);
        $messages = Redis::lrange($channel, 0, -1);
        $decodedMessages = array_map('json_decode', $messages);

        return response()->json(['status' => 'success', 'messages' => $decodedMessages]);
    }
}
