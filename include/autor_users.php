<?php

    include("connexiondb.php");

    $id_button=$_POST["id_button"];
    
    $req_doss=$DBcon->prepare('SELECT USERNAME FROM USER WHERE IDUSER = ?');
    $req_doss->bindValue(1,$id_button,PDO::PARAM_INT);
    $req_doss->execute();
    $username=$req_doss->fetch();

    $urluser="./../data/".$username["USERNAME"];
    $urluser_up=$urluser."/upload/";
    $urluser_do=$urluser."/download/";

    mkdir($urluser, 0700);/* Creation du dossier au nom de l'usrename */
    mkdir($urluser_up);/* Creation du dossier upload dans le dossier data/username/ */
    mkdir($urluser_do);/* Creation du dossier download dans le dossier data/username/ */

    $req = $DBcon->prepare('UPDATE USER SET PERMISSION=1, URLUSER= ?  WHERE IDUSER = ?');
    $req->bindValue(1,$urluser,PDO::PARAM_INT);    
    $req->bindValue(2,$id_button,PDO::PARAM_INT);
    $req->execute();

    $req_conf = $DBcon->prepare('SELECT PERMISSION, NOM, PRENOM, SOCIETE FROM USER WHERE IDUSER = ?');
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
