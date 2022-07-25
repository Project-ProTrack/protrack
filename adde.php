<?php 
$connection = mysqli_connect('localhost','root','','protrack');
error_reporting(0);
        $bill_id = $_POST['bill_id'];
        $projectid = $_POST['projectid'];
        $est_cost= $_POST['est_cost'];
        $data = " INSERT INTO  expense(bill_id,projectid,est_cost) VALUES('$bill_id','$projectid','$est_cost') ";
        mysqli_query($connection,$data);
        error_reporting(0);
        
        include 'expense.php';
        
         echo '<script type ="text/JavaScript">';  
            echo 'alert("Record entered Successfully !")';  
            echo '</script>'; 
          

      
?>