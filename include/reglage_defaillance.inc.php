<?php

$chemin = '../data/tableur.csv';
$fichier_csv = fopen($chemin, 'w+');
fprintf($fichier_csv, chr(0xEF).chr(0xBB).chr(0xBF));

$count=0;

if(isset($_POST['boxdefaillance_1']))
{
	if (isset($_POST['defaillance_1']) && !empty($_POST['defaillance_1'])) {
		fputcsv($fichier_csv, array($_POST["defaillance_1"]));
		$count+=1;

	}
	else{
		echo "Vous avez cochée la première case sans renseigner le réglage";
		echo "Vous allez être redirigé à la page de réglage";
	    header("Refresh: 3; URL=../reglage_defaillance.php");
	}


}

if(isset($_POST['boxdefaillance_2']))
{
	if (isset($_POST['defaillance_2']) && !empty($_POST['defaillance_2'])) {
		fputcsv($fichier_csv, array($_POST["defaillance_2"]));
		$count+=1;
	}
	else{
		echo "Vous avez cochée la deuxième case sans renseigner le réglage";
		echo "Vous allez être redirigé à la page de réglage";
	    header("Refresh: 3; URL=../reglage_defaillance.php");
	}


}

if(isset($_POST['boxdefaillance_3']))
{
	if (isset($_POST['defaillance_3']) && !empty($_POST['defaillance_3'])) {
		fputcsv($fichier_csv, array($_POST["defaillance_3"]));
		$count+=1;
	}
	else{
		echo "Vous avez cochée la troisième case sans renseigner le réglage";
		echo "Vous allez être redirigé à la page de réglage";
	    header("Refresh: 3; URL=../reglage_defaillance.php");
	}


}


if(isset($_POST['boxdefaillance_4']))
{
	if (isset($_POST['defaillance_4']) && !empty($_POST['defaillance_4'])) {
		fputcsv($fichier_csv, array($_POST["defaillance_4"]));
		$count+=1;
	}
	else{
		echo "Vous avez cochée la quatrième case sans renseigner le réglage";
		echo "Vous allez être redirigé à la page de réglage";
	    header("Refresh: 3; URL=../reglage_defaillance.php");
	}


}


if(isset($_POST['boxdefaillance_5']))
{
	if (isset($_POST['defaillance_5']) && !empty($_POST['defaillance_5'])) {
		fputcsv($fichier_csv, array($_POST["defaillance_5"]));
		$count+=1;
	}
	else{
		echo "Vous avez cochée la cinquième case sans renseigner le réglage";
		echo "Vous allez être redirigé à la page de réglage";
	    header("Refresh: 3; URL=../reglage_defaillance.php");
	}


}


if(isset($_POST['boxdefaillance_6']))
{
	if (isset($_POST['defaillance_6']) && !empty($_POST['defaillance_6'])) {
		fputcsv($fichier_csv, array($_POST["defaillance_6"]));
		$count+=1;
	}
	else{
		echo "Vous avez cochée la sixième case sans renseigner le réglage";
		echo "Vous allez être redirigé à la page de réglage";
	    header("Refresh: 3; URL=../reglage_defaillance.php");
	}


}


if(isset($_POST['boxdefaillance_7']))
{
	if (isset($_POST['defaillance_7']) && !empty($_POST['defaillance_7'])) {
		fputcsv($fichier_csv, array($_POST["defaillance_7"]));
		$count+=1;
	}
	else{
		echo "Vous avez cochée la septième case sans renseigner le réglage";
		echo "Vous allez être redirigé à la page de réglage";
	    header("Refresh: 3; URL=../reglage_defaillance.php");
	}


}

fclose($fichier_csv);
if ($count==0){
	echo "vous n'avez cochée aucunn mode de défaillance, réessayer";
	header("Refresh: 3; URL=../reglage_defaillance.php");
}
else{
	echo "Reglage de défaillance réussi";
	header("Refresh: 3; URL=../reglage_setup.php");
}

	

// fermeture du fichier csv



?>