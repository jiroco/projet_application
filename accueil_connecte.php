<?php
	include("include/connexiondb.php");
	session_start();
	if ((!isset($_SESSION['IDUSER'])) || (empty($_SESSION['IDUSER']))){
	    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
	}
	else{
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Projet application</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
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
			else{
				echo "<br/>Documents non trouvés<br/>";
			}
		}
		else{
			echo "<br/>Erreur de requète<br/>";
		}
		?>

		<br/>

		<div>
			Fichiers téléchargés
			<?php
			echo "<br/>";
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
			Fichiers résultats
			<?php
			echo "<br/>";
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

        <input class="log" id=<?php echo $_SESSION["USERNAME"]; ?> type="hidden">

        <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
        <script type="text/javascript">
          $(document).ready(function () {
              var action = "connexion";
              var username = $(".log").attr('id');
              var dataObject = {};
              dataObject["username"] = username;
              dataObject["action"] = action;
              $.ajax({
                url:  'include/log.php',
                timeout: 30000,
                type: 'POST',
                data: dataObject,
                success: function(data) {
                    alert(data);
                },
                error: function() {
                    alert(data);
                },
              });
          });
        </script>

	</body>
</html>
<?php
	}
?>