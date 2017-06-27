<?php
include("connexiondb.php");
require_once dirname(__FILE__) . '/../Classes/PHPExcel.php';
define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
session_start();
$req=$DBcon->prepare("SELECT * FROM setup3");
$check=$req->execute();




if($check){
	
	// Create new PHPExcel object
	echo date('H:i:s') , " Create new PHPExcel object" , EOL;
	$objPHPExcel = new PHPExcel();

	// Set document properties
	echo date('H:i:s') , " Set document properties" , EOL;
	$objPHPExcel->getProperties()->setCreator("Jean Savoldelli")
								 ->setLastModifiedBy("Jean Savoldelli")
								 ->setTitle("setup3")
								 ->setSubject("")
								 ->setDescription("Tableau de setup3")
								 ->setKeywords("")
								 ->setCategory("");


	// Add some data
	echo date('H:i:s') , " Add some data" , EOL;
	$donnee=$req->fetch();
	$objPHPExcel->setActiveSheetIndex(0)
	            ->setCellValue('A1', '')
	            ->setCellValue('B1', 'Effet local')
	            ->setCellValue('A2', "Séparateur")
	            ->setCellValue('B2', $donnee["1"]);

}

else
    echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Erreur de requete.</div></div>";        

$req->closeCursor();
 
echo date('H:i:s') , " Write to Excel2007 format" , EOL;
$callStartTime = microtime(true);
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('data/'.$_SESSION["USERNAME"].'/reglage_setup_3.xlsx');
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;

echo date('H:i:s') , " File written to " , str_replace('.php', '.xlsx', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;
echo 'Call time to write Workbook was ' , sprintf('%.4f',$callTime) , " seconds" , EOL;

?>