<?php session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
?>
<!DOCTYPE html>

<html>
<head>
    <title>Untitled Document</title>

	<script src="js/urine.js"></script>
	 <link rel="stylesheet" href="css/addpatient.css"/>
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/text.css"/>
	<link rel="stylesheet" href="css/960_12_col.css"/>
        <link rel="stylesheet" href="css/urine.css"/>
	<meta charset="utf-8"/>
</head>

<body>
<form class="main" name="frm" action="php/urineData.php" method="post" autocomplete="off">

	<?php
	$name = $_SESSION['fname'];
	if(isset($_SESSION['pid'])){
		$name2=$_SESSION['name'];
		$pid=$_SESSION['pid'];
		$dob=$_SESSION['dob'];
	}
		

?>
     <div class="container_12">
        
             <header>
            <h1>MediLAB</h1>
            <div class="PR">
                <h2>Urine Report</h2>
            </div>
        </header>
             <div class="grid_10">
               
                    <div class="grid_8">
                     <form class="take" method="post" enctype="">
                        <label for="USername">Patient UserId </label>
                        <input type="text" name="PatientId" id="UID" placeholder=" UserId " onKeyPress="php/urine.php" onKeyUp="return UIDVal();" value="<?php if (isset($_SESSION['PatientId'])) echo $_SESSION['PatientId']; ?>"/>
                        <input id="but1"type="submit" value="Go" formaction="php/urine.php" name="submit" style="width:50px;"/><br>
                        
                        <label for="Patient name">Name Of Patient </label>
                        <input type="text" name="NameOfPatient" id="pName" placeholder="AutoFill" readonly onKeyUp="return pNameVal();"/><br>
                        
                        <label for="Patient age">Age </label>
                        <input type="text" name="AgeOfPatient" id="age" placeholder="Age" readonly onKeyUp="return ageVal();"/><br>
                        
                        <label for="refer">Refered By  </label>
                        <input type="text" name="labname" id="Lname" placeholder="AutoFill(Lab Name)" readonly onKeyUp="return LnameVal();"/><br>
                        
                        <script>
							var x = <?php echo json_encode($name); ?>;
							document.getElementById('Lname').value = x;
							
							var y = <?php echo json_encode($name2); ?>;
							var z = <?php echo json_encode($pid); ?>;
							var a = <?php echo json_encode($dob); ?>;
							
							document.getElementById('pName').value = y;
							document.getElementById('UID').value = z;
							document.getElementById('age').value = a;
						</script>
                        </form>
                        
                    </div>
                    
            </div>
             <div class="grid_8">
                <div class="second">
                     <label id="title">URINE ANALYSIS</label><br><br>
                </div>
                <div class="third">
                    <label for="color"> Colour </label>
                     <input type="text" name="color" id="color" placeholder="color" onKeyUp="return colorVal();"/><br>
                     
                      <label for="color"> Transparency </label>
                     <input type="text" name="Trans" id="Trans" placeholder="clear" onKeyUp="return TransVal();"/><br>
                     
                     <label for="pH"> pH </label>
                     <input type="text" name="ph" id="ph" placeholder="ph value" onKeyUp="return phVal();"/><br>
                     
                     
                      <label for="Albumin ">Albumin  </label>
                     <input type="text" name="Albumin" id="Alb" placeholder="" onKeyUp="return AlbVal();"/><br>
                     
                      <label for="sugar ">Sugar  </label>
                     <input type="text" name="sugar" id="sugar" placeholder="Value" onKeyUp="return sugarVal();"/><br>
                     
                     <label>Bile  </label>
                     <input type="text" name="bile" id="bile" placeholder="" onKeyUp="return bileVal();"/><br>
                     
                      <label>Urobilin  </label>
                     <input type="text" name="uro" id="uro" placeholder="" onKeyUp="return uroVal();"/><br>
                </div>
                
                <div class="fourth">
                    <label id="cd">Centrifuged Deposits </label><br><br>
                    
                    <label>Pus Cells  </label>
                     <input type="text" name="pus" id="ps" placeholder="" onKeyUp="return psVal();"/><br>
                     
                     <label>Red Cells  </label>
                     <input type="text" name="redcell" id="rcell" placeholder="" onKeyUp="return rcellVal();"/><br>
                     
                     <label>Epithelial  Cells  </label>
                     <input type="text" name="Ecell" id="Ecell" placeholder="" onKeyUp="return EcellVal();"/><br>
                     
                     <label>Casts  </label>
                     <input type="text" name="cast" id="casts" placeholder="" onKeyUp="return castsVal();"/><br>
                     
                      <label>Crystals  </label>
                     <input type="text" name="crystal" id="crystal" placeholder="" onKeyUp="return crystalVal();"/><br>
                     
                      <label>Organisms  </label>
                     <input type="text" name="organizm" id="org" placeholder="" onKeyUp="return orgVal();"/><br><br><br>
                     
                     <label id="dateL"> Date </label>
                     <input type="text" name="date" id="date" placeholder="date" readonly/><br><br><br>
                     <script>
					 	var today = new Date();
					 	var dd = today.getDate();
						var mm = today.getMonth()+1; //January is 0!
						var yyyy = today.getFullYear();
						
						if(dd<10) {
							dd='0'+dd
						} 
						
						if(mm<10) {
							mm='0'+mm
						} 
						
						today = yyyy+'/'+mm+'/'+dd;
						document.getElementById("date").value = today;
					 </script>
                     
                </div>
               
             </div>
             
         
             <div class="back" style="float:right; margin-right:150px;">
             	<input id="rbut" type="submit" value="Submit" onClick="return confirmAdd();">
                <input id="back"type="button" value="Back" onClick="location.href='uploareports.php'" >
           	 </div>
		
     </div>
	       
    
           
</form>
<?php
 unset($_SESSION['pid']);
 ?>
</body>
</html>
