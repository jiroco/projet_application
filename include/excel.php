<?php
include("connexiondb.php");
$req=$DBcon->prepare("SELECT * FROM setup");
$check=$req->execute();

if($check){
	$output = '
		<table class="table" bordered="1">
		<tr>
			<th></th>
			<th>'.$_POST["firstset"].'</th>
			<th>'.$_POST["secondset"].'</th>
			<th>'.$_POST["thirdset"].'</th>
			<th>'.$_POST["fourthset"].'</th>
			<th>'.$_POST["fiveset"].'</th>
			<th>'.$_POST["sixset"].'</th>
			<th>'.$_POST["sevenset"].'</th>
			<th>'.$_POST["eightset"].'</th>
			<th>'.$_POST["nineset"].'</th>
			<th>'.$_POST["tenset"].'</th>
			<th>'.$_POST["elevenset"].'</th>
		</tr>
		';

	while($donnee = $req->fetch()){
		$output .= '
			<tr>
				<th>'.$donnee["TYPE"].'</th>
				<th>'.$donnee["1"].'</th>
				<th>'.$donnee["2"].'</th>
				<th>'.$donnee["3"].'</th>
				<th>'.$donnee["4"].'</th>
				<th>'.$donnee["5"].'</th>
				<th>'.$donnee["6"].'</th>
				<th>'.$donnee["7"].'</th>
				<th>'.$donnee["8"].'</th>
				<th>'.$donnee["9"].'</th>
				<th>'.$donnee["10"].'</th>
				<th>'.$donnee["11"].'</th>
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
$file= fopen("../data/reglage_setup.xls","w+");
fputcsv($file,array($output));

?>