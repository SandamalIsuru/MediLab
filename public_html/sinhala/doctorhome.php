<?php session_start();
    if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }
?>
<html>
<head>
    <title>DoctorHome</title>
        <link rel="stylesheet" href="css/doctorhome.css"/>
        <link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/text.css"/>
	<link rel="stylesheet" href="css/960_12_col.css"/>
        
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"> </script>
        <script type="text/javascript" src="js/code.js"></script>

        <script type = "text/javascript" >
    history.pushState(null, null, 'doctorhome.php');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, 'doctorhome.php');
    });
    </script>
    
</head>

<body>
<?php
$var=5;
$lname=$_SESSION['fname'];

?>
    <div class="container_12">
        <div class="grid_6">
            <h2 id="logo"><label for="logged as">You logged as : </label><label id="userName" for="userName"></label>
            <a id="singout" href="logout.php"> <u>(sign out)</u></a></h2>
            <script>
					var x = <?php echo json_encode($lname); ?>;
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
            <div class="grid_4">
            <nav>
                <div class="L1"><a href="logged.php" id="A1" >Home</a></div>
              
                <div class="L3"><a href="docsearchpatient.php"  id="A3">Search Patient</a></div>
                <div class="L4"><a href="doctorAccountInfo.php"  id="A4" target="_blank">Account Info</a></div>
                <div class="L2"><a href="addprescription.php"  id="A2">Add Prescription</a></div>
            </nav>
           
        </div>
            <div class="grid_8">
               
                     <h2 id="T1">You  Can  Go  to  HomePage</h2>
                <h2 id="T2">You  Can  save the prescription</h2>
              
                <h2 id="T3">Patient Details & Prescription Details</h2>
                <h2 id="T4">Personal Details</h2>
                    
                
               
              
                
                
            </div>
        </div>
         
    </div>
    <div class="container_12">
        <div class="grid_6">
        
        </div>
        
    </div>

    
<div class="container_12">
        <div class="foot">
		<footer>
			<div class="line1">
				<p><strong>MediLab</strong> for better service</p>
			</div>
			<div class="line2">
				<div class="grid_4">
					<h2>Information</h2>
					
				</div>
				<div class="grid_4">
					<h2>About us</h2>
					
				</div>
				<div class="grid_4">
					<h2>Contact us</h2>
					
				</div>
			</div>
			
			
		</footer>
        </div>
                
		
	</div> <!--end of 2nd container-->   



</body>
</html>
</title>
</head>

<body>



</body>
</html>
