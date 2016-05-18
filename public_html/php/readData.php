<?php session_start();?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
require '../classes/dbconnect.php';

$username=$_POST["username"];
$password=$_POST["password"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$suffix=$_POST["suffix"];
$staddress=$_POST["staddress"];
$l2address=$_POST["l2address"];
$city=$_POST["city"];
$sex=$_POST["sex"];
$year=$_POST["year"];
$month=$_POST["month"];
$day=$_POST["day"];
$email=$_POST["email"];
$tel=$_POST["tel"];

$x="-";
$dob="$year$x$month$x$day";

$hpassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

$db = new Database("localhost", "u430353755_mlab", "12345f", "u430353755_mlab");
$x = $db->insert("INSERT INTO patient VALUES
('$username','$hpassword','$fname','$lname','$suffix','$sex','$dob','$email','$tel','$staddress','$l2address','$city')");
$y = $db->insert("INSERT INTO user VALUES(NULL,'$username','$fname','$hpassword','$email','patient')");
$to = $email;
	$subject = 'Register information';
	$body = "You have registered with MediLab.\nYour Username: ". $username ."\nYour Password: ". $password . "\nThank you!" ;
	$header = 'From : medilab@gmail.com';

	if (mail($to, $subject, $body, $header)){
		echo 'email has sent to'.$to;
	}else{
		echo 'error in email';
	}
if($x == 1){
	
	
	header("Location:../AddPatient.php");
}else{
	$str = "error :" . $db->err();
	?>
    <script>
	var erro= <?php echo '"error : '  . $db->err() . '"';  ?>;
	</script>
    <?php
	//echo $str;
	echo '<script type="text/javascript">alert(erro);history.go(-1);</script>';
}

$db->dbclose();
?>


</body>
</html>