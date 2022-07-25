<?php 
$connection = mysqli_connect('localhost','root','','protrack');

if(isset($_POST['userid'])){
        $userid = $_POST['userid'];
        $username = $_POST['username'];
        $name= $_POST['name'];
        $password= $_POST['password'];
        $email= $_POST['email'];
        $phone= $_POST['phone'];
        $age= $_POST['age'];
        $position= $_POST['position'];
        $usertype= $_POST['usertype'];
        $year_join= $_POST['year_join'];
        $experience= $_POST['experience'];
        $data = " INSERT INTO  usersdata(userid,username,name,password,email,phone,age,position,usertype,year_join,experience) VALUES('$userid','$username','$name','$password','$email','$phone','$age','$position','$usertype','$year_join','$experience') ";
        mysqli_query($connection,$data);
        error_reporting(0);
        
        include 'schedule.php';
        
         echo '<script type ="text/JavaScript">';  
            echo 'alert("Record Deleted Successfully !")';  
            echo '</script>'; 
          
} 
      
?>