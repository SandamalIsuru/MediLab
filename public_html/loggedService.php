<?php session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
?>
<!DOCTYPE html>

<html>
<head>
    <title> Services -Medilab</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/service.css"/>
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/text.css"/>
	<link rel="stylesheet" href="css/960_12_col.css"/>
	<meta charset="utf-8"/>
	</head>

<body>
<?php
	$name = $_SESSION['fname'];
	$type=$_SESSION['privilege'];
	
	if($type=='patient'){
		$link="patientHome.php";
	}
	elseif ($type=='lab') {
		$link="labassistant.php";
	}
	elseif ($type=='doctor') {
		$link="doctorhome.php";
	}



?>
    <div class="container_12">
		<header>
			<h1>MediLAB</h1>
			 <div class="login" >
                            <div class="logininside">
                        
								<label for="you are log" id="logout">You are logged as : </label><label for="user_Name" id="username"></label>
                                <a id="singout" href="logout.php">(sign out)</a>

                                <div class="goBack">
                                	<a href="<?php echo $link;?>">Go Back</a>
                                </div>
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
				<div class="c2"><a  href="loggedService.php"class="selected">Services</a></div>
				<div class="c3"><a href="loggedAbout.php" >About Us</a></div>
				<div class="c4"><a href="#">Labortaries</a></div>
				<div class="c5"><a href="loggeddoc.php">Doctors</a></div>
			</nav><!--end of Navigation -->
			
    </div><!--end of 1st container-->
    
    <div class="container_12">
    	<div class="grid_12">
    		<div class="Image">
    		</div>
    		<!--First Image-->
    	</div>

      
    </div>

    <div class="container_12">
    	<div class="grid_12">
    		<div class="middle">
    		<h2>Services We Provide</h2>
    		<p>MediLab makes the process of obtaining medical reports (Blood and Urine reports) more convenience by making that process considerably automated. All the people who involved in that process are benefited in various ways considering their role in the process. </p>

    		<p>We have paid our full attention towards the confidentiality, security and the reliability of the medical reports and the information of our customers (laboratories, doctors and patients). And we ensure the reliability and the thrust of all the professionals who join with MediLab for their activities and services.</p>
    	</div>
    	</div>
    </div>
    <div class="container_12">
    	<div class="point">

    			<div class="grid_8">
    		
	    			<ul>
						<li>Registering laboratories for <strong>MediLab</strong></li>
						<li>Registering doctors for <strong>MediLab</strong></li>
						<li>Blood and urine testing</li>
						<li>Online report delivery</li>
						<li>Facilitates for general report comparisons(For patients)</li>
						<li>Providing blood/urine report summarization (For doctors)</li>
						<li>Facilitates to select suitable doctor for consultant</li>
						<li>Acknowledgement and alert message and email services for patient.
					</ul>
				</div>
			
		<div class="grid_4">
			<div class="Image2">
						

		</div>

		
				


		</div>

      
    </div>

    <div class="container_12">
    	<div class="grid_12">
    		<div class="middle">
    		<h2>Moreover</h2>
			<p>Laboratories are given the convenience way of registering patients, storing the records and information, and way of handling and controlling the functionalities in the of the laboratory.
Patients are benefited by retrieving the medical reports at any where he/she present by accessing the web site, providing a brief idea of the medical report including the fluctuations occurred in the report from a normal person and obtaining information on doctors that he/she can consult for further medications or opinions. </p>

<p>The doctors are provided with the convenience ways of handling patients by providing the past medical reports of the patients through the web site and providing a summarized graph of behavior of the reports during his or her time of medication.  </p>
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
