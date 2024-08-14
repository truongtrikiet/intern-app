<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Cork App</title>
</head>
<body>
    <h1>Welcome, {{$user->first_name}} {{$user->last_name}}</h1>
    <p>Thank you for registering with us. You can follow the link below:</p>
    <p><a href="{{url('/')}}">Sign In</a></p>
    <p>Best regards, </p>
</body>
</html>