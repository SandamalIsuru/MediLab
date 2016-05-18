<?php session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
?>
<?php
require('pdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,6,70);
    $this->Ln(15);
    // Arial bold 15
    $this->SetFont('Times','B',22);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Personal Information',0,0,'C');
    // Line break
    $this->Ln(25);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}



$pname = $_SESSION['fname'];
$user = $_SESSION['username'];

	require 'classes/dbconnect.php';
	
	$db = new Database("localhost", "u430353755_mlab", "12345f", "u430353755_mlab");
    $result = $db->query("SELECT * FROM patient WHERE username='$user'");

    if($result){
		while ($row = mysqli_fetch_assoc($result)) {
			$firstname = $row['fname'];
			$lastname = $row['lname'];
			$dob = $row['dob'];
			$mail = $row['email'];
			$sex = $row['sex'];
			$A1 = $row['staddress'];
			$A2 = $row['l2address'];
			$city = $row['city'];


		}
        

	}


// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$pdf->SetLeftMargin(40);

$pdf->Cell(40,7,"UserId");
$pdf->Cell(30,7,$user);
$pdf->Ln(20);
$pdf->Cell(40,7,"Full Name");
$pdf->Cell(30,7,$firstname." ".$lastname);
$pdf->Ln(20);
$pdf->Cell(40,7,"Date OF Birth");
$pdf->Cell(30,7,$dob);
$pdf->Ln(20);
$pdf->Cell(40,7,"Gender");
$pdf->Cell(30,7,$sex);
$pdf->Ln(20);
$pdf->Cell(40,7,"Email");
$pdf->Cell(30,7,$mail);
$pdf->Ln(20);
$pdf->Cell(40,7,"Address");
$pdf->Cell(30,7,$A1." , ".$A2." , ".$city);
$pdf->Output();

?>