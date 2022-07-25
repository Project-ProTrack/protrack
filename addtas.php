<?php 
$connection = mysqli_connect('localhost','root','','protrack');
error_reporting(0);
        $s_id = $_POST['s_id'];
        $projectid = $_POST['projectid'];
        $est_del= $_POST['est_del'];
        $data = " INSERT INTO  timesheet(s_id,projectid,est_del) VALUES('$s_id','$projectid','$est_del') ";
        mysqli_query($connection,$data);
        error_reporting(0);
        
        include 'timesheet.php';
        
         echo '<script type ="text/JavaScript">';  
            echo 'alert("Record entered Successfully !")';  
            echo '</script>'; 
          

      
?>