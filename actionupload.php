<?php
	session_start();
	include("include/connexiondb.php");

    header('charset=iso-8859-1');
    if ($_FILES['File']['error'] > 0) $erreur = "Erreur lors du transfert";
    $nom = md5(uniqid(rand(), true));
    $dest="./data/".$_SESSION["USERNAME"]."/upload/".$nom.".xml";
    $resultat = move_uploaded_file($_FILES['File']['tmp_name'],$dest);
    $req=$DBcon->prepare('INSERT INTO `doc_u`(`IDDOCU`, `URLDOCU`, `NAMEDOCU`) VALUES (NULL,?,?)');
    $req->bindValue(1,$dest,PDO::PARAM_STR);
    $req->bindValue(2,$nom.".xml",PDO::PARAM_STR);
    $req->execute();
    $req=$DBcon->prepare('SELECT * FROM doc_u where NAMEDOCU=?');
    $req->bindValue(1,$nom.".xml",PDO::PARAM_STR);
    $req->execute();
    $donnee=$req->fetch();
    $IDdocu=$donnee["IDDOCU"];
    $req=$DBcon->prepare('INSERT INTO `utod`(`INDEXKEY`, `IDUSER`, `IDDOCU`, `IDDOCD`) VALUES (NULL,?,?,1)');
    $req->bindValue(1,$_SESSION["IDUSER"],PDO::PARAM_STR);
    $req->bindValue(2,$IDdocu,PDO::PARAM_STR);
    $req->execute();
    //if ($resultat) echo "<meta http-equiv='refresh' content='0; URL=reglage_defaillance.php'>";
?>
