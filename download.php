<?php
	session_start();
	if ((!isset($_SESSION['IDUSER'])) || (empty($_SESSION['IDUSER']))){
	    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
	}
	else{
?>
<html lang="fr">
	<head>
		<title>Téléchargement</title>
		<link rel="stylesheet" type="text/css" href="./stylesheet/index.css">
	</head>
	<body>
        <div id="main_containt">
            <?php include('layout_base.php');?>
            <div class="container">
                <div class="row">
                    <div class="text_area">
						<form method="post" enctype="multipart/form-data" class="form-horizontal">
							<fieldset>
	 							<div>
									<label class="custom-file" for="File">
										<p>Fichier généré : </p>

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
