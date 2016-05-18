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
				<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ප්‍රවේශය &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<a id="trans" href="../index.php">English</a></h2>
				<input id="text" type="text" placeholder="  පරිශීලක නාමය" name="username"  value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>"/>
				
				<input id="pass" type="password" placeholder="  මුරපදය" name="password"/>
                
				
				<input id="but1"type="submit" value="ඇතුළු වන්න " name="submit"/><br>
                
                <label id="FailureText">
   					 <?php print ( isset($_SESSION['failure_message']) ? $_SESSION['failure_message'] : '' ); ?>
				</label>
                
			</form>
        </header>
			
			<!--Start navigation Bar-->
			<nav>
				<div class="c1"><a href="index.php">මුල් පිටුව</a></div>
				<div class="c2"><a href="service.php">සේවාවන්</a></div>
				<div class="c3"><a href="about.php" class="selected">අප ගැන</a></div>
				<div class="c4"><a href="labor.php">පරීක්ෂණාගාර</a></div>
				<div class="c5"><a href="doctors.php">වෛද්‍යවරුන්</a></div>
				<div class="c5"><a href="FAQ.php">ප්‍රශ්න</a></div>
			</nav><!--end of Navigation -->
			
    </div><!--end of 1st container-->
    <div class="container_12">
    <div class="mid">
	<h1>අප කව්රුද ?</h1>
	<p>රුධිර සහ මුත්‍රා සාම්පල පරික්ෂා ක්‍රියාපටිපාටිය සඳහා වඩාත් සුදුසුම සේවාව “MediLab” වේ. 
		පරීක්ෂනාගාරවල කාර්යමණ්ඩලය මෙම “MediLab” සේවාව කාර්යක්ෂමව හැසිරවීම සඳහා පුහුනුකරවා ඇත. 
		එමනිසා රෝගීන්ගේ අවශ්‍යතා අඩුපාඩුවකින් තොරව සැපයේ. දැනට පවතින රුධිර සහ මුතා වාර්තා සැකසීමේ 
		ක්‍රියාවලියේදී රෝගියාගේ මුදල් සහ කාලය අනිසි අයුරින් අපතේයයි. එමෙන්ම දැනට පවතින ක්‍රමය මගින් 
		රෝගියාගේ පැරණි වාර්තා කාර්යක්ෂමව සංසන්දනය කිරීමේ හැකියාව නැත. එයට හේතුවනම් රෝගියා, 
		වෛද්‍යවරයා සහ රසායනාගාර කාර්යමණ්ඩලය අතර සිදුවන අකාර්යක්ෂම පණිවිඩ හුවමාරුවයි. <strong>“MediLab”</strong> 
		සේවාවේ ප්‍රධාන අරමුනනම් 
		ඉහත සඳහන් පාර්ශවයන් සඳහා කාර්යක්ෂම සේවා ජාලයක් ලබා දීමයි.</p>
	</div>
    <div class="grid_6 TT">
	<h2>අපේ දැක්ම</h2>
	<p><strong>“දිවයින තුල පුද්ගලික රසායනාගාර සේවාවන්හි ප්‍රමුකයා බවට පත්වීම.”</strong></p>
	</div>
    <div class="grid_6 TT">
	<h2>අපේ මෙහෙවර</h2>
	<p><b>“ලෝකයේ පවතින දියුණු සහ නවීන තාක්ෂනය භාවිතා කරමින් මනුෂ්‍ය දිවියේ තත්වය ඉහල නැංවීම.”</b></p>
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
    
<?php unset($_SESSION['failure_message']);?>


</body>
</html>
