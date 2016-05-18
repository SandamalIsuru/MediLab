<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<script src="js/conect.js"></script>
</head>

<body>
<?php
$x = 0; 
require 'classes/dbconnect.php';
if(isset($_POST['username'])){
	$_SESSION['username']=$_POST['username'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username == null && $password == null){
		$x = 1;
          
	}
	error_reporting(0);
	
	$db = new Database("localhost", "u430353755_mlab", "12345f", "u430353755_mlab");
    $result = $db->query("SELECT * FROM user WHERE user_name='$username'");

	if($result){
		while ($row = mysqli_fetch_assoc($result)) {
			
			
			$dbusername = $row['user_name'];
			$dbpassword = $row['password'];
			$dbname = $row['fname'];
			$privilege = $row['privilege'];
			$_SESSION['privilege']= $privilege;
			$expire = time()+60*60*24*30;
			setcookie("id", $row['id'], $expire);
			
			if(password_verify($password,$dbpassword)){
				$_SESSION['fname']=$_POST['fname'];
				//$privilege = $row['privilege'];
				if($privilege == 'patient'){
				
					header("Location: patientHome.php");
					$_SESSION['fname']=$dbname;
				}
				else if($privilege == 'lab'){
				
					header("Location: labassistant.php");
					$_SESSION['fname']=$dbname;
					$_SESSION['username']=$dbusername;
				}
				else{
					header("Location: doctorhome.php");
					$_SESSION['fname']=$dbname;	
					
				}
			}
			else{
				if($privilege == 'admin'){
					//$decrypted = decryptIt( $dbpassword );
					if($dbpassword == $password){
						header("Location: admin.php");
						$_SESSION['fname']=$dbname;
					}else{
						$x = 2;
					}
				}else{
					$x = 2;
				}
			}
		}
		
	$db->dbclose();
	}
	
	else if($username != null || $password != null){
			
           
       		
	}
	if($x == 1){
		$_SESSION['failure_message'] = 'Please enter Username and Password';
	}else if($x == 2){
		$_SESSION['failure_message'] = 'Password is incorrect';
	}else{
		$_SESSION['failure_message'] = "Username or Password is incorrect";
	}

}
?>
</body>
</html>