<?php session_start();
if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }
    
    $ptid="";
?>
<html>
<head>
    <title>DoctorHome</title>
        <link rel="stylesheet" href="css/doctorsearch.css"/>
        <link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/text.css"/>
	<link rel="stylesheet" href="css/960_12_col.css"/>

    <script type="text/javascript" src="js/jquery-1.11.3.min.js"> </script>
    <script type="text/javascript" src="js/docSearch.js"></script>
        
       
    
</head>

<body>
<?php
$var=5;
$lname=$_SESSION['fname'];

?>
    <div class="container_12">
        <div class="grid_6">
            <h2 id="logo"><label for="logged as">You logged as : </label><label id="userName" for="userName"></label>
            <a id="singout" href="logout.php"> <u>(sign out)</u></a></h2>
            <script>
					var x = <?php echo json_encode($lname); ?>;
  					document.getElementById('userName').innerHTML = x;
			</script>
           
        </div>
        <div class="grid_6">
        <header >
         <h1>Medilab</h1>
        </header>
        </div>
    </div>
    
    <div class="container_12 belowt">
        <div class="main">
            <div class="grid_4">
            <nav>
                <div class="L1"><a href="logged.php" id="A1" >Home</a></div>
              
                <div class="L3 selected"><a href="#"  id="A3" >Search Patient</a></div>
                <div class="L4"><a href="doctorAccountInfo.php"  target="_blank" id="A4">Account Info</a></div>
                <div class="L2"><a href="addprescription.php"  id="A2">Add Prescription</a></div>
            </nav>
           
        </div>
            <div class="grid_8">
                <div class="grid_6 side">
                <form name="frm" method="post" autocomplete="off">
                    <label>Patient Id</label>
                    <input type="text" name="pid" id="pid" placeholder="patient Id">
                    <input id="enter" type="submit" name="enter" value="Enter" onclick="<?php if(isset($_POST['pid'])) $ptid = $_POST['pid'];?>">
                    
                </form>

                </div>
                <!-- Blood Table-->
                <div class="grid_6 tab">

                    <?php
 
                                   
                        require 'classes/dbconnect.php';

                            $db = new Database("localhost", "u430353755_mlab", "12345f", "u430353755_mlab");
                            $result = $db->query("SELECT * FROM blood_report WHERE p_id='$ptid' ORDER BY dater DESC");

                            if($result){
                                 if($result->num_rows != 0) {
                                     echo "<h2>Blood Reports</h2>";
                                    echo "<table margin-top=\25px\" width=\"80%\" border=2>"; 
                                     
                                    echo "<tr><td width=\"40%\" border=\"1px\">Lab Name</td>
                                        <td width=\"40%\" align=center >Date</td></tr>";

                                while ($row = mysqli_fetch_assoc($result)) {
                                    
                                    $lab = $row['L_id'];
                                    $date=$row['dater'];
                                    $userid=$row['p_id'];

                                    echo "<tr><td>$lab</td>
                                    <td><a href=\"tablebloodpdf.php?id=$userid&date=$date\" target=\"_blank\">$date</a></td></tr>";


                                    

                                   }
                                   echo "</table>";
                            

                                
                            }
                            else{
                                echo "<h2 style='color:#359edf; font-family:candara;text-align:center;
                                        margin-top:15px;'>"."No Blood Reports Were Found ."."</h2>";
                            }

                        }
                        
                           
                     

                ?>


                </div>

                <!-- Urine Table-->
                <div class="grid_6 tab">

                    <?php
 
                                   
                        

                            
                            $resultu = $db->query("SELECT * FROM urine_report WHERE p_id='$ptid' ORDER BY dater DESC");

                            if($resultu){
                                 if($resultu->num_rows != 0) {
                                    echo "<h2>Urine Reports</h2>";
                                    echo "<table margin-top=\25px\" width=\"80%\" border=2>"; 
                                     
                                    echo "<tr><td width=\"40%\" border=\"1px\">Lab Name</td>
                                        <td width=\"40%\" align=center >Date</td></tr>";

                                while ($row = mysqli_fetch_assoc($resultu)) {
                                    
                                    $lab = $row['l_id'];
                                    $date=$row['dater'];
                                    $userid=$row['p_id'];

                                    echo "<tr><td>$lab</td>
                                    <td><a href=\"tableurinepdf.php?id=$userid&date=$date\" target=\"_blank\">$date</a></td></tr>";


                                    

                                   }
                                   echo "</table>";
                            

                                
                            }
                            else{
                                echo "<h2 style='color:#359edf; font-family:candara;text-align:center;
                                        margin-top:15px;'>"."No Urine Reports Were Found ."."</h2>";
                            }

                        }
                        
                           
                     

                ?>


                </div>

                
            </div>
        </div>
         
    </div>
    <div class="container_12 graphg tab">
                    <a href="untitled.php?id=<?php echo $ptid ?>" target="_blank" id="graph">Generate Graph</a>

    </div>

    <div class="container_12">
        <div class="foot">
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
                
        
    </div> <!--end of 2nd container-->   

    

    
 



</body>
</html>

