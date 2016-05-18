<?php session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
?>
<!DOCTYPE html>

<html>
<head>
    <title>MediLab</title>
    <link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/text.css"/>
	<link rel="stylesheet" href="css/960_12_col.css"/>
    <link rel="stylesheet" href="js/validation.js"/>
	<meta charset="utf-8"/>
	
	
	
	
	 <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
    
    
    
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
				<div class="c1"><a href="logged.php" class="selected">Home</a></div>
				<div class="c2"><a href="loggedService.php">Services</a></div>
				<div class="c3"><a href="loggedAbout.php">About Us</a></div>
				<div class="c4"><a href="#">Labortaries</a></div>
				<div class="c5"><a href="loggeddoc.php">Doctors</a></div>
				<!--<div class="c6"><a href="doctorhome.php">
  			<img src="img/arrow.png" alt="return to page" style="width:50px;height:50px;border:0">
																						</a></div>
			</nav><!--end of Navigation -->
			
    </div><!--end of 1st container-->
    
    <div class="slide"><!--Begin Of Slider-->
			<p>

	<div id="wowslider-container0">
	<div class="ws_images"><ul>
		<li><img src="data0/images/5.jpg" alt="Urine Testing" title="Urine Testing" id="wows0_0"/></li>
		<li><img src="data0/images/1.jpg" alt="Quick Service" title="Quick Service" id="wows0_1"/></li>
		<li><img src="data0/images/2.jpg" alt="Accuracy" title="Accuracy" id="wows0_2"/></li>
		<li><a href="http://wowslider.com"><img src="data0/images/3.jpg" alt="slideshow javascript" title="Reliability" id="wows0_3"/></a></li>
		<li><img src="data0/images/4.jpg" alt="Blood Testing" title="Blood Testing" id="wows0_4"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Urine Testing"><span><img src="data0/tooltips/5.jpg" alt="Urine Testing"/>1</span></a>
		<a href="#" title="Quick Service"><span><img src="data0/tooltips/1.jpg" alt="Quick Service"/>2</span></a>
		<a href="#" title="Accuracy"><span><img src="data0/tooltips/2.jpg" alt="Accuracy"/>3</span></a>
		<a href="#" title="Reliability"><span><img src="data0/tooltips/3.jpg" alt="Reliability"/>4</span></a>
		<a href="#" title="Blood Testing"><span><img src="data0/tooltips/4.jpg" alt="Blood Testing"/>5</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"></div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine0/wowslider.js"></script>
	<script type="text/javascript" src="engine0/script.js"></script>
	
	
	</p>
		</div> <!--End Of SlideShow-->
    
    
		
    
	<div class="container_12">	
		</header>
		<div class="main">
			<div class="grid_6">
				<h2>What is <strong>MediLab</strong> ?</h2>
				<p>"MediLab" is a computer-based system that makes
				   the patientdoctors and the laboratory staff more efficient during the process of
				   laboratory report and prescription record repository. The system automates
					the complex procedures and processes which are being
					done manually by laboratory staff, doctor, and patient.</p>
				<p>
					Patients are benefited by providing several medical reports
					(Blood reports and Urine reports) with the reports that consist
					with the standard range of components that should be maintained by
					a normal person in that age range. It helps the patient and doctor to
					compare the current report with the past and the doctors are provided with
					a summarized graph with the deviation of selected component of blood/urine
					during the process of treatment.
				</p>
				
				<p><a href="about.php" class="button">Read More</a></p>
			</div>
			<div class="grid_6">
				<h2>Services We provide...</h2>
				<ul>
					<li>Blood and Urine Testing</li>
					<li>Online Report Delivery</li>
					<li>Facilitates for general report comparisons(For patients)</li>
					<li>Providing blood/urine report summarization (For doctors)</li>
					<li>Facilitates to select suitable doctor for consultant</li>
				</ul>
				
				
				<p><a href="#" class="button">Read More</a></p>
			</div>
		</div>
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
