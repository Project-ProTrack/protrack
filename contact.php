<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>
    <header class="main">
        <div    class="logo">
            <h1>PROTRACK</h1>
        </div>
        <div    class="mark">
        <nav>
                       
            <ul class="menu">
                <li><a href="index.php" >Home</a></li>
                <li><a href="about.php">About   Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <div    class="loginn"><li><a  href="loginn.php" class='fa fa-user' style="font-size:30px; color:black"></a></li></div>
            </ul>
        </nav>
    </div>
    <section class="contact"  id="contact">
        <footer class="contact" id="contact">
            <div class="contact-heading">
                <h1>Contact Us</h1>
                <p>ProTrack -   Project Tracker</p>
            </div>
            <form action="contactus.php" method="post">
                <input type="text" name="user" placeholder="Your Full Name" />
                <input type="email" name="email" placeholder="Your E-Mail" />
                <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
                <button class="main-btn contact-btn" type="submit">Submit</button>
            </form>
        </footer></section></header>
</body>
</html>