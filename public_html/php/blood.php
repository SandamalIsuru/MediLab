<?php
if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
	session_start();
	require '../classes/dbconnect.php';
	if(isset($_POST['PatientId'])){
		$patientId = $_POST['PatientId'];
		$_SESSION['PatientId'] = $patientId;
		
		
		$db = new Database("localhost", "u430353755_mlab", "12345f", "u430353755_mlab");
		$result = $db->query("SELECT * FROM patient WHERE username='$patientId'");
	
		if($result){
			while ($row = mysqli_fetch_assoc($result)) {
				
				$dbfname = $row['fname'];
				$dblname = $row['lname'];
				$dbdob = $row['dob'];
				$email = $row['email'];
				$_SESSION['tel'] = $row['tel'];
				$_SESSION['email'] = $row['email'];
				
				$today = date("Y-m-d");
				$date1=date_create($dbdob);
				$date2=date_create($today);
				$diff=date_diff($date1,$date2);
				$days = $diff->format("%a");
				$age = (int)($days/365.25);
				$fullname = $dbfname . ' ' . $dblname;
				$_SESSION['name']=$fullname;
				$_SESSION['pid']=$patientId;
				$_SESSION['dob']=$age;
				header("Location: ../bloodreport.php");
			}
		}
		else{
			header("Location: ../bloodreport.php");
		}
		
	}
	
		header("Location: ../bloodreport.php");
		
    
    ?>