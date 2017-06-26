<?php
    session_start();
    if ((!isset($_SESSION['IDUSER'])) || (empty($_SESSION['IDUSER']))){
        echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
    }
?>

<!DOCTYPE html>
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
						<form method="post" action="actionupload.php" enctype="multipart/form-data" class="form-horizontal">
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

        <input type="hidden" id="trash_log" />

        <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
        <script type="text/javascript">
          $(document).ready(function () {
            $(".log").click(function () {
                var action = "UPLOAD";
                var iduser = $(".log").attr('id');
                var dataObject = {};
                dataObject["iduser"] = iduser;
                dataObject["action"] = action;
                alert(dataObject["iduser"]);
                alert(dataObject["action"]);
                $.ajax({
                  url:  'include/log.php',
                  timeout: 30000,
                  type: 'POST',
                  data: dataObject,
                  success: function(data) {
                      alert(data);
                  },
                  error: function(data) {
                      alert(data);
                  },
              });
            });
          });
        </script>

	</body>
</html>
