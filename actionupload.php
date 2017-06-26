<?php
if ($_FILES['File']['error'] > 0) 
	$erreur = "Erreur lors du transfert";

	$nom = md5(uniqid(rand(), true));
	$dest="MeDISIS_APP\Entrees\.".$nom.".xml";
	$resultat = move_uploaded_file($_FILES['File']['tmp_name'],$dest);

if ($resultat) 
	echo "<meta http-equiv='refresh' content='0; URL=reglage_defaillance.php'>";
?>
