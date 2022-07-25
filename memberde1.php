<?php 
$connection = mysqli_connect('localhost','root','','protrack');

if(isset($_POST['userid'])){
        $userid = $_POST['userid'];
        $username = $_POST['username'];
        $data = "DELETE  FROM  usersdata where userid ='$userid' AND username= '$username' ";
        $result = mysqli_query($connection,$data);
        include 'schedule.php';
        
        echo '<script type ="text/JavaScript">';  
           echo 'alert("Record Deleted Successfully !")';  
           echo '</script>'; 
          
}
?>