<?php

    include("connexiondb.php");

    $id_button=$_POST["id_button"];

    $req = $DBcon->prepare('UPDATE user SET PERMISSION=1 WHERE IDUSER = ?');
    $req->bindValue(1,$id_button,PDO::PARAM_INT);
    $req->execute();

    $req_conf = $DBcon->prepare('SELECT PERMISSION, NOM, PRENOM, SOCIETE FROM user WHERE IDUSER = ?');
    $req_conf->bindValue(1,$id_button,PDO::PARAM_INT);
    $req_conf->execute();

    $res = $req_conf->fetch();

    echo "Autorisé";

    /*
    if ($confirmation == 1) {
        echo $res["NOM"] . " " . $res["PRENOM"] . " travaillant chez " . $res["SOCIETE"] . " est autorisé";
    }
    else {
        echo "erreur de requete";
    }
    */

?>
