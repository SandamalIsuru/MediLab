<?php
require 'conect.php';
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
				<div class="c2"><a  href="service.php"class="selected">Services</a></div>
				<div class="c3"><a href="about.php" >About Us</a></div>
				<div class="c4"><a href="labor.php">Labortaries</a></div>
				<div class="c5"><a href="doctors.php">Doctors</a></div>
				<div class="c5"><a href="FAQ.php">FAQ</a></div>
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
