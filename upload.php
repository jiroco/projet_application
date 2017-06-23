<!DOCTYPE html>
<html>
<head>
	<title>Téléchargement</title>
</head>
<body>

<form method="post" action="actionupload.php" enctype="multipart/form-data">
	Sélectionner le fichier à télécharger.
	<br><input type="file" name="file" id="File" autocomplete="on" required="required" /><br>
	<input type="submit" name="submit" value="Upload" />
</form>

</body>
</html>