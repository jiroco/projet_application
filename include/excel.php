<?php
include("connexiondb.php");
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
	$output = '
		<table class="table" bordered="1">
		<tr>
			<th></th>
			<th>'.$first.'</th>
			<th>'.$second.'</th>
			<th>'.$third.'</th>
			<th>'.$fourth.'</th>
			<th>'.$five.'</th>
			<th>'.$six.'</th>
			<th>'.$seven.'</th>
			<th>'.$eight.'</th>
			<th>'.$nine.'</th>
			<th>'.$ten.'</th>
			<th>'.$eleven.'</th>
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
$file= fopen("../data/".$_SESSION['USERNAME']."/reglage_setup.xls","w+");
fputcsv($file,array($output));

?>