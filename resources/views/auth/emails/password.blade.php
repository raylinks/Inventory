<p>Click here to Reset Your Password:<br></p>
<a href="{{$link = url('password/reset', $token). '?email='.urlencode($user->getEmailForPasswordReset())}}">{{$link}}</a>