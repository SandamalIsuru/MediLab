<?php session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
?>
<!DOCTYPE html>

<html>
<head>
    <title>Search Patient Form</title>
</head>
         <link rel="stylesheet" href="css/searchpatient.css"/>
        <link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/text.css"/>
	<link rel="stylesheet" href="css/960_12_col.css"/>
	<meta charset="utf-8"/>
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"> </script>
        <script type="text/javascript" src="js/searchP.js"></script>

<body>
    <div class="container_12">
        
             <header>
            <h1>MediLAB</h1>
            <div class="PR">
                <h2>Search Patient</h2>
            </div>
        </header>
              <div class="grid_10">
                 
                <form class="main" action="patientTable.php" method="post">
                                <label>Search By Patient ID</label><br>
                                <input type="text" name="pId" id="pId" placeholder=" patientid " onKeyUp="return nicVal()"/>
                                 <label id="commentUserNamePrompt" style="font-size:15px; margin-left:10px; "></label><br>
                                <label>Optional Search</label><br>
                                <input type="text" name="LName" id="LName" placeholder=" lastname " onKeyUp="return LNameVal()"/>
                                <label id="commentNamePrompt" style="font-size:15px; margin-left:10px; "></label>
                                <input type="text" name="DOB" id="DOB" placeholder=" YYYY-MM-DD "/><br>
                                <input id="rbut" type="submit" value="Search" name="sbut">
                </form>
            
           </div>
       
       	   <input id="back"type="button" value="Back" onClick="location.href='labassistant.php'" style=" float:right; margin-right:150px;" >
        
    </div>
          
</body>
</html>
