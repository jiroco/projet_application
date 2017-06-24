<?php
session_start();
if ((!isset($_SESSION['IDUSER'])) || (empty($_SESSION['IDUSER']))){
    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Téléchargement</title>
</head>
<body>
<?php include 'layout_base.php'; ?>
<form method="post" action="actionupload.php" enctype="multipart/form-data">
	
	<label for="File">Sélectionner le fichier à télécharger.</label><br />
	<br><input type="file" name="File" id="File" autocomplete="on" required="required" /><br>
	<input type="submit" name="submit" value="Upload" />
</form>

</body>
</html>