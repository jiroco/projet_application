<?php
include("connexiondb.php");
session_start();
$req=$DBcon->prepare("SELECT * FROM setup2");
$check=$req->execute();

if($check){
	$output = '
		<table class="table" bordered="1">
		<tr>
			<th></th>
			<th>Exigence fonctionnelle</th>
			<th>Organe</th>
			<th>Besoin</th>
			<th>Exigence besoin</th>
		</tr>
		';

	while($donnee = $req->fetch()){
		$output .= '
			<tr>
				<th>'.$donnee["TYPE2"].'</th>
				<th>'.$donnee["1"].'</th>
				<th>'.$donnee["2"].'</th>
				<th>'.$donnee["3"].'</th>
				<th>'.$donnee["4"].'</th>
			</tr>
		';

	}

    }

else
    echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Erreur de requete.</div></div>";        

$output .= '</table>';
$req->closeCursor();
 
//header("Content-Type: application/xls");
//header("Content-disposition: inline; filename=/data/download.xls");
$file= fopen("../data/".$_SESSION['USERNAME']."/reglage_setup_2.xls","w+");
fputcsv($file,array($output));

?>