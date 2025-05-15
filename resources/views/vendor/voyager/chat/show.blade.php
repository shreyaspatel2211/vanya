@extends('voyager::master')

@section('content')
<style>
    .chat-container {
        max-width: 800px;
        margin: auto;
    }
    .chat-bubble {
        padding: 10px 15px;
        border-radius: 20px;
        margin: 10px 0;
        display: inline-block;
        max-width: 70%;
        clear: both;
    }
    .left {
        background-color: #f1f0f0;
        float: left;
        text-align: left;
    }
    .right {
        background-color: #d4edda;
        float: right;
        text-align: right;
    }
    .timestamp {
        display: block;
        font-size: 0.8em;
        color: #777;
        margin-top: 4px;
    }
</style>

<div class="page-content container-fluid">
    <div class="chat-container">
        <h2>Chat between {{ $first_user_name->name }} and {{ $second_user_name->name }}</h2>

        <div class="panel">
            <div class="panel-body">
                @if(count($decodedMessages))
                    @foreach($decodedMessages as $msg)
                        @php
                            $alignment = $msg->sender_id == $user1 ? 'left' : 'right';
                            $sender_name = App\Models\User::where('id', $msg->sender_id)->first();
                        @endphp
                        <div class="chat-bubble {{ $alignment }}">
                            <strong>{{ $sender_name->name }}</strong><br>
                            {{ $msg->message }}
                            <span class="timestamp">{{ $msg->timestamp }}</span>
                        </div>
                        <div style="clear: both;"></div>
                    @endforeach
                @else
                    <p>No messages found between these users.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
