<?php
include("connexiondb.php");

if (isset($_POST["firstsetbox"]) && !empty($_POST["firstsetbox"])){
	$text=$_POST["firstsetbox"];
}
else{
	$text="=>";
}

$req= $DBcon->prepare('TRUNCATE TABLE setup3');
$req->execute();

//requet avec la selection des données
$req = $DBcon->prepare('INSERT INTO `SETUP3`(`IDSETUP3`, `1`) VALUES (NULL,?)');
$req->bindValue(1,$text,PDO::PARAM_STR);

$check=$req->execute();

if($check){
    }

else
    echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Erreur de requete.</div></div>";        

$req->closeCursor();
if (isset($_POST['submitsetup3'])){
	include("excel3.php");
	echo "<meta http-equiv='refresh' content='3; URL=reglage_setup_4.php'>";
}
else{
	if (isset($_POST['submitsetup3'])) {
		echo "vous n'avez pas coché correctement les cases du setup3";
	}
}


?>
