<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Page</title>
    <link rel="stylesheet" href="loginto_style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header class="main">
        <div    class="logo">
            <h1>PROTRACK</h1>
        </div>
        <form action="loginto.php" method="post">
        <div    class="logbox">
        <div    class="log">
            <h1>LOGIN</h1>
                <input type="text" name="userid" placeholder="User Id" />
                <input type="text" name="username" placeholder="Username" />
                <input type="password" name="password" placeholder="Password"/>
                <button class="main-btn login-btn" type="login">Login</button>
            <a href="forget.php" class="a1">Forget  password</a>
            <a  href="index.php"  class="a2">Back</a>
            <section class="hom">
                <div class="hom-img">
                    <img src="login.gif" />
                </div>
            </section>
        </div></div></form>

    </header>    
</body>
</html>
