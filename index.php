<?php
include("include/connexiondb.php");
session_start();
if ((isset($_SESSION['IDUSER'])) || !(empty($_SESSION['IDUSER']))) {
    if ($_SESSION['NOM']=='admin'){
        echo "<meta http-equiv='refresh' content='0; URL=accueil_admin.php'>";
    }
    else{
            echo "<meta http-equiv='refresh' content='0; URL=accueil_connecte.php'>";
    }
}
else{
?>
    <!DOCTYPE html>
    <html lang="fr">
        <head>
            <link rel="stylesheet" type="text/css" href="./stylesheet/index.css">
            <title>Projet application</title>
        </head>
        <body>              
            <div id="main_containt">
                <?php include('layout_base_unsigned.php');?>
                <div class="container">
                    <div class="row">
                        <div class="text_area">
                            <div class="row">Présentation</div>
                            <div class="row">Projet application</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="row">
                            <div class="col-md-6 text_area">
                                <h2>Déjà inscrit:</h2>
                                <form methode="POST" action="login.php">
                                    <button type="submit" class="btn btn-primary">Connexion</button>
                                </form>
                            </div>
                            <div class="col-md-6 text_area">
                                <h2>Inscrivez vous par ici:</h2>
                                <form methode="POST" action="register.php">
                                    <button type="submit" class="btn btn-primary">Inscription</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>
<?php
    }
?>

