<?php

$chemin = '../data/tableursetup.csv';
$fichier_csv_setup = fopen($chemin, 'w+');
fprintf($fichier_csv_setup, chr(0xEF).chr(0xBB).chr(0xBF));



if(isset($_POST['firstset']) && !empty($_POST['firstset']))
{
	$ligne1=$_POST['firstset'];
	foreach ($_POST['firstsetbox'] as $checked ) {
		if ($checked=="on"){
			$compte+=1;
		}
	}
	if (isset($_POST['defaillance_1']) && !empty($_POST['defaillance_1'])) {
		fputcsv($fichier_csv_setup, array($_POST["defaillance_1"]));

	}
	else{
		echo "Vous avez cochée la première case sans renseigner le réglage";
		echo "Vous allez être redirigé à la page de réglage";
	    header("Refresh: 3; URL=../reglage_setup.php");
	}
}
/*
if(isset($_POST['boxdefaillance_2']))
{
	if (isset($_POST['defaillance_2']) && !empty($_POST['defaillance_2'])) {
		fputcsv($fichier_csv_setup, array($_POST["defaillance_2"]));
	}
	else{
		echo "Vous avez cochée la deuxième case sans renseigner le réglage";
		echo "Vous allez être redirigé à la page de réglage";
	    header("Refresh: 3; URL=../reglage_setup.php");
	}


}

if(isset($_POST['boxdefaillance_3']))
{
	if (isset($_POST['defaillance_3']) && !empty($_POST['defaillance_3'])) {
		fputcsv($fichier_csv_setup, array($_POST["defaillance_3"]));
	}
	else{
		echo "Vous avez cochée la troisième case sans renseigner le réglage";
		echo "Vous allez être redirigé à la page de réglage";
	    header("Refresh: 3; URL=../reglage_setup.php");
	}


}


if(isset($_POST['boxdefaillance_4']))
{
	if (isset($_POST['defaillance_4']) && !empty($_POST['defaillance_4'])) {
		fputcsv($fichier_csv_setup, array($_POST["defaillance_4"]));
	}
	else{
		echo "Vous avez cochée la quatrième case sans renseigner le réglage";
		echo "Vous allez être redirigé à la page de réglage";
	    header("Refresh: 3; URL=../reglage_setup.php");
	}


}


if(isset($_POST['boxdefaillance_5']))
{
	if (isset($_POST['defaillance_5']) && !empty($_POST['defaillance_5'])) {
		fputcsv($fichier_csv_setup, array($_POST["defaillance_5"]));
	}
	else{
		echo "Vous avez cochée la cinquième case sans renseigner le réglage";
		echo "Vous allez être redirigé à la page de réglage";
	    header("Refresh: 3; URL=../reglage_setup.php");
	}


}


if(isset($_POST['boxdefaillance_6']))
{
	if (isset($_POST['defaillance_6']) && !empty($_POST['defaillance_6'])) {
		fputcsv($fichier_csv_setup, array($_POST["defaillance_6"]));
	}
	else{
		echo "Vous avez cochée la sixième case sans renseigner le réglage";
		echo "Vous allez être redirigé à la page de réglage";
	    header("Refresh: 3; URL=../reglage_setup.php");
	}


}


if(isset($_POST['boxdefaillance_7']))
{
	if (isset($_POST['defaillance_7']) && !empty($_POST['defaillance_7'])) {
		fputcsv($fichier_csv_setup, array($_POST["defaillance_7"]));
	}
	else{
		echo "Vous avez cochée la septième case sans renseigner le réglage";
		echo "Vous allez être redirigé à la page de réglage";
	    header("Refresh: 3; URL=../reglage_setup.php");
	}


}


echo "Reglage de défaillance réussi";
header("Refresh: 3; URL=../reglage_setup.php");

// fermeture du fichier csv
fclose($fichier_csv_setup);
*/

?>
<a href="script.php"><button type="button" value="Valider"></a>
