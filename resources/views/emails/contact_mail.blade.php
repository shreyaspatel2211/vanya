<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <p><strong>Name:</strong> {{ $contactData['name'] }}</p>
    <p><strong>Email:</strong> {{ $contactData['email'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $contactData['message'] }}</p>
</body>
</html>
