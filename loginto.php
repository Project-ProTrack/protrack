<?php  
session_start(); 
  
?>
<?php 
$connection = mysqli_connect('localhost','root','','protrack');

if(isset($_POST['userid'])){

        $userid = $_POST['userid'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $data = "SELECT *   from    usersdata    where userid ='$userid' AND username= '$username' AND password = '$password' limit 1";
        $result = mysqli_query($connection,$data);

        if(mysqli_num_rows($result)==1){
            include 'wel.php';
            exit();
        }
        else{
            echo '<script type ="text/JavaScript">';  
            echo 'alert("You Have entered a wrong userid or password !")';  
            echo '</script>'; 
            
        }
}
?>