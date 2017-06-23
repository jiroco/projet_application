<?php
include("connexiondb.php");
if (isset($_POST['USERNAME']) && !empty($_POST['USERNAME']) && isset($_POST['PASSWORD']) && !empty($_POST['PASSWORD']) && is_string($_POST['USERNAME']) && is_string($_POST['PASSWORD'])){
        $username=htmlspecialchars($_POST['USERNAME']);
        $pass=htmlspecialchars(sha1($_POST['PASSWORD']));
        $req = $DBcon->prepare('SELECT IDUSER, PERMISSION, USERNAME, PASSWORD, EMAIL, NOM, PRENOM from USER WHERE USERNAME = ? ');
        $req->bindValue(1,$username,PDO::PARAM_STR);
        $check=$req->execute();
        if($check){
            if($donnee = $req->fetch()){
                if($donnee['PERMISSION']==1){
                    if($pass == $donnee['PASSWORD']){
                        session_start(); 
                        $_SESSION['IDUSER'] = $donnee['IDUSER'];
                        $_SESSION['EMAIL']=$donnee['EMAIL'];
                        $_SESSION['NOM'] = $donnee['NOM'];
                        $_SESSION['PRENOM']=$donnee['PRENOM'];
                        $_SESSION['USERNAME']= $donnee['USERNAME'];
                        echo "<meta http-equiv='refresh' content='0; URL=accueil_connecte.php'>";    
                    }
                    else
                        echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Identifiants incorrects. </div></div>";
                }
                else
                    echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Vous n'avez pas la permission pour vous connecter. </div></div>";
            }
            else                
                echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Identifiants incorrects. </div></div>";        
        }
        else
            echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Erreur de requete.</div></div>";        
        
        $req->closeCursor();
    }
?>