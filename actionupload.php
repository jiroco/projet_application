<?php
//MeDISIS_APP2/script.php
    session_start();
    include("include/connexiondb.php");
    header('charset=iso-8859-1');
    if ($_FILES['File']['error'] > 0){ 
        $erreur = "Erreur lors du transfert";
    }
    else{
        $file=$_FILES['File'];
        $extension = strrchr($_FILES['File']['name'], '.');
        $legalExtensions = array(".xls", ".uml", ".xml",".xmi");
        $nom = md5(uniqid(rand(), true));
        if (in_array($extension, $legalExtensions)) {
            $dest="./data/".$_SESSION["USERNAME"]."/upload/".$nom.".xml";
            $resultat = move_uploaded_file($file['tmp_name'],$dest);
            $req=$DBcon->prepare('INSERT INTO `DOC_U`(`IDDOCU`, `URLDOCU`, `NAMEDOCU`) VALUES (NULL,?,?)');
            $req->bindValue(1,$dest,PDO::PARAM_STR);
            $req->bindValue(2,$nom.".xml",PDO::PARAM_STR);
            $req->execute();
            $req=$DBcon->prepare('SELECT * FROM DOC_U where NAMEDOCU=?');
            $req->bindValue(1,$nom.".xml",PDO::PARAM_STR);
            $req->execute();
            $donnee=$req->fetch();
            $IDdocu=$donnee["IDDOCU"];
            $req=$DBcon->prepare('INSERT INTO `UTOD`(`INDEXKEY`, `IDUSER`, `IDDOCU`, `IDDOCD`) VALUES (NULL,?,?,1)');
            $req->bindValue(1,$_SESSION["IDUSER"],PDO::PARAM_STR);
            $req->bindValue(2,$IDdocu,PDO::PARAM_STR);
            $req->execute();
            if ($resultat){ 
                echo "<meta http-equiv='refresh' content='0; URL=reglage_defaillance.php'>";
            }
        }
        else{
           echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Extnesion de fichiers incorrectes!. </div></div>";;
        }
    }
?>