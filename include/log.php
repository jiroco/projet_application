<?php

    include("connexiondb.php");

    $dateToSearch = date("m.y");                                                                                                // Date servant a la recherche du fichier de logs
    $dateToRegister = date("l j.m.Y H:i:s");                                                                                    // Date inscrite dans les logs
    $nameFile = "../log/" . $dateToSearch . ".txt";                                                                             // Nom du fichier a rechercher en fonction de la date

    $file = fopen($nameFile, 'a');

    $iduser = $_POST["iduser"];                                                                                             // username de l'utilisateur sujet du log
    $action = $_POST["action"];                                                                                                 // action sujette du log


    switch ($action) {                                                                                                          // Inscription dans le fichier log en fonction dans le log
        case 'CONNEXION':

            $req=$DBcon->prepare('SELECT USERNAME FROM USER WHERE IDUSER = ?');
            $req->bindValue(1,$iduser,PDO::PARAM_INT);
            $req->execute();
            $data=$req->fetch();

            fputs($file, $data[0] . "\t" . $action . "\t" . $dateToRegister . "\r\n");
            break;

         case 'UPLOAD':

            $req=$DBcon->prepare('SELECT U.USERNAME, D.NAMEDOCU FROM DOC_U D, UTOD R, `USER` U WHERE D.IDDOCU = R.IDDOCU AND R.IDUSER = ?');
            $req->bindValue(1,$iduser,PDO::PARAM_INT);
            $req->execute();

            while ($res=$req->fetch();) {
                $i=0;
                $data[$i]=$res;
                $i++;
            }

            fputs($file, $data[0] . "\t" . $action . "\t\t" . $dateToRegister . "\t\t" . $result[1] ."\r\n");
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
