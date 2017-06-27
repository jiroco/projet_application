<?php
include("connexiondb.php");
require_once dirname(__FILE__) . '/../Classes/PHPExcel.php';
define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

session_start();
$req=$DBcon->prepare("SELECT * FROM setup");
$check=$req->execute();


//traiter le $_POST des titres de la premiere ligne
if (isset($_POST["firstset"]) && !empty($_POST["firstset"])){
	$first=$_POST["firstset"];
}
else{
	$first="Numero";
}
if (isset($_POST["secondset"]) && !empty($_POST["secondset"])){
	$second=$_POST["secondset"];
}
else{
	$second="Fonction";
}
if (isset($_POST["thirdset"]) && !empty($_POST["thirdset"])){
	$third=$_POST["thirdset"];
}
else{
	$third="Exigence fonctionnelle";
}
if (isset($_POST["fourthset"]) && !empty($_POST["fourthset"])){
	$fourth=$_POST["fourthset"];
}
else{
	$fourth="Organe";
}
if (isset($_POST["fiveset"]) && !empty($_POST["fiveset"])){
	$five=$_POST["fiveset"];
}
else{
	$five="Mode de défaillance";
}
if (isset($_POST["sixset"]) && !empty($_POST["sixset"])){
	$six=$_POST["sixset"];
}
else{
	$six="Cause locale";
}
if (isset($_POST["sevenset"]) && !empty($_POST["sevenset"])){
	$seven=$_POST["sevenset"];
}
else{
	$seven="Effet locale";
}
if (isset($_POST["eightset"]) && !empty($_POST["eightset"])){
	$eight=$_POST["eightset"];
}
else{
	$eight="Besoin";
}
if (isset($_POST["nineset"]) && !empty($_POST["nineset"])){
	$nine=$_POST["nineset"];
}
else{
	$nine="Exigence besoin";
}
if (isset($_POST["tenset"]) && !empty($_POST["tenset"])){
	$ten=$_POST["tenset"];
}
else{
	$ten="Nouvelle ligne ?";
}
if (isset($_POST["elevenset"]) && !empty($_POST["elevenset"])){
	$eleven=$_POST["elevenset"];
}
else{
	$eleven="A garder ?";
}



if($check){
	
	// Create new PHPExcel object
	echo date('H:i:s') , " Create new PHPExcel object" , EOL;
	$objPHPExcel = new PHPExcel();

	// Set document properties
	echo date('H:i:s') , " Set document properties" , EOL;
	$objPHPExcel->getProperties()->setCreator("Jean Savoldelli")
								 ->setLastModifiedBy("Jean Savoldelli")
								 ->setTitle("setup1")
								 ->setSubject("")
								 ->setDescription("Tableau de setup1")
								 ->setKeywords("")
								 ->setCategory("");


	// Add some data
	echo date('H:i:s') , " Add some data" , EOL;
	$objPHPExcel->setActiveSheetIndex(0)
	            ->setCellValue('A1', '')
	            ->setCellValue('B1', $first)
	            ->setCellValue('C1', $second)
	            ->setCellValue('D1', $third)
	            ->setCellValue('E1', $fourth)
	            ->setCellValue('F1', $five)
	            ->setCellValue('G1', $six)
	            ->setCellValue('H1', $seven)
	            ->setCellValue('I1', $eight)
	            ->setCellValue('J1', $nine)
	            ->setCellValue('K1', $ten)
	            ->setCellValue('L1', $eleven);
	$j=1;
	while ($donnee = $req->fetch()){
		$j+=1;
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A'.$j, $donnee["TYPE"])
		            ->setCellValue('B'.$j, $donnee["1"])
		            ->setCellValue('C'.$j, $donnee["2"])
		            ->setCellValue('D'.$j, $donnee["3"])
		            ->setCellValue('E'.$j, $donnee["4"])
		            ->setCellValue('F'.$j, $donnee["5"])
		            ->setCellValue('G'.$j, $donnee["6"])
		            ->setCellValue('H'.$j, $donnee["7"])
		            ->setCellValue('I'.$j, $donnee["8"])
		            ->setCellValue('J'.$j, $donnee["9"])
		            ->setCellValue('K'.$j, $donnee["10"])
		            ->setCellValue('L'.$j, $donnee["11"]);
		
	}
	
}

else
    echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Erreur de requete.</div></div>";        

$req->closeCursor();
 
echo date('H:i:s') , " Write to Excel2007 format" , EOL;
$callStartTime = microtime(true);
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('data/'.$_SESSION["USERNAME"].'/reglage_setup.xlsx');
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;

echo date('H:i:s') , " File written to " , str_replace('.php', '.xlsx', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;
echo 'Call time to write Workbook was ' , sprintf('%.4f',$callTime) , " seconds" , EOL;

?>