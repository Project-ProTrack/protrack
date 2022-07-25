<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddProject</title>
    <link rel="stylesheet" href="mem_style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body>
    <header class="main">
        
        <form action="addpro.php" method="post">
        <div    class="scd"><h1>Add Project</h1></div>
                <input type="text" name="s_id" placeholder="s_id" />
                <input type="text" name="projectid" placeholder="Project Id" />
                <input type="text" name="projectname" placeholder="Project name" />
                <input type="text" name="projecthead" placeholder="Project Head"/>
                <input type="date" name="deadline" placeholder="Deadline"/>
                <h3>Member Details</h3>
                <input type="text" name="m1" placeholder="Member 1"/>
                <input type="text" name="m2" placeholder="Member 2"/>
                <input type="text" name="m3" placeholder="Member 3"/>
                <input type="text" name="m4" placeholder="Member 4"/>
                <input type="text" name="m5" placeholder="Member 5"/>
                <input type="text" name="m6" placeholder="Member 6"/>
                <button class="main-btn login-btn" type="login">Add</button>
                <a  href="schedule.php"  class="a2">Back</a>
        </form>
        </header>
</body>
</html>   