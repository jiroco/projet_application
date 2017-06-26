<?php

    $dateToSearch = date("m.y");                                                                                                // Date servant a la recherche du fichier de logs
    $dateToRegister = date("l j.m.Y H:i:s");                                                                                    // Date inscrite dans les logs
    $nameFile = "../log/" . $dateToSearch . ".txt";                                                                             // Nom du fichier a rechercher en fonction de la date

    $file = fopen($nameFile, 'a');

    $username = $_POST["username"];                                                                                             // username de l'utilisateur sujet du log
    $action = $_POST["action"];                                                                                                 // action sujette du log


    switch ($action) {                                                                                                          // Inscription dans le fichier log en fonction dans le log
        case 'CONNEXION':
            fputs($file, $username . "\t" . $action . "\t" . $dateToRegister . "\r\n");
            break;

         case 'UPLOAD':



            fputs($file, $username . "\t" . $action . "\t\t" . $dateToRegister . "\r\n");
            break;

        case 'DOWNLOAD':
            fputs($file, $username . "\t" . $action . "\t" . $dateToRegister . "\r\n");
            break;

        default:
            fputs($file, $username . "other action " . $dateToRegister . "\r\n");
            break;
    }

    fclose($file);

    echo "";

?>
