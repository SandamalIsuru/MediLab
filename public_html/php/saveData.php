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
$staddress=$_POST["staddress"];
$l2address=$_POST["l2address"];
$city=$_POST["city"];
$hospital=$_POST["hospital"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$tel2=$_POST["tel2"];


$hpassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

$db = new Database("localhost", "u430353755_mlab", "12345f", "u430353755_mlab");
$x = $db->insert("INSERT INTO doctor VALUES ('$username','$hpassword','$fname','$lname','$staddress','$l2address','$city','$hospital','$tel','$tel2','$email')");
$y = $db->insert("INSERT INTO user VALUES(NULL,'$username','$fname','$hpassword','$email','doctor')");


$message = "Your Username password  send to your e-mail address.";
         $to=$email;
         $subject="Medilab Account Details";
         $from = 'Medilab.com';
         $body='Hi Doctor, <br/> <br/>Your Membership ID is '.$username.' <br><br>Your Password :'.$password.'   <br/> <br/>--<br>MediLab<br>MediLab for better service';
            $headers = "From: " . strip_tags($from) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 
            $retval =mail($to,$subject,$body,$headers);
            if( $retval == true )
         {
            
            //echo "<p style='color:green;font-family:candara;font-size:15px;margin-left:150px;margin-top:5px;'>Please Check Your Email...</p>";
            header('Refresh: 3; url=index.php');
         }
         else
         {
            echo "Email could not be sent...";
         }

if($x == 1){
   
   
   header("Location:../AddDoctor.php");
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