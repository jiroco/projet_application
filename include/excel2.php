<?php
include("connexiondb.php");
require_once dirname(__FILE__) . '/../Classes/PHPExcel.php';
define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
session_start();
$req=$DBcon->prepare("SELECT * FROM setup2");
$check=$req->execute();




if($check){
	
	// Create new PHPExcel object
	echo date('H:i:s') , " Create new PHPExcel object" , EOL;
	$objPHPExcel = new PHPExcel();

	// Set document properties
	echo date('H:i:s') , " Set document properties" , EOL;
	$objPHPExcel->getProperties()->setCreator("Jean Savoldelli")
								 ->setLastModifiedBy("Jean Savoldelli")
								 ->setTitle("setup2")
								 ->setSubject("")
								 ->setDescription("Tableau de setup2")
								 ->setKeywords("")
								 ->setCategory("");


	// Add some data
	echo date('H:i:s') , " Add some data" , EOL;
	$objPHPExcel->setActiveSheetIndex(0)
	            ->setCellValue('A1', '')
	            ->setCellValue('B1', 'Exigence fonctionnelle')
	            ->setCellValue('C1', 'Organe')
	            ->setCellValue('D1', 'Besoin')
	            ->setCellValue('E1', 'Exigence besoin');
	$j=1;
	while ($donnee = $req->fetch()){
		$j+=1;
		$objPHPExcel->setActiveSheetIndex(0)
					->setCellValue('A'.$j, $donnee["TYPE2"])
		            ->setCellValue('B'.$j, $donnee["1"])
		            ->setCellValue('C'.$j, $donnee["2"])
		            ->setCellValue('D'.$j, $donnee["3"])
		            ->setCellValue('E'.$j, $donnee["4"]);
	}
	
}

else
    echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Erreur de requete.</div></div>";        

$req->closeCursor();
 
echo date('H:i:s') , " Write to Excel2007 format" , EOL;
$callStartTime = microtime(true);
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('data/'.$_SESSION["USERNAME"].'/reglage_setup_2.xlsx');
$callEndTime = microtime(true);
$callTime = $callEndTime - $callStartTime;

echo date('H:i:s') , " File written to " , str_replace('.php', '.xlsx', pathinfo(__FILE__, PATHINFO_BASENAME)) , EOL;
echo 'Call time to write Workbook was ' , sprintf('%.4f',$callTime) , " seconds" , EOL;

?>