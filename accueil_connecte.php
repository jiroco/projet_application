<?php
include("include/connexiondb.php");
session_start();
if ((!isset($_SESSION['IDUSER'])) || (empty($_SESSION['IDUSER']))){
    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Projet application</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="./stylesheet/index.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body >
		<div id="main_containt">
	        <?php include 'layout_base.php'; ?>
	        <div class="container">
	            <div class="row">
	                <div class="text_area">
						<?php
						/*fichiers uploader*/
						$req = $DBcon->prepare("SELECT NAMEDOCU, NAMEDOCD FROM DOC_U DU, DOC_D DD, USER U, UTOD WHERE U.IDUSER= ? AND U.IDUSER=UTOD.IDUSER AND DU.IDDOCU=UTOD.IDDOCU AND DD.IDDOCD=UTOD.IDDOCD;");
						$req->bindValue(1,$_SESSION["IDUSER"],PDO::PARAM_INT);


						$check=$req->execute();
						if($check){
							if($resultat=$req->fetch()){
								echo "<legend><h2>Nom des documents de ".$_SESSION["PRENOM"]." : </h2></legend>";
						?>

						<table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 400px;text-align: center;"><h4>Upload</h4></th>
                                    <th style="width: 400px;text-align: center;"><h4>Download</h4></th>
                                </tr>
                            </thead>
                            <tbody>

	                    	<?php

								print_r("<tr><td>".$resultat['NAMEDOCU']."</td><td>".$resultat['NAMEDOCD']."</td></tr>");
								while($resultat=$req->fetch()){
									print_r("<tr><td>".$resultat['NAMEDOCU']."</td><td>".$resultat['NAMEDOCD']."</td></tr>");
								}
							}
							else{
                        		echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> Dossier non trouvé </div></div>";
							}

                            ?>

                            </tbody>
                        </table>




						<?php


						}
						else{
							echo "<br/>Erreur de requète<br/>";
						}
						?>


				        <input class="log" id=<?php echo $_SESSION["IDUSER"]; ?> type="hidden">

				        <script
				            src="https://code.jquery.com/jquery-3.2.1.js"
				            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
				            crossorigin="anonymous"></script>
				        <script type="text/javascript">
				          $(document).ready(function () {
				              var action = "CONNEXION";
				              var iduser = $(".log").attr('id');
				              var dataObject = {};
				              dataObject["iduser"] = iduser;
				              dataObject["action"] = action;
				              $.ajax({
				                url:  'include/log.php',
				                timeout: 30000,
				                type: 'POST',
				                data: dataObject,
				                success: function(data) {
				                    $('.log').html(data)
				                },
				                error: function(data) {
				                    $('.log').html(data)
				                },
				              });
				          });
				        </script>
        			</div>
        		</div>
        	</div>
    	</div>
	</body>
</html>
