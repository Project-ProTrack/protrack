<?php
session_start();
$connection = mysqli_connect('localhost','root','','protrack');
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $result = mysqli_query($connection,"SELECT * FROM usersdata where email='" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_email=$row['email'];
	
	$password=$row['password'];
	if($user_id==$fetch_user_id) {
				$to = $email_id;
                $subject = "Password";
                $txt = "Your password is : $password.";
                $headers = "From: password@studentstutorial.com" . "\r\n" .
                "CC: somebodyelse@example.com";
                mail($to,$subject,$txt,$headers);
			}
				else{
					echo 'invalid email';
				}
}
?>
