<!DOCTYPE html>
<html>
<head>
    <title>Your Account Status</title>
</head>

<body>
    <p>Hi {{ $user->first_name }} {{ $user->last_name}},</p>
    <p>You requested a password reset. Click the link below to reset your password:</p>
    <a href="{{ route('reset.page', $token) }}">Reset Password</a>
    <p>If you did not request a password reset, please ignore this email.</p>
</body>
</html>