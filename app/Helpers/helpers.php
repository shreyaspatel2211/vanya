<?php

if (!function_exists('sendFirebaseNotification')) {
    function sendFirebaseNotification($firebaseToken, $title, $body, $data = [])
    {
        $SERVER_API_KEY = env('FIREBASE_SERVER_KEY');

        $payload = [
            "to" => $firebaseToken,
            "notification" => [
                "title" => $title,
                "body" => $body,
                "sound" => "default"
            ],
            "data" => $data
        ];

        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json'
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
}
