<?php session_start();
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
?>
<?php
    $id=$_GET['id'];
    $date=$_GET['date'];

    

require('pdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,6,70);
    $this->Ln(8);
    // Arial bold 15
    $this->SetFont('Times','B',22);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Blood Report',0,0,'C');
    // Line break
    $this->Ln(10);
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





	require 'classes/dbconnect.php';
	
	$db = new Database("localhost", "u430353755_mlab", "12345f", "u430353755_mlab");
    $result = $db->query("SELECT * FROM blood_report WHERE p_id='$id' AND dater='$date'");

    if($result){
		while ($row = mysqli_fetch_assoc($result)) {
			$name = $row['p_name'];
            $labname=$row['L_id'];
			$age = $row['age'];
			$FBS = $row['FBS'];
			$SC = $row['SC'];
			$BU = $row['BU'];
			$SGOT = $row['SGOT'];
			$SGPT = $row['SGPT'];
            $SA = $row['SA'];
            $SP = $row['SP'];
            $SeA = $row['SeA'];
            $glo = $row['globulin'];


		}
        

	}
    $db = new Database("localhost", "u430353755_mlab", "12345f", "u430353755_mlab");
    $resultL = $db->query("SELECT * FROM laboratory WHERE username='$labname'");
    if($resultL){
        while ($row = mysqli_fetch_assoc($resultL)) {
            $labfname = $row['fname'];
            $staddress = $row['staddress'];
            $l2address = $row['l2address'];
            $city = $row['city'];
            $telphone = $row['telphone1'];

        }
    }

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$pdf->SetLeftMargin(40);
$pdf->Cell(100,7,$labfname." "."Laboratory",0,0,'L');
$pdf->Ln(5);
//$pdf->Cell(100,7,$staddress,0,0,'R');
$pdf->Cell(100,7,$staddress." ".$l2address,0,0,'L');
$pdf->Ln(5);
$pdf->Cell(100,7,$city,0,0,'L');
$pdf->Ln(5);
$pdf->Cell(100,7,$telphone,0,0,'L');
$pdf->Ln(10);
$pdf->Cell(40,7,"----------------------------------------------------------------------------------------------------");
$pdf->Ln(5);
$pdf->Cell(40,7,"Patient Name");
$pdf->Cell(30,7,$name,0,0,'C');
$pdf->Ln(10);
$pdf->Cell(40,7,"Age");
$pdf->Cell(30,7,$age,0,0,'C');
$pdf->Ln(8);
$pdf->Cell(40,7,"----------------------------------------------------------------------------------------------------");
$pdf->Ln(8);
$pdf->Cell(40,7,"Component");
$pdf->Cell(30,7,"Value",0,0,'C');
$pdf->Cell(40,7,"Average Value");
$pdf->Ln(2);
$pdf->Cell(40,7,"-------------");
$pdf->Cell(30,7,"-----------",0,0,'C');
$pdf->Cell(40,7,"------------------");
$pdf->Ln(8);
$pdf->Cell(40,7,"Fasting Blood Sugar");
$pdf->Cell(30,7,$FBS,0,0,'C');
$pdf->Cell(40,7,"mg% [ Normal Value :- 70-110 mg%]");
$pdf->Ln(20);
$pdf->Cell(40,7,"Serum Cholesterol");
$pdf->Cell(30,7,$SC,0,0,'C');
$pdf->Cell(40,7,"mg% [ Normal Value :- 150 - 225 mg%]");
$pdf->Ln(20);
$pdf->Cell(40,7,"Blood Urea");
$pdf->Cell(30,7,$BU,0,0,'C');
$pdf->Cell(40,7,"mg% [ Normal Value :- 13 - 45 mg%]");
$pdf->Ln(20);
$pdf->Cell(40,7,"S.G.O.T.(A.S.T.)");
$pdf->Cell(30,7,$SGOT,0,0,'C');
$pdf->Cell(40,7,"u/l [ Normal Value :- 35u/l]");
$pdf->Ln(20);
$pdf->Cell(40,7,"S.G.P.T.(A.L.T.)");
$pdf->Cell(30,7,$SGPT,0,0,'C');
$pdf->Cell(40,7,"u/l [ Normal Value :- 40u/l]");
$pdf->Ln(20);
$pdf->Cell(40,7,"Serum Alkaline");
$pdf->Cell(30,7,$SA,0,0,'C');
$pdf->Cell(40,7,"u/l [ Normal Value :- 90 - 320 u / l ]");
$pdf->Ln(20);
$pdf->Cell(40,7,"Serum Protein");
$pdf->Cell(30,7,$SP,0,0,'C');
$pdf->Cell(40,7,"g/dl 6.4-8.4]");
$pdf->Ln(20);
$pdf->Cell(40,7,"Serum Albumin");
$pdf->Cell(30,7,$SeA,0,0,'C');
$pdf->Cell(40,7,"g/dl [3.7-5.0]");
$pdf->Ln(15);
$pdf->Cell(40,7,"Globulin");
$pdf->Cell(30,7,$glo,0,0,'C');
$pdf->Cell(40,7,"g/dl [2.2 - 3.4]");

$pdf->Ln(15);
$pdf->Cell(40,7,"Upload Date");
$pdf->Cell(30,7,$date,0,0,'C');

$pdf->Output();

$db->dbclose();

?>