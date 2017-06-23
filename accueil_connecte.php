<?php
session_start();
if ((!isset($_SESSION['id'])) || (empty($_SESSION['id']))){
    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
}
?>

<html>
<head>
	<title>Projet application</title>

</head>
<body >

<div>
	fichier uploader
</div>

<div>
	fichier downloader
</div>

</body>
</html>
