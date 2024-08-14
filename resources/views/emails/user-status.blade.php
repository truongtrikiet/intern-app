<!DOCTYPE html>
<html>
<head>
    <title>Your Account Status</title>
</head>
<body>
    <h1>Hello, {{$user->first_name}} {{$user->last_name}}</h1>
    <p>Your account has been approved. You can now sign in using the link below:</p>
    <p><a href="{{url('/')}}">Sign In</a></p>
    <p>Thank you for registering.</p>
</body>
</html>