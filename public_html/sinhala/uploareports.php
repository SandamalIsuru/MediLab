<?php session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
?>
<!DOCTYPE html>

<html>
<head>
    <title>Report Templates</title>
        
    <link rel="stylesheet" href="css/addpatient.css"/>
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/text.css"/>
	<link rel="stylesheet" href="css/960_12_col.css"/>
        <link rel="stylesheet" href="css/uploadhome.css"/>

</head>

<body>
     <div class="container_12">
        
             <header>
            <h1>MediLAB</h1>
            <div class="PR">
                <h2>Report Templates</h2>
            </div>
        </header>
             <div class="grid_10"></div>
     
             <div class="grid_6">
                <h1 id="BT">Blood Testing</h1>
                <ul>
                    <li><a href="bloodreport.php">Blood Report</a></li>
                    <li><a href="#">WBC Report</a></li>
                </ul>
             </div>
             <div class="grid_6">
                <h1 id="UT">Urine Testing</h1>
                 <ul>
                    <li><a href="urineReport.php">URINE Report</a></li>
                    
                </ul>
                
             </div>
                <div class="grid_8">
                    <input id="back"type="button" value="Back" onClick="location.href='labassistant.php'" >
                </div>
     </div>
</body>
</html>