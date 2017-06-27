<?php
//MeDISIS_APP2/script.php

    session_start();
    include("include/connexiondb.php");
    header('charset=iso-8859-1');
    $valide=0;
    if (isset($_POST["submit"])){
        if ($_FILES['File']['error'] > 0){
            $erreur = "Erreur lors du transfert";
        }
        else{
            $file=$_FILES['File'];
            $extension = strrchr($_FILES['File']['name'], '.');
            $legalExtensions = array(".xls", ".uml", ".xml",".xmi");

            $avant=basename($_FILES['File']['name'],'.uml');
            echo $avant;
            $nom = $_FILES['File']['name'];
            echo $nom;
            $dest="./data/".$_SESSION["USERNAME"]."/upload/".$nom;
            $resultat = move_uploaded_file($file['tmp_name'],$dest);
            //echo "veuillez patientez! Cette étape peut durer plusieurs minutes!"
            //exec("C:\Python27\python.exe C:\wamp64\www\projet_application\Python_extraction\\extracteur.py C:\wamp64\www\projet_application\\".$dest." C:\wamp64\www\projet_application\InputFile\listes_extraites.xml");
            //copy("C:\wamp64\www\projet_application\data\\".$_SESSION["USERNAME"]."\FailureModes.xls", "C:\wamp64\www\projet_application\Parameters\\FailureModes.xls");
            //sleep(2);
            //exec("C:\wamp64\www\projet_application\\MEDISIS.exe");
            //copy("C:\wamp64\www\projet_application\data\\".$_SESSION["USERNAME"]."\\reglage_setup.xls", "C:\wamp64\www\projet_application\Parameters\\reglage_setup.xls");
            //sleep(40);
            //exec("C:\Python27\python.exe C:\wamp64\www\projet_application\postTraitement.pyc C:\wamp64\www\projet_application\\Parameters\\reglage_setup.xls C:\wamp64\www\projet_application\OutputFile\AMDEC1.xls C:\wamp64\www\projet_application\OutputFile\AMDEC2.xls");

            //$nom = md5(uniqid(rand(), true));
            //$avant=basename($_FILES['File']['name'],'.uml');
            //$dest="./data/".$_SESSION["USERNAME"]."/upload/".$nom.".xml";
            //exec("C:\Python27\python.exe C:\wamp64\www\projet_application\Python_extraction\\extracteur.py C:\wamp64\www\projet_application\\".$dest." C:\wamp64\www\projet_application\MeDISIS_APP3\InputFile\\".$nom.".xml");
            //copy("C:\wamp64\www\projet_application\data\\".$_SESSION["USERNAME"]."\\".$nom, "C:\wamp64\www\projet_application\MeDISIS_APP3\InputFile\\".$nom);
            //include("MeDISIS_APP3/script.php");
            //exec("del C:\wamp64\www\projet_application\MeDISIS_APP3\InputFile\\".$avant.".xml"); //de même supprimer les parametres
            //exec("C:\wamp64\www\projet_application\MeDISIS_APP3\MEDISIS.exe");
            if (in_array($extension, $legalExtensions)) {
                $dest="./data/".$_SESSION["USERNAME"]."/upload/".$nom.".xml";
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
                    echo "<meta http-equiv='refresh' content='0; URL=download_etape1.php'>";
                    $_SESSION['IDDOCU']=$IDdocu;
                }
            }
            else{
                $valide+=1;
            }
            if (isset($_POST['submit']) && $valide>0 ) {
               echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Extension de fichiers incorrectes! </div></div><br/><br/><br/><br/>";;
            }
        }
    }

?>
