<?php session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
?>
<!DOCTYPE html>

<html>
<head>
    <title>AddDoctor Form</title>
    <script src="js/docValidation.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/addpatient.css"/>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/text.css"/>
	<link rel="stylesheet" href="css/960_12_col.css"/>
	<meta charset="utf-8"/>
</head>

<body>
    <div class="container_12">
        
             <header>
            <h1>MediLAB</h1>
            <div class="PR">
                <h2>Doctor Register</h2>
            </div>
        </header>
           
           <div class="grid_10">
                <form class="main" name="frm" action="php/saveData.php" method="post" autocomplete="off">
                    <div class="grid_8">
                    
                         <label for="name">Name </label><br>
                         <input type="text" name="fname" id="fname" placeholder=" First " onkeyup="return nameVal()"/>
                         <label id="commentNamePrompt" style="font-size:15px; margin-left:10px; "></label>
                         <input type="text" name="lname" id="lname" placeholder=" Last " onkeyup="return name2Val()"/>
                         <label id="commentNamePrompt1" style="font-size:15px; margin-left:10px; "></label><br>
                         
                         <br>
                         <label for="address">Address </label><br>
                            <input type="text" name="staddress" id="staddress" placeholder=" Street Address " onkeyup="return addressVal()"/>
                            <label id="commentAddressPrompt1" style="font-size:15px; margin-left:10px; "></label><br>
                            <input type="text" name="l2address" id="l2address" placeholder=" Address Line 2 "/><br>
                            <input type="text" name="city" id="city" placeholder=" City " onkeyup="return cityVal()"/>
                            <label id="commentAddressPrompt" style="font-size:15px; margin-left:10px; "></label>
                            <br>
                         
                        
                        <label for="hospital">Hospital </label><br>
                             <input type="text" name="hospital" id="hospital" placeholder=" Hospital " onKeyUp="return hospitalVal()" />
                             <label id="commentHospitalPrompt" style="font-size:15px; margin-left:10px; "></label><br>
                                                                             
                                        
                        <label for="email">Email </label><br>
                             <input type="text" name="email" id="email" placeholder=" example@gmail.com " onKeyUp="return emailVal()"/>
                             <label id="commentEmailPrompt" style="font-size:15px; margin-left:10px; "></label><br>
                                            
                        <label for="tel">Phone Number </label><br>
                        	 <input type="text" name="tel" id="tel" placeholder=" Mobile 1 " onKeyUp="return phoneNoVal()"/>
                             <label id="commentPhonePrompt" style="font-size:15px; margin-left:10px; "></label><br>
                                            
                        <label for="tel2">Phone Number </label><br>
                        	 <input type="text" name="tel2" id="tel2" placeholder=" Mobile 2 " onKeyUp="return phone2NoVal()"/>
                             <label id="commentPhone2Prompt" style="font-size:15px; margin-left:10px; "></label><br>
                                            
                        <label for="username">User Name </label><br>
                             <input type="text" name="username" id="username" placeholder=" userName " onkeyup="return usernameVal()"/>
                             <label id="commentUserNamePrompt" style="font-size:15px; margin-left:10px; "></label><br>
                        <label for="password">Password</label><br>
                              <input type="password" name="password" id="password" placeholder=" password " onkeyup="return passwordVal()"/>
                              <label id="commentPasswordPrompt" style="font-size:15px; margin-left:10px; "></label><br>
                              
                        <label for="cpassword">Confirm Password</label><br>
                              <input type="password" name="cpassword" id="cpassword" placeholder=" Confirm password " onkeyup="return confirmPass()"/>
                              <label id="commentCPasswordPrompt" style="font-size:15px; margin-left:10px; "></label><br>
                                            
                        <input id="rbut" type="submit" value="Register" onclick="return confirmAdd();">
                        <input id="cbut"type="reset" value="Clear" >
                        <input id="back"type="button" value="Back" onClick="location.href='admin.php'" >
                                
                    </div>
                    
                 
                   
                </form>
            
            
            
           </div>
       
       
        
        
        
        
    </div>



</body>
</html>
