<?php
require 'php/passChange.php';
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MediLab</title>
    <link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/text.css"/>
	<link rel="stylesheet" href="css/960_12_col.css"/>
	<meta charset="utf-8"/>
<link rel="stylesheet" href="css/pchange.css"/>
</head>

<body>
<div class="container_12">
    <header>
			
        <h1>MediLAB</h1>
			 
	</header>
    
    	
        <div class=" grid_4 one">
            <form method='post' action=''>                    
                <label><h2>දැනට තිබෙන මුරපදය:</h2></label>                  
                <input name='oldpw' id="oldpw" type='password' required='required'/><br><br><br><br>
                
                <label><h2>නව මුරපදය:</h2></label>
                <input name='newpw' id="newpw" type='password' required = 'required' /><br><br><br><br>
                
                <label><h2>මුරපදය තහවුරු කිරීම:</h2></label> 
                
                <script>
					function confirmChange() {
  
						var answer=confirm("Confirm");
						if(answer){
							return true;
						}else{
							return false;  
						}
					}
				</script>        
                <input name='conpw' id="conpw" type='password' required = 'required' /><br><br><br><br>
                <input id="rbut" type="submit" value="වෙනස් කරන්න " onClick="return confirmChange();"/>
                <input id="back"type="button" value="ආපසු" onClick="location.href='patientHome.php'" >
                </tr>           
            </form>
        </div>
    
    
</div>
</body>
</html>