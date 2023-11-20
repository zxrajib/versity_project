<!doctype html>
<html lang="en">
<body>
<br>
    <p>Hello {{$user->name}}</p>
    <p>Your account has been created successfully. Please verify your account through following link</p>
    <a href="{{route('user.verify',$user->email_verification_token)}}">Click here for verify your account.</a>
<br>
<p>Thank You</p>
</body>
</html>
