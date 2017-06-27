<?php

    include("connexiondb.php");

    $namedocu = $_POST["NAMEDOCU"];

    /*
    $req = $DBcon->prepare('DELETE FROM `DOC_U` WHERE `DOC_U`.`NAMEDOCU` = ?');
    $req->bindValue(1,$namedocu,PDO::PARAM_INT);
    $req->execute();
    */

    echo $namedocu;

?>
