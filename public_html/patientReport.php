<?php session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
?>
<html>
<head>
    <title>PatientReport</title>
        <link rel="stylesheet" href="css/labassistant.css"/>
        <link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/text.css"/>
	<link rel="stylesheet" href="css/960_12_col.css"/>
        <link rel="stylesheet" href="css/patientreport.css"/>
        
        
    
</head>

<body>
<?php
	$pname = $_SESSION['fname'];
    $user = $_SESSION['username'];
?>
    <div class="container_12">
        
        <div class="grid_6">
            <h2 id="logo"><label for="logged as">You logged as : </label><label id="userName" for="userName"></label>
            <a id="singout" href="logout.php"><u> (sign out)</u></a></h2>
            <script>
					var x = <?php echo json_encode($pname); ?>;
  					document.getElementById('userName').innerHTML = x;
			</script>
           
        </div>
        <div class="grid_6">
        <header >
         <h1>Medilab</h1>
        </header>
        </div>
    </div>
    
    <div class="container_12">
        <div class="main">
            <div class="grid_6">
                <div class="blood"><a id="b" href="patientbloodreports.php" >Blood Reports</a></div>
            </div>
            <div class="grid_6">
                <div class="urine"><a id="u" href="patienturinereports.php">Urine Reports</a></div>
            </div>
        </div>
</div>






    <div class="container_12">
    <div class="grid_4">
        <input id="back"type="button" value="Back" onClick="location.href='patientHome.php'" >
        </div>
    </div>




</body>
</html>
</title>
</head>

<body>



</body>
</html>
