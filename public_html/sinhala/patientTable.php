<?php session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/bootstrap.css" rel="stylesheet" />
<link rel="stylesheet" href="css/searchpatient.css"/>
<!--HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries-->
<!--[if lt IF 9]>
	<script src="https://oss.maxcdn.com/htmlsshiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<div class="container">
<div class="row">

<div class="jomboturn" style="margin-top:100px;">
<div class="col-md-10 vv">
	<h1>Patient Details</h1>
<table width="960" border="1" cellpadding="1" cellspacing="1">
	<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>City</th>
    <th>Username Name</th>
    <th>Telephone</th>
    <th>Street</th>
    <th>Lane</th>
    <th>City</th>
    <th>DOB</th>
    <th>Email</th>
    </tr>
				
<?php

$con = mysqli_connect("localhost","u430353755_mlab","12345f","u430353755_mlab");
if(mysqli_connect_error()){
	echo "Sorry..Can't connect to the database.Try again."	;
}
		
if(isset($_POST['pId'])){
	$id=$_POST['pId'];
	$lname=$_POST['LName'];
	$dob=$_POST['DOB'];
	
	if($dob == null and $lname == null){
		
		$query=mysqli_query($con,"SELECT * FROM patient WHERE username='$id'");
		mysqli_close($con);
	
	?>
   	<script>
	var x = <?php echo json_encode($id); ?>;
	document.getElementById('pId').value=x ;
									
	</script>
	<?php
		while($row = mysqli_fetch_assoc($query)){
			echo "<tr>";
			echo"<td>".$row['fname']."</td>";
			echo"<td>".$row['lname']."</td>";
			echo"<td>".$row['city']."</td>";
			echo"<td>".$row['username']."</td>";
			echo"<td>".$row['tel']."</td>";
			echo"<td>".$row['staddress']."</td>";
			echo"<td>".$row['l2address']."</td>";
			echo"<td>".$row['dob']."</td>";
			echo"<td>".$row['sex']."</td>";
			echo"<td>".$row['email']."</td>";
			echo "</tr >";
		}
								
	?>
	</table>
<?php
	}
	
	else if($id == null and $dob != null and $lname != null){
		
		$query=mysqli_query($con,"SELECT * FROM patient WHERE lname='$lname' AND dob='$dob'");
		mysqli_close($con);
	
	?>
									
	<script>
	var x = <?php echo json_encode($id); ?>;
	document.getElementById('pId').value=x ;
									
	</script>
	<?php
		while($row = mysqli_fetch_assoc($query)){
			echo "<tr>";
			echo"<td>".$row['fname']."</td>";
			echo"<td>".$row['lname']."</td>";
			echo"<td>".$row['city']."</td>";
			echo"<td>".$row['username']."</td>";
			echo"<td>".$row['tel']."</td>";
			echo"<td>".$row['staddress']."</td>";
			echo"<td>".$row['l2address']."</td>";
			echo"<td>".$row['dob']."</td>";
			echo"<td>".$row['sex']."</td>";
			echo"<td>".$row['email']."</td>";
			echo "</tr >";
		}
								
	?>
	</table>
<?php
	}
}
?>
 <div class="back">
    <input id="back"type="button" value="Back" onClick="location.href='searchpatient.php'" >
</div>

</body>
</html>