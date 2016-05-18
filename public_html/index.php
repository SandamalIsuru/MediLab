<?php
require 'conect.php';
$db = new Database("localhost", "u430353755_mlab", "12345f", "u430353755_mlab");
$result = $db->query("SELECT * FROM expire WHERE datediff(CURDATE(), latest_date) >= 1825");
if($result){
		while ($row = mysqli_fetch_assoc($result)) {
			$username = $row['username'];
			$db->insert("DELETE FROM patient WHERE username='$username'");
			$db->insert("DELETE FROM user WHERE user_name='$username'");
			$db->insert("DELETE FROM expire WHERE username='$username'");
		}
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
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	
	
	 
	
	

</head>

<body>


    <div class="container_12">
		<header>
			<h1>MediLAB</h1>
			 <form class="login" method="post" enctype="">
				<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign In &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<a id="trans" href="sinhala/index.php">සිංහල</a></h2>
				<input id="text" type="text" placeholder="   user name" name="username"  value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>"/>
				
				<input id="pass" type="password" placeholder="   password" name="password"/>
                
				
				<input id="but1"type="submit" value="Login" name="submit"/><br>
                
                <label id="FailureText">
   					 <?php print ( isset($_SESSION['failure_message']) ? $_SESSION['failure_message'] : '' ); ?>

				</label><a href="reset.php">Forgot Password ?</a>
                
			</form>
            
			</header>
			<!--Start navigation Bar-->
			<nav>
				<div class="c1"><a href="index.php" class="selected">Home</a></div>
				<div class="c2"><a href="service.php">Services</a></div>
				<div class="c3"><a href="about.php">About Us</a></div>
				<div class="c4"><a href="labor.php">Laboratories</a></div>
				<div class="c5"><a href="doctors.php">Doctors</a></div>
				<div class="c5"><a href="FAQ.php">FAQ</a></div>
			</nav><!--end of Navigation -->
			
    </div><!--end of 1st container-->
    
    <div class="Slider">
	<!-- Start section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container0">
	<div class="ws_images"><ul>
		<li><img src="data0/images/1.jpg" alt="Quick Service" title="Quick Service" id="wows0_0"/></li>
		<li><img src="data0/images/2.jpg" alt="Reliability" title="Reliability" id="wows0_1"/></li>
		<li><img src="data0/images/3.jpg" alt="Accuracy" title="Accuracy" id="wows0_2"/></li>
		<li><img src="data0/images/4.jpg" alt="wowslider" title="Blood Testing" id="wows0_3"/></li>
		<li><img src="data0/images/5.jpg" alt="Urine Testing" title="Urine Testing" id="wows0_4"/></li>
	</ul></div>
<div class="ws_script" style="position:absolute;left:-99%"><a href="#">jquery slideshow</a></div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine0/wowslider.js"></script>
	<script type="text/javascript" src="engine0/script.js"></script>
	<!--  -->
	</div>

   
    
		
    
	<div class="container_12">	
		
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
				
				
				<p><a href="service.php" class="button">Read More</a></p>
			</div>
		</div>
		<footer>
			<div class="line1">
				<p><strong>MediLab</strong> for better service</p>
			</div>
			<div class="line2">
				<div class="grid_4">
					<h2>Information</h2>
					<h5>“MediLab” helps the following processes</h5>
					<h6><ul>
						<li>Registering laboratories for "MediLab"</li>
						<li>Registering doctors for "MediLab"</li>
						<li>Blood and urine testing</li>
						<li>Online report delivery</li>
					</ul></h6>
					<h4><a href="service.php">See more on Services</a></h4> 
				</div>
				<div class="grid_4">
					<h2>About us</h2>
					<h6 style="text-align:justify">“MediLab” or the “Medical report and prescription report repository system” is a computer-based system that makes the patients, doctors and the laboratory staff more efficient during the process of providing and analyzing the laboratory report and prescription record repository. </h6>
					<h4><a href="about.php">See more on About Us</a></h4>
					
			</div>
				<div class="grid_4">
					<h2>Contact us</h2>
					<h5>Address:</h5><br>
						<h6>
							<div style="padding-left:80px" >
							MediLab Lanka,<br>
							Reid Avenue,<br>
							Colombo 07.
							</div>
						</h6>

						<h5>e-mail:</h5><br>
						<h6>
							<div style="padding-left:80px" >
							medilablanka381@gmail.com
							</div>
						</h6>
	
						<h6>
							<div>
							<a href="https://www.facebook.com/medilablanka/"><img src="img/Facebook_icon.svg.png" style="width:50px; heigth:50px"></a>
							&nbsp;&nbsp;&nbsp;
							
							<a href="#"><img src="img/SocialMedia-GooglePlus-A.png" style="width:50px; heigth:50px"></a>
							</div>
							
						</h6>

				</div>
			</div>
		
	</div> <!--end of 2nd container-->    
    

<?php unset($_SESSION['failure_message']);?>
</body>
</html>
