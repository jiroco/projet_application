<?php

    include("connexiondb.php");

    $username = strip_tags($_POST["username"]);
    $iduser = $_POST["id_button"];

    $req = $DBcon->prepare('UPDATE user SET USERNAME = ? WHERE IDUSER = ?');
    $req->bindValue(1,$username,PDO::PARAM_INT);
    $req->bindValue(2,$iduser,PDO::PARAM_INT);
    $check = $req->execute();

    if ($check) {
        echo "Utilisateur Autorisé";
    }
    else {
        echo "Erreur";
    }


?>
