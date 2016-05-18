<?php session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
?>

<html>
<head>
    <title>AddPatient Form</title>
    <script src="js/validation.js"></script>
   
    <link rel="stylesheet" href="css/addpatient.css"/>
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/text.css"/>
	<link rel="stylesheet" href="css/960_12_col.css"/>
	<meta charset="utf-8"/>
    
</head>

    <div class="container_12">
        
             <header>
            <h1>MediLAB</h1>
            <div class="PR">
                <h2>Patient Register</h2>
            </div>
        </header>
           
           <div class="grid_10">
                <form class="main" name="frm" action="php/readData.php" method="post" autocomplete="off">
                    <div class="grid_8">
                    
                         <label for="name">Name </label><br>
                         <input type="text" name="fname" id="fname" placeholder=" First " onKeyUp="return nameVal()"/>
                         <label id="commentNamePrompt" style="font-size:15px; margin-left:10px; "></label>
                         <input type="text" name="lname" id="lname" placeholder=" Last " onKeyUp="return name2Val()"/>
                         <label id="commentNamePrompt1" style="font-size:15px; margin-left:10px; "></label><br>
                         <input type="text" name="suffix" id="suffix" placeholder=" Middle "/>
                         
                         <br>
                        <label for="address">Address </label><br>
                            <input type="text" name="staddress" id="staddress" placeholder=" Street Address " onKeyUp="return addressVal()"/>
                            <label id="commentAddressPrompt1" style="font-size:15px; margin-left:10px; "></label><br>
                            <input type="text" name="l2address" id="l2address" placeholder=" Address Line 2 "/><br>
                            <input type="text" name="city" id="city" placeholder=" City " onKeyUp="return cityVal()"/>
                            <label id="commentAddressPrompt" style="font-size:15px; margin-left:10px; "></label>
                            <br>
                        <label for="gender">Gender </label><br>
                            <label id="ls" for="sex"> <input name="sex" type="radio" value="male" id="sex" onClick="return GenderVal()">Male</label>
                            <label for="sex1"><input name="sex" type="radio" value="female" id="sex1" onClick="return GenderVal()">Female</label>
                            <label id="commentSexPrompt" style="font-size:15px; margin-left:64px; "></label><br>
                            
                            
                         <label for="dob">Date Of Birth </label><br>
                                <label id="ll1" for="year"> Year</label>
                                <select name="year" id="year" >
                                   <?php
	
									for($y=date("Y");$y>=1950;$y--){
										?>
										<option value="<?php echo "$y";?>"><?php echo "$y";?></option>
										<?php
									}
									?>

	}
                                </select>
                                
                                
                            <label id="ll2" for="month">Month</label>
                                            <select name="month" id="month">
                                           <?php
												for($m=1;$m<13;$m++){
													switch($m){
													case "1": $mm="January";break;
													case "2": $mm="February";break;
													case "3": $mm="March";break;
													case "4": $mm="April";break;
													case "5": $mm="May";break;
													case "6": $mm="June";break;
													case "7": $mm="July";break;
													case "8": $mm="Augest";break;
													case "9": $mm="September";break;
													case "10": $mm="Octomber";break;
													case "11": $mm="November";break;
													case "12": $mm="December";break;
													
													}
													?>
													<option value="<?php echo "$m";?>"><?php echo "$mm";?></option>
													<?php
												}
												?>
    
    
                                                    
                                                    
                                                    </select>
    
                                                                <label id="ll3" for="day">Day</label>
                                                                <select name="day" id="day">
																	<?php
                                                                    
                                                                    for($d=1;$d<32;$d++){
                                                                        if($d<10){
                                                                            $dd="0".$d;	
                                                                        }
                                                                        else
                                                                            $dd=$d;
                                                                        ?>
                                                                        <option value="<?php echo "$dd";?>"><?php echo "$dd";?></option>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    </select>
                                                                
                                        <label for="email">Email </label><br>
                                            <input type="text" name="email" id="email" placeholder="example@gmail.com" onKeyUp="return emailVal()"/>
                                            <label id="commentEmailPrompt" style="font-size:15px; margin-left:10px; "></label><br>
                                            
                                       <label for="tel">Phone Number </label><br>
                                            <input type="text" name="tel" id="tel" placeholder=" Mobile " onKeyUp="return phoneNoVal()"/>
                                            <label id="commentPhonePrompt" style="font-size:15px; margin-left:10px; "></label><br>
                                            
                                       <label for="username">User Name </label><br>
                                            <input type="text" name="username" id="username" placeholder=" xxxxxxxxxxVx (NICx) " onKeyUp="return nicVal()"/>
                                            <label id="commentUserNamePrompt" style="font-size:15px; margin-left:10px; "></label><br>
                                            
                                        <label for="password">Password</label><br>
                                            <input type="password" name="password" id="password" placeholder=" password " onKeyUp="return passwordVal()"/>
                                         <label id="commentPasswordPrompt" style="font-size:15px; margin-left:10px; "></label><br>
                                         
                                         <label for="cpassword">Confirm Password</label><br>
                                            <input type="password" name="cpassword" id="cpassword" placeholder=" Confirm password " onKeyUp="return confirmPass()"/>
                                         <label id="commentCPasswordPrompt" style="font-size:15px; margin-left:10px; "></label><br>
                                            
                                              <input id="rbut" type="submit" value="Register" onClick="return confirmAdd();">
                                              <input id="cbut"type="reset" value="Clear" >
                                              <input id="back"type="button" value="Back" onClick="location.href='labassistant.php'" >
                                
                    </div>
                    
                 
                   
                </form>
            
            
            
           </div>
       
       
        
        
        
        
    </div>



</body>
</html>
