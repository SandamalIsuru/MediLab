
<?php

require_once "vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer;

//From email address and name
$mail->From = "from@yourdomain.com";
$mail->FromName = "Full Name";

//To address and name
$mail->addAddress("recepient1@example.com", "Recepient Name");
$mail->addAddress("recepient1@example.com"); //Recipient name is optional

//Address to which recipient will reply
$mail->addReplyTo("reply@yourdomain.com", "Reply");

//CC and BCC
$mail->addCC("cc@example.com");
$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}

The code and comments should be sufficiently clear to explain everything that’s going on.
Sending an E-Mail with Attachments

Let’s see an example on how to send an email with attachments using PHPMailer.

<?php

require_once "vendor/autoload.php";

$mail = new PHPMailer;

$mail->From = "from@yourdomain.com";
$mail->FromName = "Full Name";

$mail->addAddress("recipient1@example.com", "Recipient Name");

//Provide file path and name of the attachments
$mail->addAttachment("file.txt", "File.txt");        
$mail->addAttachment("images/profile.png"); //Filename is optional

$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}


if(isset($_POST['name'])){
	
	$name = $_POST['name'];	
	$email = $_POST['email'];	
	$message = $_POST['message'];
	
	$form = 'Form: $email';
	$body = $name."\n\n".$message;
	
	
	mail("isurusandamalis@gmsil.com","New mail From MediLab", $body, $form);
	echo "mail sent";	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My boootstrap site</title>
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/bootstrap.css" rel="stylesheet" />

</head>


<body>
<br/>
<div class="container">
        
    <div class="jumbotron " style="background-color:#E9E9E9">
    
        <div class="row">
        	<div class="col-md-2">
            </div>
            
            <div class="col-md-10" style=" margin:50px 50px;">
                <form action="contact.php" method="post">
                    <ul class="nav nav-list" >
                        <li>
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" style="width:300px;" />
                        </li>
                            
                        <li>
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" style="width:400px;" />
                        </li>
                        
                        <li>
                            <label for="message">Message</label>
                            <textarea id="message" name="message" style="width:400px; height:200px;" ></textarea>
                        </li>
                        
                        <li>
                            <input type="submit" value="Send" style=" background-color:#6CF;" />
                        </li>
                    </ul>
                </form>
            </div>
            
        </div>
    </div>
</div>
</body>
</html>
