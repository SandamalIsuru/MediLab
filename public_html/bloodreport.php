<?php session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
?>
<!DOCTYPE html>

<html>
<head>
    <title>Blood Report Template</title>
    <script src="js/blood.js"></script>    
    <link rel="stylesheet" href="css/addpatient.css"/>
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/text.css"/>
	<link rel="stylesheet" href="css/960_12_col.css"/>
    <link rel="stylesheet" href="css/urine.css"/>
    <link rel="stylesheet" href="css/bloodreport.css"/>
         
     
	<meta charset="utf-8"/>
</head>

<body>
<form class="main" name="frm" action="php/bloodData.php" method="post" autocomplete="off" >
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
                <h2>Blood Report</h2>
            </div>
        </header>
             <div class="grid_10">
               
                    <div class="grid_8">
                    <form class="take" method="post" enctype="">
                        <label for="USername">Patient UserId </label>
                       <input type="text" name="PatientId" id="UID" placeholder=" UserId " onKeyPress="php/blood.php" value="<?php if (isset($_SESSION['PatientId'])) echo $_SESSION['PatientId']; ?>" onKeyUp="return UIDVal();"/>
                       <label id="desc">  Please Enter Correct userID and press Enter </label>
                        <input id="but1"type="submit" value="Go" formaction="php/blood.php" name="submit" style="width:50px;"/><br>
                        
                         <label for="Patient name">Name Of Patient </label>
                        <input type="text" name="NameOfPatient" id="pName" placeholder="AutoFill" readonly onKeyUp="return pNameVal();"/><br>
                        
                        <label for="Patient age">Age </label>
                        <input type="text" name="AgeOfPatient" id="age" placeholder="AutoFill" readonly onKeyUp="return ageVal();"/><br>
                        
                        <label for="refer">Refered By  </label>
                        <input type="text" name="labname" id="Lname" placeholder="Lab Name" readonly onKeyUp="return LnameVal();"/><br>
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
                
                <div class="third">
                    <label for="FBS"> Fasting Blood Sugar  </label>
                     <input type="text" name="FBS" id="fbs" placeholder="mg%" onKeyUp="return fbsVal();"/> <label> mg%    [ Normal Value  :- 70-110 mg%]</label><br>
                     
                      <label> Serum Cholesterol </label>
                     <input type="text" name="Serum" id="serum" placeholder="mg%" onKeyUp="return serumVal();"/> <label> mg%    [ Normal Value  :- 150 - 225 mg%]</label><br>
                     
                     <label > Blood Urea </label>
                     <input type="text" name="urea" id="urea" placeholder="mg%" onKeyUp="return ureaVal();"/> <label> mg%    [ Normal Value  :- 13 - 45 mg%]</label><br>
                     
                     
                      <label> S.G.O.T.(A.S.T.) </label>
                     <input type="text" name="sgot" id="sgot" placeholder="u/l" onKeyUp="return sgotVal();"/> <label> u/l   [ Normal Value  :- 35u/l]</label><br>
                     
                     
                     
                     <label> S.G.P.T.(A.L.T.)  </label>
                     <input type="text" name="sgpt" id="sgpt" placeholder="u/l" onKeyUp="return sgptVal();"/> <label> u/l   [ Normal Value  :- 40u/l]</label><br>
                     
                      <label> Serum Alkaline   </label>
                     <input type="text" name="SAP" id="alkaline" placeholder="u/l" onKeyUp="return alkalineVal();"/><label> u/l   [ Normal Value  :- 90 - 320 u / l ]</label><br>
                     
                     <label> Serum Protein  </label>
                     <input type="text" name="protein" id="protein" placeholder="g/dl" onKeyUp="return proteinVal();"/> <label> g/dl  6.4-8.4]</label><br>
                     
                     <label> Serum Albumin</label>
                     <input type="text" name="albumin" id="albumin" placeholder="g/dl" onKeyUp="return albuminVal();"/> <label> g/dl  [3.7-5.0]</label><br>
                     
                     <label> Globulin</label>
                     <input type="text" name="globulin" id="globumin" placeholder="g/dl" onKeyUp="return globuminVal();"/> <label> g/dl  [2.2 - 3.4]</label><br>
                     
                </div>
                
                  <div class="fourth">
                     
                     <br><br>
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
 unset($_SESSION['PatientId']);
 ?>
</body>
</html>
