<?php

    include("connexiondb.php");

    $namedocu = $_POST["NAMEDOCU"];

    $req = $DBcon->prepare('DELETE FROM `doc_u` WHERE `doc_u`.`NAMEDOCU` = ?');
    $req->bindValue(1,$namedocu,PDO::PARAM_INT);
    $req->execute();

    echo $namedocu;

?>
