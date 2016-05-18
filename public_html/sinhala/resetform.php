<html>
<head>
    <title>Reset Password</title>

    
	<link rel="stylesheet" href="css/resetpass.css"/>
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/text.css"/>
	<link rel="stylesheet" href="css/960_12_col.css"/>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<?php session_start();
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'u430353755_mlab');
define('DB_PASSWORD', '12345f');
define('DB_DATABASE', 'u430353755_mlab');
$connection= mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$message="";

if(isset($_POST['password']) && isset($_POST['cpassword'])){
	
	$username=$_GET['username'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword'];

	if($password==$cpassword && !empty($password)){
		$hpassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
		$sql="update user set password='".$hpassword."' where user_name='".$username."'";
		mysqli_query($connection,$sql);
		$message= "<i style='color:green;font-family:candara;'>You Have Change Succesfully!</i>";
		//header("location: index.php");
		header('Refresh: 2; url=index.php');
	}
	else{
		$message= "<i style='color:red;font-family:candara;'>Password Mismatches !</i>";
	}
	
}



?>
<body>
	<div class="container_12">
		<header>
			<h1>MediLAB</h1><!--logo of the page -->
          </header>
		<div class="grid_10 main">
			<h1>Reset Your Password</h1>

			<form method="post" action="">
				<label id="message"><?php echo $message; ?></label><br>
				<input name="password" type="password" placeholder="  Enter New Password"/><br>
				<input name="cpassword" type="password" placeholder="  Confirm Password"/><br>
				<input id="btn" type="submit" Value="Sumbit" />

			</form>
		</div>
	</div>


</body>
</html>