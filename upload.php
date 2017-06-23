<!DOCTYPE html>
<html>
<head>
	<title>Téléchargement</title>
</head>
<body>

<form method="post" action="actionupload.php" enctype="multipart/form-data">
	
	<label for="File">Sélectionner le fichier à télécharger.</label><br />
	<br><input type="file" name="File" id="File" autocomplete="on" required="required" /><br>
	<input type="submit" name="submit" value="Upload" />
</form>

</body>
</html>