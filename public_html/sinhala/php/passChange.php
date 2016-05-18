<?php
session_start();
require 'classes/dbconnect.php';	
$username = $_SESSION['username'];

$db = new Database("localhost", "u430353755_mlab", "12345f", "u430353755_mlab");
$result = $db->query("SELECT user_name,password FROM user WHERE user_name='$username'");    
if (isset($_POST['oldpw'])){
	$password = $_POST['oldpw'];
    
    if($result){
		while ($row = mysqli_fetch_assoc($result)) {
			$dbusername = $row['user_name'];
			$dbpassword = $row['password'];
			
			if(password_verify($password,$dbpassword)){
				if ($_POST['newpw']==$_POST['conpw']){
					$newpassword = $_POST['newpw'];
					$newhpassword = password_hash($newpassword, PASSWORD_BCRYPT, array('cost' => 12));
         			$db->query("UPDATE user SET password='$newhpassword' WHERE user_name='$username'");
					$db->query("UPDATE patient SET password='$newhpassword' WHERE username='$username'");
					header("Location:logout.php");
         		}
        		else {
					echo "<script type='text/javascript'>alert('New Passwords do not match with Confirm Password');</script>";
        		}
			}
			else{
				echo "<script type='text/javascript'>alert('Passwords do not match');</script>"; 
			}
		}
	}

}
    ?>