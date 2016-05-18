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
<!--DB Connection-->
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

if (isset($_POST['username'])){
	$username = $_POST['username'];
	
	$sql = "SELECT * FROM user WHERE user_name='$username'";
	$result = mysqli_query($connection,$sql);
	$numrows = $result->num_rows;
//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

if($numrows===1)
{
	while ($row=mysqli_fetch_assoc($result))
    {
    	$email  =  $row['email'];//FETCHING PASSword
    
    	 $message = "Your password reset link send to your e-mail address.";
         $to=$email;
         $subject="Forget Password";
         $from = 'Medilab.com';
         $body='Hi, <br/> <br/>Your Membership ID is '.$row['user_name'].' <br><br>Click here to reset your password http://medilablanka.esy.es/resetform.php?username='.$username.'   <br/> <br/>--<br>MediLab<br>MediLab for better service';
            $headers = "From: " . strip_tags($from) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 
            $retval =mail($to,$subject,$body,$headers);
            if( $retval == true )
         {
            
            echo "<p style='color:green;font-family:candara;border:2px solid black;border-radius:3px; width:250px;font-size:17px;margin-left:150px;margin-top:5px;'>Please Check Your Email...</p>";
            header('Refresh: 3; url=index.php');
         }
         else
         {
            echo "Email could not be sent...";
         }
    	
    }

}
else
	echo "<p style='color:red;font-family:candara;border:2px solid black;border-radius:3px; width:250px;font-size:17px;margin-left:150px;margin-top:5px;'> ERROR : User Name Not Found...</p>";
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
				
				<input name="username" type="text" placeholder="  username" required/><br>
				<input id="btn" type="submit" Value="Sumbit" />

			</form>
		</div>
	</div>


</body>
</html>