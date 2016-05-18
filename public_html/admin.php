<?php session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
?>
<html>
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/admin.css"/>
    <link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/text.css"/>
	<link rel="stylesheet" href="css/960_12_col.css"/>
	<meta charset="utf-8"/>
    <script type = "text/javascript" >
    history.pushState(null, null, 'admin.php');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, 'admin.php');
    });
    </script>
</head>

<body>


    <div class="container_12">
		<header>
			<h1>MediLAB</h1>

			<div class="PR">
                <h2>Administrator</h2>
            </div>

			</header>
			<!--Start navigation Bar-->
			<nav>
				<div class="c1"><a href="logged.php">Home</a></div>
				<div class="c2"><a href="logout.php">Logout</a></div>
			</nav><!--end of Navigation -->
			
    </div><!--end of 1st container-->

    <div class="container_12">
    	<div class="grid_12 mid">
    			<div class="grid_4">
    				<ul>

    				<li id="box"><a href="AddLab.php" id="addL">Add Lab</a></li>
    				<li id="box"><a href="DeleteLab.php" id="addD">Delete Lab</a></li>
    				<li id="box"><a href="SearchLab.php" id="addD">Search Lab</a></li>
    			</ul>
    				
    			</div>

    			<div class="grid_4 right">
    				<ul>
    					<li id="box"><a href="AddDoctor.php" id="addD">Add Doctor</a></li>
    					<li id="box"><a href="DeleteDoc.php" id="addD">Delete Doctor</a></li>
    					<li id="box"><a href="SearchDoc.php" id="addD">Search Doctor</a></li>

    				</ul>
    				

    			</div>
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
</div>
   
			
	


</body>
</html>
