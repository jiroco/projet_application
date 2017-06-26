<?php
header('charset=iso-8859-1');
if ($_FILES['File']['error'] > 0) $erreur = "Erreur lors du transfert";
//$nom = md5(uniqid(rand(), true));
$nom=$_FILES['File']['name'];
$dest="MeDISIS_APP2\\InputFile\\".$nom;
$resultat = move_uploaded_file($_FILES['File']['tmp_name'],$dest);
if ($resultat) echo "<meta http-equiv='refresh' content='0; URL=MeDISIS_APP2/script.php'>";;
?>
