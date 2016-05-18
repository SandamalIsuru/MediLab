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
				<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ප්‍රවේශය &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<a id="trans" href="../index.php">English</a></h2>
				<input id="text" type="text" placeholder="  පරිශීලක නාමය" name="username"  value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>"/>
				
				<input id="pass" type="password" placeholder="  මුරපදය" name="password"/>
                
				
				<input id="but1"type="submit" value="ඇතුළු වන්න" name="submit"/><br>
                
                <label id="FailureText">
   					 <?php print ( isset($_SESSION['failure_message']) ? $_SESSION['failure_message'] : '' ); ?>
				</label>
                
			</form>
        </header>
			
			<!--Start navigation Bar-->
			<nav>
				<div class="c1"><a href="index.php">මුල් පිටුව</a></div>
				<div class="c2"><a  href="service.php"class="selected">සේවාවන්</a></div>
				<div class="c3"><a href="about.php" >අප ගැන </a></div>
				<div class="c4"><a href="labor.php">පරීක්ෂණාගාර</a></div>
				<div class="c5"><a href="doctors.php">වෛද්‍යවරුන්</a></div>
				<div class="c5"><a href="FAQ.php">ප්‍රශ්න</a></div>
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
    		<h2>අප ලබාදෙන සේවාවන්</h2>
    		<p><strong>“MediLab” </strong>සේවාව මගින් පරීක්ෂණ වාර්තා ලබාදීමේ ක්‍රියාවලිය වේගවත් සහ කාර්යක්ෂම කරයි. 
    			මෙම ක්‍රියාවලියට සම්බන්දවන සියලුම පාර්ශවයන් මෙමගින් වාසි අත්කර ගනිති. </p>

    		<p>තොරතුරු වල රහස්‍යභාවය, සුරක්ෂිතතාවය සහ විශ්වසනීයභාවය කෙරෙහි අප වැඩි අවදානයක් යොමුකර ඇත. එමෙන්ම <strong>“MediLab” </strong> සේවාව සමග සම්බන්ද වන සියලුම පාර්ශවකරුවන්ගේ රහස්‍යභාවය සහ ක්‍රියාකාරකම් ආරක්ෂාකර දීමට අප බැදී සිටිමු. “MediLab” හි සිදුවන ක්‍රියාකාරකම්,</p>
    	</div>
    	</div>
    </div>
    <div class="container_12">
    	<div class="point">

    			<div class="grid_8">
    		
	    			<ul>
						<strong><li>පරීක්ෂනාගාර ලියාපදිංචිකිරිම</li>
						<li>වෛද්‍යවරුන් ලියාපදිංචිකිරිම</li>
						<li>රුධිර සහ මුත්‍රා පරීක්ෂාව </li>
						<li>වෛද්‍ය වාර්තා අන්තර්ජාලය හරහා ලබා දීම</li>
						<li>ලබාදෙන වාර්තා අගයන් සම්මත අගයන් සමග සංසන්දනය කලහැකි වීම</li>
						<li>වෛද්‍යවරයාට රෝගියාගේ සාරාංශගත රුධිර ප්‍රස්ථාරයක් ලබාදීම </li>
						<li>රෝගියාට සුදුසු වෛද්‍යවරුන් තෝරාගැනීමේ පහසුකම ලබා දීම</li>
						<li>රෝගියාව විද්‍යුත් තැපෑල සහ කෙටි පණිවිඩ සේවාව(SMS) මගින් දෙනුවත් කිරීම .</li></strong>
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
    		<h2>වැඩිදුටත්</h2>
			<p>රෝගීන් ලියාපදිංචි කරගෙනිමේ පහසුකම, දත්ත ගබදකරගැනීම, පරීක්ෂනාගර කටයුතු මෙහෙයවීම යනාදී ක්‍රියාකාරකම් කිරීමේ හැකියාව පරීක්ෂනාගාරවෙත ලබාදී ඇත. තවද රෝගියාට සැලසෙන වාසිනම්, ඔහු/ඇය වෙනත් පරීක්ෂනගාරයකදී ලබාගත් පැරණි වාර්තාවන් නැවත ලබාගැනීමේ හැකියාව, එම වාර්තාවල අගයන් සම්මත අගයන් 
				සමග සංසන්දනය කිරීම, වඩාත් සුදුසු වෛද්‍යවරයා තෝරාගැනීම යනාදිය දැක්විය හැකිය.</p>

<p>රෝගියාගේ පැරණි වාර්තා විශ්ලේෂණයකිරීම, සාරාංශගත ප්‍රස්ථාරය මගින් දත්ත විශ්ලේෂණය යනාදී පහසුකම් මෙම පද්ධතිය මගින් වෛද්‍යවරයා වෙත ලබා දී තිබේ.</p>
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
