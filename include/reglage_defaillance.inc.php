<?php
include("include/connexiondb.php");
session_start();
if ((!isset($_SESSION['IDUSER'])) || (empty($_SESSION['IDUSER']))){
    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
}
else{
	$check=0;
	$chemin = 'data/'.$_SESSION["USERNAME"].'/tableur.csv';
	$fichier_csv = fopen($chemin, 'w+');
	fprintf($fichier_csv, chr(0xEF).chr(0xBB).chr(0xBF));

	if(isset($_POST['boxdefaillance_1']))
	{
		if (isset($_POST['defaillance_1']) && !empty($_POST['defaillance_1'])) {
			fputcsv($fichier_csv, array($_POST["defaillance_1"]));

		}
		else{
		    echo "</br><div class='container col-md-8 col-md-offset-2'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Vous avez cochée le mode de défaillance 1 sans renseigner le réglage.</div></div>";
			$check+=1;
		}
	}

	if(isset($_POST['boxdefaillance_2']))
	{
		if (isset($_POST['defaillance_2']) && !empty($_POST['defaillance_2'])) {
			fputcsv($fichier_csv, array($_POST["defaillance_2"]));
		}
		else{
			echo "</br><div class='container col-md-8 col-md-offset-2'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Vous avez cochée le mode de défaillance 2 sans renseigner le réglage.</div></div>";
			$check+=1;
		}
	}

	if(isset($_POST['boxdefaillance_3']))
	{
		if (isset($_POST['defaillance_3']) && !empty($_POST['defaillance_3'])) {
			fputcsv($fichier_csv, array($_POST["defaillance_3"]));
		}
		else{
		    echo "</br><div class='container col-md-8 col-md-offset-2'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Vous avez cochée le mode de défaillance 3 sans renseigner le réglage.</div></div>";
			$check+=1;
		}
	}


	if(isset($_POST['boxdefaillance_4']))
	{
		if (isset($_POST['defaillance_4']) && !empty($_POST['defaillance_4'])) {
			fputcsv($fichier_csv, array($_POST["defaillance_4"]));
		}
		else{
		    echo "</br><div class='container col-md-8 col-md-offset-2'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Vous avez cochée le mode de défaillance 4 sans renseigner le réglage.</div></div>";
		    $check+=1;
		}
	}


	if(isset($_POST['boxdefaillance_5']))
	{
		if (isset($_POST['defaillance_5']) && !empty($_POST['defaillance_5'])) {
			fputcsv($fichier_csv, array($_POST["defaillance_5"]));
		}
		else{
		    echo "</br><div class='container col-md-8 col-md-offset-2'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Vous avez cochée le mode de défaillance 5 sans renseigner le réglage.</div></div>";
			$check+=1;
		}
	}


	if(isset($_POST['boxdefaillance_6']))
	{
		if (isset($_POST['defaillance_6']) && !empty($_POST['defaillance_6'])) {
			fputcsv($fichier_csv, array($_POST["defaillance_6"]));
		}
		else{
		    echo "</br><div class='container col-md-8 col-md-offset-2'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Vous avez cochée le mode de défaillance 6 sans renseigner le réglage.</div></div>";
			$check+=1;
		}
	}


	if(isset($_POST['boxdefaillance_7']))
	{
		if (isset($_POST['defaillance_7']) && !empty($_POST['defaillance_7'])) {
			fputcsv($fichier_csv, array($_POST["defaillance_7"]));
		}
		else{
		    echo "</br><div class='container col-md-8 col-md-offset-2'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Vous avez cochée le mode de défaillance 7 sans renseigner le réglage.</div></div>";
			$check+=1;
		}
	}


	if(isset($_POST['submit']) && $check==0 ){
		echo "</br><div class='container col-md-8 col-md-offset-2'><div class='alert alert-success' style='text-align: center;'> <strong>Réglage de défaillance réussi !</strong></div></div>";
	    echo "<meta http-equiv='refresh' content='3; URL=reglage_setup.php'>";
		//header("Refresh: 3; URL=reglage_setup.php");
	}
	else {
	}
	

	// fermeture du fichier csv
	fclose($fichier_csv);

}
?>
















