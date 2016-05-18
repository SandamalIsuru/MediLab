<?php
require 'conect.php';
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
				<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ප්‍රවේශය &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<a id="trans" href="../index.php">English</a></h2>
				<input id="text" type="text" placeholder="   පරිශීලක නාමය" name="username"  value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>"/>
				
				<input id="pass" type="password" placeholder="   මුරපදය" name="password"/>
                
				
				<input id="but1"type="submit" value="ඇතුළු වන්න" name="submit"/><br>
                
                <label id="FailureText">
   					 <?php print ( isset($_SESSION['failure_message']) ? $_SESSION['failure_message'] : '' ); ?>

				</label><a href="reset.php">මුර පදය අමතකද ?</a>
                
			</form>
            
			</header>
			<!--Start navigation Bar-->
			<nav>
				<div class="c1"><a href="index.php" class="selected">මුල් පිටුව</a></div>
				<div class="c2"><a href="service.php">සේවාවන්</a></div>
				<div class="c3"><a href="about.php">අප ගැන </a></div>
				<div class="c4"><a href="labor.php">පරීක්ෂණාගාර </a></div>
				<div class="c5"><a href="doctors.php">වෛද්‍යවරුන්</a></div>
				<div class="c5"><a href="FAQ.php">ප්‍රශ්න</a></div>
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
				<h2><strong>MediLab</strong> යනු?</h2>
				<p>"MediLab" යනු රසායනාගාර සේවාවන් සහ බෙහෙත් වට්ටෝරුව වාර්තා නිරීක්ෂණ ක්රියාවලිය 
					තුළ රෝගියා, වෛද්‍යවරු හා රසායනාගාර කාර්ය මණ්ඩලය වඩාත් කාර්යක්ෂම කරවන පරිගණකය මත පදනම් වන පද්ධතියක් වේ. මෙම පද්ධතිය රසායනාගාර කාර්ය මණ්ඩලය, වෛද්‍යවරයා සහ 
					රෝගියා අතර සිදුවන සංකීර්ණ ක්‍රමවේදයන් හා ක්‍රියාවලීන් ස්වයංක්‍රීයව සිදුකරනු ලබයි.</p>
				<p>
					මෙමගින් රෝගියා හට ලබාගත හැකි වාසි අතර විවිධ වර්ගයේ වෛද්‍ය වාර්තා ලබාගත හැකි 
					වීම (රුධිර හා මුත්‍රා වාර්තා) සහ රෝගියෙකු පවත්වාගතයුතු සම්මත රුධිර සහ මුත්‍රා සාම්පල 
					අගයන් රෝගීන්හට පෙන්වාදීම ආදී වාසි ඇතුලත් වේ. එමෙන්ම 
					රෝගියාට තමාගේ පැරණි රුධිර සහ මුත්‍රා වාර්තා නුතන වාර්තා සමග සංසන්දනය කළ හැක.
				</p>
				
				<p><a href="about.php" class="button">තව කියවන්න </a></p>
			</div>
			<div class="grid_6">
				<h2>අපගේ සේවාවන්...</h2>
				<ul>
					<li>රුධිර සහ මුත්‍රා පරීක්ෂාව</li>
					<li>අන්තර්ජාලය හරහා වාර්තා ලබාදීම</li>
					<li>ලබාදෙන වාර්තා අගයන් සම්මත අගයන් සමග සංසන්දනය කලහැකි වීම</li>
					<li>වෛද්‍යවරයාට රෝගියාගේ සාරාංශගත රුධිර ප්‍රස්ථාරයක් ලබාදීම </li>
					<li>රෝගියාට සුදුසු වෛද්‍යවරුන් තෝරාගැනීමේ පහසුකම ලබා දීම</li>
				</ul>
				
				
				<p><a href="service.php" class="button">තව කියවන්න</a></p>
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
    

<?php unset($_SESSION['failure_message']);?>
</body>
</html>
