<html>
<head>
<title>JS Charts</title>
<script type="text/javascript" src="sources/jscharts.js"></script>
</head>
<body>

<div id="chart_container">Loading chart...>
<?php session_start();

require 'classes/dbconnect.php';

$username = $_GET['id'];

$db = new Database("localhost", "u430353755_mlab", "12345f", "u430353755_mlab");
$result = $db->query("SELECT * FROM blood_report WHERE p_id='$username'");
$result1 = $db->query("SELECT description,pr_date,d_id FROM prescription WHERE p_id='$username'");
$num_rows = $result->num_rows;
$num_rows1 = $result1->num_rows;

$array1 = array(); 
$array2 = array(); 
$array3 = array();
$array4 = array(); 
$array5 = array();
$array7 = array(); 

$array8 = array();
$array9 = array();


if($result){
	for ($i = 0; $i < $num_rows; $i++){
		while ($row = mysqli_fetch_assoc($result)) {
			$fbs = $row['FBS'];
			$sgot = $row['SGOT'];
			$sgpt = $row['SGPT'];
			$bu = $row['BU'];
			$sc = $row['SC'];
			$year = $row['dater'];
					
			array_push($array1, $fbs);
			array_push($array2, $sgot);
			array_push($array3, $sgpt);
			array_push($array4, $bu);
			array_push($array5, $sc);
			array_push($array7, $year);
			}
	}
}

if($result1){
	for ($i = 0; $i < $num_rows1; $i++){
		while ($row = mysqli_fetch_assoc($result1)) {
			$desc = $row['description'];
			$prdate = $row['pr_date'];
			$did = $row['d_id'];
			$disstr = "Doctor ID - ";
			$fulldesc = $desc . ', ' . $disstr . ' ' . $did;
					
			array_push($array8, $fulldesc);
			
			array_push($array9, $prdate);
			}
	}
}

?>

	<script type="text/javascript">
	
		var len = <?php echo $num_rows ?>;
		var len1 = <?php echo $num_rows1 ?>;
		var ar1 = <?php echo json_encode($array1) ?>;
		var ar2 = <?php echo json_encode($array2) ?>;
		var ar3 = <?php echo json_encode($array3) ?>;
		var ar4 = <?php echo json_encode($array4) ?>;
		var ar5 = <?php echo json_encode($array5) ?>;
		var ar7 = <?php echo json_encode($array7) ?>;
		var ar8 = <?php echo json_encode($array8) ?>;
		var ar9 = <?php echo json_encode($array9) ?>;
		
		
        var myChart = new JSChart('chart_container', 'line', '');
		
		var myData1 = new Array();
		var myData2 = new Array();
		var myData3 = new Array();
		var myData4 = new Array();
		var myData5 = new Array();
		var myData8 = new Array();
		
		
		
		var myChart1 = new JSChart('chart_container', 'line', '');
		var myData9 = new Array();
		for (i = 0; i < ar9.length; i++) {
    		myData9[i] = [i+1, 10];
		}
		
		
		
		for (i = 0; i < len; i++) {
    		myData1[i] = [i+1, parseInt(ar1[i])];
			 
		}
		for (i = 0; i < len; i++) {
    		myData2[i] = [i+1, parseInt(ar2[i])];
			
		}
		for (i = 0; i < len; i++) {
    		myData3[i] = [i+1, parseInt(ar3[i])];
			 
		}
		for (i = 0; i < len; i++) {
    		myData4[i] = [i+1, parseInt(ar4[i])];
			 
		}
		for (i = 0; i < len; i++) {
    		myData5[i] = [i+1, parseInt(ar5[i])];
			 
		}
		for (i = 0; i < ar8.length; i++) {
    		myData8[i] = [i+1, ar8[i]];
			 
		}
		
		
		myChart.setDataArray(myData1, 'FBS');
        myChart.setDataArray(myData2, 'SGOT');
        myChart.setDataArray(myData3, 'SGPT');
		myChart.setDataArray(myData4, 'Blood Urine');
		myChart.setDataArray(myData5, 'Serum Cholestrol');
        myChart.colorize(['#3E90C9','#3E90C9','#3E90C9','#3E90C9','#3E90C9','#3E90C9','#3E90C9','#3E90C9','#3E90C9','#3E90C9']);
        myChart.setSize(1300, 400);
        myChart.setAxisValuesNumberY(5);
        myChart.setIntervalStartY(0);
        myChart.setIntervalEndY(200);
		for (i = 0; i < len; i++) {
    		myChart.setLabelX([i+1,ar7[i]]);
			 
		}
		
		
        myChart.setAxisValuesNumberX(len);
        myChart.setShowXValues(false);
        myChart.setTitleColor('#454545');
        myChart.setAxisValuesColor('#454545');
        myChart.setLineColor('#A4D314', 'SGPT');
		myChart.setLineColor('#ff0f0f', 'FBS');
        myChart.setLineColor('#BBBBBB', 'Serum alkaline');
		myChart.setLineColor('#E6EC05', 'Blood Urine');
		myChart.setLineColor('#8A2BE2', 'Serum Cholestrol');
		
		for (i = 0; i < len; i++) {
    		myChart.setTooltip([i+1,'']);
			
		}
		
		myChart.setTitle('Summarization of Blood Report');
		myChart.setTitleColor('#5555AA');
		myChart.setTitleFontSize(18);
		myChart.setTitleColor('#000');
		myChart.setAxisWidth(5);
		myChart.setAxisValuesFontSizeY(15);
		myChart.setBackgroundColor('#FFF8DC');
		myChart.setBarValuesFontSize(15);
		myChart.setLabelFontSizeX(15);
		myChart.setFlagColor('#000');
		myChart.setGrid(true);
		myChart.setGridColor('#8B8989');
		myChart.setLegendFontSize(18);
		myChart.setLegendColor('#000');
        myChart.setFlagRadius(4);
        myChart.setLegendShow(true);
        myChart.setLegendPosition('right top');
        myChart.draw();
		
		
		myChart1.setDataArray(myData9, 'FBS');
		myChart1.setSize(1200, 200);
        myChart1.setAxisValuesNumberY(2);
        myChart1.setIntervalStartY(0);
        myChart1.setIntervalEndY(20);
		myChart1.setShowXValues(false);
		for (i = 0; i < ar9.length; i++) {
    		myChart1.setLabelX([i+1,ar9[i]]);
			 
		}
		
		for (i = 0; i < len1; i++) {
    		myChart1.setTooltip([i+1,myData8[i][1]]);
		}
		myChart1.setTooltipFontSize(15);
		myChart1.setTooltipFontFamily('candara');
		myChart1.setTooltipBorder('1px solid #000');
		myChart1.setTitle('Prescription Details');
		myChart1.setTitleColor('#5555AA');
		myChart1.setTitleFontSize(18);
		myChart1.setTitleColor('#000');
		myChart1.setAxisWidth(5);
		myChart1.setAxisValuesFontSizeY(15);
		myChart1.setBackgroundColor('#FFF8DC');
		myChart1.setBarValuesFontSize(15);
		myChart1.setLabelFontSizeX(12);
		myChart1.setFlagColor('#000');
		myChart1.setGrid(true);
		myChart1.setGridColor('#8B8989');
		myChart1.setLegendFontSize(18);
		myChart1.setLegendColor('#000');
        myChart1.setFlagRadius(10);
		myChart1.draw();
    </script>
 </div>
</body>
</html>