<?php
session_start();
require '../classes/dbconnect.php';	
$username = $_POST['lid'];

$db = new Database("localhost", "u430353755_mlab", "12345f", "u430353755_mlab");
$r = $db->query("SELECT * FROM laboratory WHERE username='$username'");
$r2 = $db->query("SELECT * FROM user WHERE user_name='$username'");
$row1 = mysqli_fetch_assoc($r);
$row2 = mysqli_fetch_assoc($r2);
if($row1>0 || $row2>0){
		$result1 = $db->insert("DELETE FROM doctor WHERE username='$username'");
		$result2 = $db->insert("DELETE FROM user WHERE user_name='$username'");
		echo '<script type="text/javascript">alert("Doctor removed!");history.go(-1);</script>';
}
else{
	echo '<script type="text/javascript">alert("No such a Doctor...");history.go(-1);</script>';
}

    

?>