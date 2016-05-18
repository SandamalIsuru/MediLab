<?php
	session_start();
function displayError($error)
{
    // Display a div with a class of error, We style it using CSS
    echo "<div class='error'>$error</div><br>";
}


function displayMessage($message)
{
    // Display a div with a class of message, We style it using CSS
    echo "<div class='message'>$message</div> <br>";
}


if (isset($_POST['username1']) && isset($_POST['decription']) && isset($_POST['prdate'])) {

    if (empty($_POST['username1']) && ($_POST['decription']=="") ) {
        displayError('You didn\'t entered nothing!');
        header( "refresh:1; url=../addprescription.php" );
    }
    else if(empty($_POST['prdate'])){
    	displayError('You didn\'t entered Date!');
    } 
    else if(empty($_POST['decription'])){
    	displayError('You didn\'t entered prescription!');
    }
    else if(empty($_POST['username1'])){
    	displayError('You didn\'t entered PatientId!');
    }else{
    	if($_POST['prdate']!=date('Y-m-d')){
    		displayError('You didn\'t entered Current Date!');
    	}else{


    	require '../classes/dbconnect.php';
	
		$patientId = $_POST['username1'];

		$db = new Database("localhost", "u430353755_mlab", "12345f", "u430353755_mlab");
		$result = $db->query("SELECT * FROM patient WHERE username='$patientId'");

		if($result->num_rows<= 0){
			//sleep(10);
			//echo "that record doesnot exists";
			displayMessage('that record doesnot exists');
			header( "refresh:2; url=../addprescription.php" );
			//header(" refresh:5; Location: ../addprescription.php");
		}
		else{
			$patientId = $_POST['username1'];
			$doctorid = $_POST['did'];
			$predate = $_POST['prdate'];
			$decription = $_POST['decription'];

			$x = $db->insert("INSERT INTO prescription VALUES
			('$patientId','$doctorid','$predate','$decription')");

			
			if($x==1){
				displayMessage('Succefully added');
			}
			else{
				displayMessage('Duplicate Entry');
			}

			


			
						
			
		}
	
	

    }
}
}

	
	
		
		
		

		


	
		
    
    ?>