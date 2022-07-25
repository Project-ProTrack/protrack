<?php 
$connection = mysqli_connect('localhost','root','','protrack');
error_reporting(0);
        $s_id = $_POST['s_id'];
        $projectid = $_POST['projectid'];
        $projectname = $_POST['projectname'];
        $projecthead= $_POST['projecthead'];
        $deadline= $_POST['deadline'];
        $m1= $_POST['m1'];
        $m2= $_POST['m2'];
        $m3= $_POST['m3'];
        $m4= $_POST['m4'];
        $m5= $_POST['m5'];
        $m6= $_POST['m6'];
        $data = " INSERT INTO  project(s_id,projectid,projectname,projecthead,deadline,m1,m2,m3,m4,m5,m6) VALUES('$s_id','$projectid','$projectname','$projecthead','$deadline','$m1','$m2','$m3','$m4','$m5','$m6') ";
        mysqli_query($connection,$data);
        error_reporting(0);
        
        include 'schedule.php';
        
         echo '<script type ="text/JavaScript">';  
            echo 'alert("Record entered Successfully !")';  
            echo '</script>'; 
          

      
?>