<?php
require 'conect.php';
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
    <div class="container_12">
		<header>
			<h1>MediLAB</h1>
			 <form class="login" method="post" enctype="">
				<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign In</h2>
				<input id="text" type="text" placeholder="  user name" name="username"  value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>"/>
				
				<input id="pass" type="password" placeholder="  password" name="password"/>
                
				
				<input id="but1"type="submit" value="Login" name="submit"/><br>
                
                <label id="FailureText">
   					 <?php print ( isset($_SESSION['failure_message']) ? $_SESSION['failure_message'] : '' ); ?>
				</label>
                
			</form>
        </header>
			
			<!--Start navigation Bar-->
			<nav>
				<div class="c1"><a href="index.php">Home</a></div>
				<div class="c2"><a href="service.php">Services</a></div>
				<div class="c3"><a href="about.php" class="selected">About Us</a></div>
				<div class="c4"><a href="labor.php">Labortaries</a></div>
				<div class="c5"><a href="doctors.php">Doctors</a></div>
				<div class="c5"><a href="FAQ.php">FAQ</a></div>
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
    <div class="grid_6 TT">
	<h2>Our Vision</h2>
	<p>"To be the preferred and highly recommended
	private medical laboratory service provider in the country."</p>
	</div>
    <div class="grid_6 TT">
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
			
			
		</footer>
		
	</div> <!--end of 2nd container-->    
    
<?php unset($_SESSION['failure_message']);?>


</body>
</html>
