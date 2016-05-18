<?php session_start();?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
	require '../classes/dbconnect.php';
	if(isset($_POST['PatientId'])){
		$patientId = $_POST['PatientId'];
		$_SESSION['PatientId'] = $patientId;

		$db = new Database("localhost", "u430353755_mlab", "12345f", "u430353755_mlab");
		$result = $db->query("SELECT * FROM patient WHERE username='$patientId'");
		
		if($result){
			while ($row = mysqli_fetch_assoc($result)) {
				
				$email = $row['email'];
				
			}
		}
	}

$PId=$_POST["PatientId"];
$pName=$_POST["NameOfPatient"];
$age=$_POST["AgeOfPatient"];
$lId=$_SESSION['username'];
$color=$_POST["color"];
$trans=$_POST["Trans"];
$ph=$_POST["ph"];
$albumin=$_POST["Albumin"];
$sugar=$_POST["sugar"];
$bile=$_POST["bile"];
$urob=$_POST["uro"];
$pus=$_POST["pus"];
$red=$_POST["redcell"];
$epi=$_POST["Ecell"];
$cast=$_POST["cast"];
$cristal=$_POST["crystal"];
$org=$_POST["organizm"];
$lab = $_SESSION['fname'];
$date=$_POST["date"];
$sms = $_SESSION['tel'];
$sms = substr($sms,1);


$db = new Database("localhost", "u430353755_mlab", "12345f", "u430353755_mlab");
$x = $db->insert("INSERT INTO urine_report VALUES
('$PId','$lId','$date','$pName','$age','$color','$trans','$ph','$albumin','$sugar','$bile','$urob','$pus','$red','$epi','$cast','$cristal','$org')");
if($x == 1){
	$user = "94717307845";
	$password = "1911";
	$text = urlencode("Your Urine report is ready\n$lab Laboratory");
	$to = "94" . $sms;
	
	
	$baseurl ="http://www.textit.biz/sendmsg/index.php";
	$url = "$baseurl/?id=$user&pw=$password&to=$to&text=$text";
	$ret = file($url);
	
	
	$res= explode(":",$ret[0]);
	
	if (trim($res[0])=="OK")
	{
	echo "Message Sent - ID : ".$res[1];
	}
	else
	{
	echo "Sent Failed - Error : ".$res[1];
	}

	$to = $email;
	$subject = 'Register information';
	$body = "Your Urine report has been uploaded.\n".$lab." Laboratory.\nThank you!" ;
	$header = 'From : medilab@gmail.com';

	if (mail($to, $subject, $body, $header)){
		echo 'email has sent to'.$to;
	}else{
		echo 'error in email';
	}

	
	header("Location:../urineReport.php");
}else{
	//$str = "error :" . $db->err();
	?>
    <script>
	var erro= <?php echo '"error : '  . $db->err() . '"';  ?>;
	</script>
    <?php
	//echo $str;
	echo '<script type="text/javascript">alert(erro);history.go(-1);</script>';
}
echo $x;

?>