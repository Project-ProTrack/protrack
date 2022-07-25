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
     
        $data = " SELECT project.projectid, project.projectname,usersdata.name,project.deadline FROM project  JOIN usersdata ON project.projecthead = usersdata.userid where project.projectid='101'";
     
        $result=mysqli_query($connection,$data);
        $result1=   "SELECT  usersdata.name FROM project  JOIN usersdata ON project.m1 = usersdata.userid where  project.projectid='101' ";  
         $result2=mysqli_query($connection,$result1);
         $result3="SELECT  usersdata.name FROM project  JOIN usersdata ON project.m2 = usersdata.userid where  project.projectid='101' ";
         $result4=mysqli_query($connection,$result3);
        $result5=" SELECT  usersdata.name FROM project  JOIN usersdata ON project.m3 = usersdata.userid where  project.projectid='101'  ";
        $result6=mysqli_query($connection,$result5);
        $result7="SELECT  usersdata.name FROM project  JOIN usersdata ON project.m4= usersdata.userid where  project.projectid='101' ";
        $result8=mysqli_query($connection,$result7);
        $result9=" SELECT  usersdata.name FROM project  JOIN usersdata ON project.m5 = usersdata.userid where  project.projectid='101' ";
        $result10=mysqli_query($connection,$result9);
        $result11="SELECT  usersdata.name FROM project  JOIN usersdata ON project.m6 = usersdata.userid where  project.projectid='101'";
        $result12=mysqli_query($connection,$result11);
        $res="SELECT    projectname from    project where  project.projectid='101'";
        $result13=mysqli_query($connection,$res);
?>
<?php
if ($result13->num_rows > 0) {
  
  while($data = $result13->fetch_assoc()) {
 ?>
 <div   class="nam">
 <?php echo $data['projectname']; ?></div><?php
  }
} 
  ?>  

<?php
if ($result->num_rows > 0) {
  
  while($data = $result->fetch_assoc()) {
 ?>
 <div   class="hi">
    <table >
                <tr><label for="projectid"><b>Project ID :</b></label></tr>
                <tr> <?php echo $data['projectid']; ?></tr></table>
                 <table><tr><label for="projectname"><b>Project Name :</b></label></tr>
                <tr> <?php echo $data['projectname']; ?></tr></table>
                 <table><tr><label for="name"><b>Project Head :</b></label></tr>
                 <tr><?php echo $data['name']; ?></tr></table>
                 <table><tr><label for="deadline"><b>Deadline :</b></label></tr>
                 <tr><?php echo $data['deadline']; ?></tr></table> <?php
  }
} 
  ?>  
                 <?php
if ($result2->num_rows > 0) {
    while ($data = $result2->fetch_assoc()) {
        ?><table>
                 <tr><label for="name"><b>Member1 :</b></label></tr>
                 <tr><?php echo $data['name']; ?>   </tr></table>
                 <?php
    }
}
  ?>  
                 <?php
if ($result4->num_rows > 0) {
    while ($data = $result4->fetch_assoc()) {
        ?><table>
                 <tr><label for="name"><b>Member2 :</b></label></tr>
                 <tr><?php echo $data['name']; ?> </tr></table>
                 <?php
    }
}
  ?>  
                 <?php
if ($result6->num_rows > 0) {
    while ($data = $result6->fetch_assoc()) {
        ?><table>
                <tr> <label for="name"><b>Member3 :</b></label></tr>
                <tr> <?php echo $data['name']; ?> </tr></table>
                 <?php
    }
}
  ?>        
                  <?php
if ($result8->num_rows > 0) {
    while ($data = $result8->fetch_assoc()) {
        ?><table>
                <tr> <label for="name"><b>Member4 :</b></label></tr>
                <tr> <?php echo $data['name']; ?> </tr></table>
                 <?php
    }
}
  ?>        
                 <?php
if ($result10->num_rows > 0) {
    while ($data = $result10->fetch_assoc()) {
        ?><table>
                 <tr><label for="name"><b>Member5 :</b></label></tr>
                 <tr><?php echo $data['name']; ?> </tr></table>
                 <?php
    }
}
  ?>    
                 <?php
if ($result12->num_rows > 0) {
    while ($data = $result12->fetch_assoc()) {
        ?><table>
                <tr> <label for="name"><b>Member6 :</b></label></tr>
                 <tr><?php echo $data['name']; ?>     </tr></table>      
 </div>
                <?php
    }
}
  ?>  
       <a  href="schedule.php"  class="a2">Back</a>
        </header>
</body>
</html>   