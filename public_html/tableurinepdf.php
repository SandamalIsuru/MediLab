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
    $this->Cell(30,10,'Urine Report',0,0,'C');
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
    $result = $db->query("SELECT * FROM urine_report WHERE p_id='$id' AND dater='$date'");

    if($result){
		while ($row = mysqli_fetch_assoc($result)) {
			$name = $row['p_name'];
            $labname=$row['l_id'];
			$age = $row['p_age'];
			$FBS = $row['color'];
			$SC = $row['transparency'];
			$BU = $row['ph'];
			$SGOT = $row['albumin'];
			$SGPT = $row['sugsr'];
            $SA = $row['bill'];
            $SP = $row['urobilin'];
            $SeA = $row['pus_cells'];
            $glo = $row['red_cells'];
            $epithelial_cells = $row['epithelial_cells'];
            $casts = $row['casts'];
            $crystals = $row['crystals'];
            $oraganisms = $row['oraganisms'];

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

$pdf->Ln(2);
$pdf->Cell(40,7,"-------------");
$pdf->Cell(30,7,"-----------",0,0,'C');

$pdf->Ln(8);
$pdf->Cell(40,7,"Colour");
$pdf->Cell(30,7,$FBS,0,0,'C');

$pdf->Ln(15);
$pdf->Cell(40,7,"Transparency");
$pdf->Cell(30,7,$SC,0,0,'C');

$pdf->Ln(15);
$pdf->Cell(40,7,"pH");
$pdf->Cell(30,7,$BU,0,0,'C');

$pdf->Ln(12);
$pdf->Cell(40,7,"Albumin");
$pdf->Cell(30,7,$SGOT,0,0,'C');

$pdf->Ln(12);
$pdf->Cell(40,7,"Sugar");
$pdf->Cell(30,7,$SGPT,0,0,'C');

$pdf->Ln(15);
$pdf->Cell(40,7,"Bile");
$pdf->Cell(30,7,$SA,0,0,'C');

$pdf->Ln(12);
$pdf->Cell(40,7,"Urobilin");
$pdf->Cell(30,7,$SP,0,0,'C');

$pdf->Ln(12);
$pdf->Cell(40,7,"Pus Cells");
$pdf->Cell(30,7,$SeA,0,0,'C');

$pdf->Ln(12);
$pdf->Cell(40,7,"Red Cells");
$pdf->Cell(30,7,$glo,0,0,'C');


$pdf->Ln(12);

$pdf->Cell(40,7,"Epithelial Cells");
$pdf->Cell(30,7,$epithelial_cells,0,0,'C');
$pdf->Ln(12);

$pdf->Cell(40,7,"Casts");
$pdf->Cell(30,7,$casts,0,0,'C');
$pdf->Ln(12);

$pdf->Cell(40,7,"Crystals");
$pdf->Cell(30,7,$crystals,0,0,'C');
$pdf->Ln(12);

$pdf->Cell(40,7,"Organisms");
$pdf->Cell(30,7,$oraganisms,0,0,'C');
$pdf->Ln(12);

$pdf->Cell(40,7,"Upload Date");
$pdf->Cell(30,7,$date,0,0,'C');

$pdf->Output();

$db->dbclose();

?>