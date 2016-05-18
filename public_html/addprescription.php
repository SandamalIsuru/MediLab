<?php session_start();
if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }
    
    $ptid="";
?>
<html>
<head>
    <title>Add prescription</title>
        <link rel="stylesheet" href="css/doctorsearch.css"/>
        <link rel="stylesheet" href="css/reset.css"/>
    	<link rel="stylesheet" href="css/text.css"/>
    	<link rel="stylesheet" href="css/960_12_col.css"/>

        <script type="text/javascript" src="js/jquery-1.11.3.min.js"> </script>
        <script type="text/javascript" src="js/docSearch.js"></script>
        <link rel="stylesheet" href="css/addpre.css"/>
       <script src="js/validation.js"></script>
    
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
    
    <div class="container_12">
        <div class="main">
            <div class="grid_4">
            <nav>
                <div class="L1"><a href="doctorhome.php" id="A1" >Home</a></div>
              
                <div class="L3 "><a href="docsearchpatient.php"  id="A3" >Search Patient</a></div>
                <div class="L4"><a href="doctorAccountInfo.php"  id="A4" target="_blank">Account Info</a></div>
                <div class="L2 selected"><a href="#"  id="A2">Add Prescription</a></div>
            </nav>
           
        </div>
            <div class="grid_8">
                <div class="grid_6 side">
                <form action="php/prescription.php" name="frm" method="post" autocomplete="off" id="nameChange">

                    <?php $docid=$_SESSION['username']; 
                    ?>

                    <div class="result"></div>
                    <label>Patient Id</label>

                    <input type="text" name="username1" id="username" placeholder="patient Id" onKeyUp="return nicVal()"/><br>
                    <label id="commentUserNamePrompt" ></label><br>
                    
                    <label>Doctor Id</label>
                    <input type="text" name="did" id="did" readonly placeholder="doctor Id" value="<?=$docid?>"><br>

                    <label>Pres Date</label>
                    <input type="text" name="prdate" id="predate" placeholder="date" readonly value="<?php echo date('Y-m-d');?>"><br>
                    
                    <label>Description</label>
                    
                    <textarea id="details" name="decription" cols="40" rows="8"></textarea>

                    <input id="submit" type="submit" value="SUBMIT">


                    <script src="js/jquery-1.11.3.js"></script>
                    <script src="js/init.js"></script>


                </form>


                </div>

                

                
            </div>
        </div>
         
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

