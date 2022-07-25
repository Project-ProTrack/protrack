<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project1</title>
    <link rel="stylesheet" href="wel_style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body>
    <header class="main">
        <div    class="logo">
            <h1>PROTRACK</h1>
        </div>
        <?php 
         $connection = mysqli_connect('localhost','root','','protrack');
         $data  =  "SELECT usersdata.userid, roles.usertype
         FROM usersdata
         INNER JOIN roles ON usersdata.userid = roles.userid;"  ;
         $result = mysqli_query($connection,$data);
       echo mysqli_query($connection,$data);

?>
       <a  href="schedule.php"  class="a2">Back</a>
        </header>
</body>
</html>   