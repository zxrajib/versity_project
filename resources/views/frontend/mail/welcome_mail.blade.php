<!doctype html>
<html lang="en">
<body>
<br>
    <p>Hello {{$user->name}}</p>
    <p>Your account has been created successfully.</p>
{{--    <a href="{{route('user.verify',$user->email_verification_token)}}">Click here for verify your account.</a>--}}
    <a href="{{route('home')}}">Click here to visit.</a>
<br>
<p>Thank You</p>
<p>Team Devops</p>
</body>
</html>
