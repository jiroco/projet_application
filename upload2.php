<?php
	session_start();
	if ((!isset($_SESSION['IDUSER'])) || (empty($_SESSION['IDUSER']))){
	    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
	}
	else{
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Téléchargement 2</title>
		<link rel="stylesheet" type="text/css" href="./stylesheet/index.css">
	</head>
	<body>
        <div id="main_containt">
            <?php include('layout_base.php');?>
            <div class="container">
                <div class="row">
                	<?php include("actionupload2.php"); ?>
                    <div class="text_area">
						<form method="post" enctype="multipart/form-data" class="form-horizontal">
							<fieldset>
	 							<div>
									<label class="custom-file" for="File">
										<p>Sélectionner le fichier à télécharger :</p>
										<br/>
										<input type="file" name="File" id="File" class="custom-file-input" autocomplete="on" required="required" />
										<br/>
										<input class="log" id=<?php echo $_SESSION["IDUSER"]; ?> type="submit" name="submit" value="Upload" />
										<span class="custom-file-control"></span>
									</label>
	                            </div>
							</fieldset>
						</form>
                    </div>
                </div>
			</div>
		</div>

	</body>
</html>
<?php
	}
?>
