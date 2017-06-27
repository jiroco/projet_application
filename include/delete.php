<?php

    include("connexiondb.php");

    $namedocu = $_POST["NAMEDOCU"];
    $username = $_POST["USERNAME"];

    $pathDir = "../data/" . $username . "/upload";

    $pathFile = $pathDir . "/" . $namedocu;

    $req = $DBcon->prepare('DELETE FROM `DOC_U` WHERE `DOC_U`.`NAMEDOCU` = ?');
    $req->bindValue(1,$namedocu,PDO::PARAM_INT);
    $req->execute();

    $opening = opendir($pathDir);
    unlink($pathFile);
    closedir($opening);


    echo $namedocu;

?>
