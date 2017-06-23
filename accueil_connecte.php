<?php
include("include/connexiondb.php");
session_start();
if ((!isset($_SESSION['IDUSER'])) || (empty($_SESSION['IDUSER']))){
    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
}
?>

<html>
	<head>
		<title>Projet application</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body >
		<?php include 'layout_base.php'; ?>


		<?php 
		/*fichiers uploader*/
		$req = $DBcon->prepare("SELECT NAMEDOCU, NAMEDOCD FROM DOC_U DU, DOC_D DD, USER U, UTOD WHERE U.IDUSER= ? AND U.IDUSER=UTOD.IDUSER AND DU.IDDOCU=UTOD.IDDOCU AND DD.IDDOCD=UTOD.IDDOCD;");
		$req->bindValue(1,$_SESSION["IDUSER"],PDO::PARAM_INT);


		$check=$req->execute();
		if($check){
			if($resultat=$req->fetch()){
				echo "Nom des documents de ".$_SESSION["PRENOM"]." : <br/>";
				print_r("UPLOAD : ".$resultat['NAMEDOCU']." ----- "."DOWNLOAD : ".$resultat['NAMEDOCD']);
				echo " <br/>";
				while($resultat=$req->fetch()){
					print_r("UPLOAD : ".$resultat['NAMEDOCU']." ----- "."DOWNLOAD : ".$resultat['NAMEDOCD']);
					echo " <br/>";
				}
			}
			else
				echo "raté...";
		}
		else
			echo "totalement raté";
		?>

		<br/>

		<div>
			fichier uploader
			<?php
			if($dossier = opendir('./data')){
				while(false !== ($fichier = readdir($dossier))){
					if($fichier != '.' && $fichier != '..'){
						echo '<li>' . $fichier . '</li>';
					}
				}
				echo '</ul><br />';
				closedir($dossier);
			}
			else
			    echo 'Le dossier n\' a pas pu être ouvert';
			
		?>
		</div>
		<div>
			fichier downloader
			<?php
			if($dossier = opendir('./download')){
				while(false !== ($fichier = readdir($dossier))){
					if($fichier != '.' && $fichier != '..'){
						echo '<li>' . $fichier . '</li>';

					}
				}
				echo '</ul><br />';
				closedir($dossier);
			}
			else
			    echo 'Le dossier n\' a pas pu être ouvert';
			
		?>
		</div>

	</body>
</html>
