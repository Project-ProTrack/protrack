<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddTask</title>
    <link rel="stylesheet" href="mem_style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body>
    <header class="main">
       
        <form action="addtas.php" method="post">
        <div    class="scd"><h1>Add Project</h1></div>
                <input type="text" name="s_id" placeholder="s_id" />
                <input type="text" name="projectid" placeholder="Project Id" />
                <input type="date" name="est_del" placeholder="Est.Delivery"/>
                
                <button class="main-btn login-btn" type="login">Add</button>
                <a  href="timesheet.php"  class="a2">Back</a>
        </form>
        </header>
</body>
</html>   