<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="login_style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div    class="logo">
        <h1>PROTRACK</h1>
    </div>
    <div    class="forbox">
        <h2>Forget Password</h2>
        <p>
            Forgot your account’s password or having trouble logging into your Team? 
            Enter your email address and we’ll send you a recovery link.</p>
            <form   action="for.php"    method="$_POST">
        <input type="email" name="email" placeholder="Enter your mail id" /> 
        <button class="main-btn login-btn" type="login">Submit</button> </form>
        <a  href="loginn.php"  class="a1">Back</a>
    </div>
</body>
</html>