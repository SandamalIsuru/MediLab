<?php session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Patient</title>
        <link rel="stylesheet" href="css/labassistant.css"/>
        <link rel="stylesheet" href="css/patienthome.css"/>
        <link rel="stylesheet" href="css/reset.css"/>
    	<link rel="stylesheet" href="css/text.css"/>
    	<link rel="stylesheet" href="css/960_12_col.css"/>
 

        <link rel="stylesheet" href="css/animate.css">
      <script src="js/jquery-1.11.3.js"></script>
        <script  src="js/jquery.lettering.js"></script>
        <script src="js/jquery.textillate.js"></script>

        <script type = "text/javascript" >
    history.pushState(null, null, 'patienthome.php');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, 'patienthome.php');
    });
    </script>


</head>

<body>
<?php
	$pname = $_SESSION['fname'];
?>
    <div class="container_12">
        <div class="grid_6">
				
                
            <h2 id="logo"><label for="logged as">ඔබ ඇතුළු වී ඇත්තේ : </label><label id="userName" for="userName"></label>
            <a id="singout" href="logout.php"><u> (පිටවීම)</u></a></h2>
            <script>
					var x = <?php echo json_encode($pname); ?>;
  					document.getElementById('userName').innerHTML = x;
			</script>
           
        </div>
        <div class="grid_6">
        <header >
         <h1>Medilab</h1>
        </header>
        </div>
    </div>
    
    <div class="container_12">
        <div class="main">
            <div class="grid_4">
                <nav>
                    <div class="L1"><a href="logged.php" id="A1" >මුල් පිටුවට </a></div>
                    <div class="L2"><a href="patientReport.php"  id="A2">වාර්තා</a></div>
                    <div class="L3"><a href="patientAccountInfo.php" target="_blank" id="A3">ඔබගේ තොරතුරු</a></div>
                    <div class="L4"><a href="#"  id="A4">ලියාපදිංචි වෛද්‍යවරු</a></div>
                    <div class="L2"><a href="passwordChange.php" id="A2" >මුරපදය වෙනස් කිරීම </a></div>
                </nav>
            </div>
        </div>
         
    

    
        <div class="grid_8">
            <h1 class="A">
            <ul class="texts">
                <li >Welcome to MediLab</li>
                                <li >You Can view your reports in here</li>
                <li >Thank You for registering with us</li>
            </ul>

        </h1>
        
        <script>
        $( document ).ready(function() {
            $('.A').textillate({ 
                in: { effect: 'bounceIn',shuffle:true,delay:100 },
                out:{effect:'bounceOut',reverse:true,delay:100},
                loop:true

            });
            
})


        </script>

            
        
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
</title>
</head>

<body>



</body>
</html>
