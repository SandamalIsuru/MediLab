<?php

	
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
    
    	
        <div class="one">
            <form method='post' action='php/delDoc.php'>                    
                <label><h2>Enter Doctor ID:</h2></label>                  
                <input name='lid' id="lid" type='text' required='required'/><br><br><br><br>
                 
                
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
                <br><br><br><br>
                <input id="rbut" type="submit" value="Delete" onClick="return confirmChange();"/>
                <input id="back"type="button" value="Back" onClick="location.href='admin.php'" >
                </tr>           
            </form>
        </div>
    
    
</div>
</body>
</html>