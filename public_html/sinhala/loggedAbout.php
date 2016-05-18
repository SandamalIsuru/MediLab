<?php session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
?>
<!DOCTYPE html>

<html>
<head>
    <title>About us-Medilab</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/about.css"/>
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/text.css"/>
	<link rel="stylesheet" href="css/960_12_col.css"/>
	<meta charset="utf-8"/>
	</head>

<body>
<?php
	$name = $_SESSION['fname'];
?>
    <div class="container_12">
		<header>
			<h1>MediLAB</h1>
          
			 <div class="login" >
                            <div class="logininside">
                        
								<label for="you are log" id="logout">You are logged as : </label><label for="user_Name" id="username"></label>
                                <a id="singout" href="logout.php">(sign out)</a>
                                <script>
									var x = <?php echo json_encode($name); ?>;
									document.getElementById('username').innerHTML = x;
								</script>
                            </div>
			</div>
        </header>
			
			<!--Start navigation Bar-->
			<nav>
				<div class="c1"><a href="logged.php">Home</a></div>
				<div class="c2"><a href="loggedService.php">Services</a></div>
				<div class="c3"><a href="loggedAbout.php" class="selected">About Us</a></div>
				<div class="c4"><a href="#">Labortaries</a></div>
				<div class="c5"><a href="loggeddoc.php">Doctors</a></div>
			</nav><!--end of Navigation -->
			
    </div><!--end of 1st container-->
    <div class="container_12">
    <div class="mid">
	<h1>Who we are ?</h1>
	<p>If you want to come up with a blood or an urine report,
	the most reliable laboratory to walk in is the MediLab. With
	our best and trained staff, our primary objective is to provide
	you with an efficient and effective service by using the latest
	technology in order to fulfill your requirements. </p>
	<p>During the process of current medical report analysis
	both the time and the money of the patients are wasted. Patients
	and the doctors unable to have a better idea of continuation of the
	health condition of a particular patient. The significant reason for
	that, is the inefficient communication among the patients, the laboratory
	operators and the doctors. The main idea of MediLab is to develop a web based
	solution for those parties, providing an efficient network for easy communication
	and obtaining information.</p>
	</div>
    <div class="grid_6">
	<h2>Our Vision</h2>
	<p>"To be the preferred and highly recommended
	private medical laboratory service provider in the country."</p>
	</div>
    <div class="grid_6">
	<h2>Our Mission</h2>
	<p>"To improve the quality of human life with the world's best health
	care facilities and the latest technology. "</p>
    </div>
    </div>
    
    <div class="container_12">
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
		
	</div> <!--end of 2nd container-->    
    


</body>
</html>
