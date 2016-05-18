<?php session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
?>
<html>
<head>
    <title>PatientReport</title>
        <link rel="stylesheet" href="css/labassistant.css"/>
        <link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/text.css"/>
	<link rel="stylesheet" href="css/960_12_col.css"/>
        <link rel="stylesheet" href="css/patientreport.css"/>
        
        
    
</head>

<body>
<?php
	$pname = $_SESSION['fname'];
    $user = $_SESSION['username'];
?>
    <div class="container_12">
        
        <div class="grid_6">
            <h2 id="logo"><label for="logged as">You logged as : </label><label id="userName" for="userName"></label>
            <a id="singout" href="logout.php"> <u> (sign out)</u></a></h2>
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
            <div class="grid_6">
                <div class="blood"><a id="b" href="patientbloodreports.php" >Blood Reports</a></div>
            </div>
            <div class="grid_6">
                <div class="urine"><a id="u" href="#" class="selected">Urine Reports</a></div>
            </div>
        </div>
</div>
     <div class="container_12">
        <div class="midle">
            <div class="grid_10">

                <?php

                                    echo "<table margin-top=\25px\" width=\"80%\" border=2>"; 
                                     
                                    echo "<tr><td width=\"40%\" text-align=center>Lab Name</td>
                                        <td width=\"40%\" align=center bgcolor=\"FFFF00\">Date</td></tr>";
                                   
                        require 'classes/dbconnect.php';

                            $db = new Database("localhost", "u430353755_mlab", "12345f", "u430353755_mlab");
                            $result = $db->query("SELECT * FROM urine_report WHERE p_id='$user' ORDER BY dater DESC");

                            if($result){
                                 if($result->num_rows != 0) {

                                while ($row = mysqli_fetch_assoc($result)) {
                                    
                                    $lab = $row['l_id'];
                                    $date=$row['dater'];
                                    $userid=$row['p_id'];

                                    echo "<tr><td>$lab</td>
                                    <td><a href=\"tableurinepdf.php?id=$userid&date=$date\" target=\"blank\">$date</a></td></tr>";


                                    

                                   }
                                   echo "</table>";
                            

                                
                            }
                            else{
                                echo "<h2 style='color:#359edf; font-family:candara;text-align:center;
                                        margin-top:15px;'>"."No Records Were Found ."."</h2>";
                            }

                        }
                        
                           
                     

                ?>

            </div>

            
        </div>
    </div>



    <div class="container_12">
    <div class="grid_4">
        <input id="back"type="button" value="Back" onClick="location.href='patientReport.php'" >
        </div>
    </div>




</body>
</html>
</title>
</head>
</html>