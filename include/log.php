<?php

    $dateToSearch = date("m.y");                                                                                                // Date servant a la recherche du fichier de logs
    $dateToRegister = date("D j m Y H i s");                                                                                    // Date inscrite dans les logs
    $nameFile = "../log/" . $dateToSearch . ".txt";                                                                                // Nom du fichier a rechercher en fonction de la date

    $file = fopen($nameFile, 'a');

    $username = $_POST["username"];                                                                                             // username de l'utilisateur sujet du log
    $action = $_POST["action"];                                                                                                 // action sujette du log


    switch ($action) {                                                                                                          // Inscription dans le fichier log en fonction dans le log
        case "connexion":
            fputs($file, $username . " " . $action . " at " . $dateToRegister . "\r\n");
            break;

        default:
            fputs($file, $username . "other action " . $dateToRegister . "\r\n");
            break;
    }

    fclose($file);

    echo "write_logs : ok";

?>
