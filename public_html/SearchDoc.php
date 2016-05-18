<?php session_start();
if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }
    
    $did="";
?>

<html>
<head>
<meta charset="utf-8">
<title>MediLab</title>
    <link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/text.css"/>
	<link rel="stylesheet" href="css/960_12_col.css"/>
	<link rel="stylesheet" href="css/searchLab.css"/>
	<meta charset="utf-8"/>
<link rel="stylesheet" href="css/pchange.css"/>



</head>


<body>
<div class="container_12">
    <header>
			
        <h1>MediLAB</h1>
			 
	</header>




    
    	
        <div class="one">
            <form id="myform" method='post' action='' >                    
                <label><h2>Enter Doctor Registration ID:</h2></label>                  
                <input name='did' id="lid" type='text' required='required'/><br><br>
                 
                
                       
                
                <input id="rbut" type="submit" value="Search"  onclick="<?php if(isset($_POST['did'])) $did = $_POST['did'];?>"/>
                <input id="back"type="button" value="Back" onClick="location.href='admin.php'" >
                </tr>           
            </form>
        </div>





<!--Start of Process Div -->
        <div id="process" class="process" >


			<?php 
			if($did!=""){



               require 'classes/dbconnect.php';

              $db = new Database("localhost", "u430353755_mlab", "12345f", "u430353755_mlab"); //connect database
              $result = $db->query("SELECT * FROM doctor WHERE username='$did' "); //select query to get data


              if($result){
                                 if($result->num_rows != 0) {
                                    echo "<h2> Doctor Details</h2>";
                                    echo "<table margin-top=\25px\" width=\"80%\" border=2>"; 
                                     
                                    echo "<tr><td style=\"background-color: black; color:white; border: 4px solid A4A4A4;\" width=\"20%\" border=\"1px\">Doctor Name</td>
                                        <td style=\"background-color: black;  color:white; border: 4px solid A4A4A4;\" width=\"20%\" align=center >City</td>
                                        <td style=\"background-color: black; color:white; border: 4px solid A4A4A4;\" width=\"20%\" align=center >Mobile</td>
                                        <td style=\"background-color: black; color:white; border: 4px solid A4A4A4;\" width=\"20%\" align=center >Email</td>
                                        <td style=\"background-color: black; color:white; border: 4px solid A4A4A4;\" width=\"20%\" align=center >Hospital</td>
                                        </tr>";

                                while ($row = mysqli_fetch_assoc($result)) {
                                    
                                    $Docname1 = $row['fname'];
                                    $Docname2 = $row['lname'];
                                    $city=$row['city'];
                                    $mobile=$row['tel1'];
                                    $email=$row['email'];
                                    $hospital=$row['hospital'];

                                    echo "<tr><td>$Docname1 $Docname2</td>
                                    <td>$city</td>
                                    <td>$mobile</td>
                                    <td>$email</td>
                                    <td>$hospital</td>
                                    </tr>";


                                    

                                   }
                                   echo "</table>";
                            		

                                
                            }
                            else{
                                echo "<h2 style='color:#359edf; font-family:candara;text-align:center;
                                        margin-top:15px;'>"."This Doctor Is not Register.  ."."</h2>";
                            }

                        }

}

			?>

</div> <!--end of process div-->
   
   
</div>
</body>
</html>