<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="./stylesheet/index.css">
</head>
    <body>
        <div id="main_containt">
            <?php include('layout_base_unsigned.php');?>
            <div class="container">
                <div class="row">
                    <form class="form-horizontal" action="include/register.inc.php" method="POST">
                        <fieldset>
                            <!-- titre -->
                            <div class="row">
                                <div class="text_area">
                                    <div class="row titre"><h3>Inscription</h3></div>
                                </div>
                            </div>
                            <br/><br/>

                            <!-- Prenom-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="prenom">Prénom</label>
                                <div class="col-md-4">
                                    <input id="inputFisrtName" name="prenom" type="text" placeholder="Prénom" class="form-control input-md" required>
                                </div>
                            </div>

                            <!-- Nom -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="nom">Nom</label>
                                <div class="col-md-4">
                                    <input id="nom" name="nom" type="text" placeholder="Nom" class="form-control input-md" required>
                                </div>
                            </div>

                            <!-- Username -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="username">Nom d'utilisateur</label>
                                <div class="col-md-4">
                                    <input id="inputUsername" name="username" type="text" placeholder="Nom d'utilisateur" class="form-control input-md" required>
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="password">Mot de passe</label>
                                <div class="col-md-4">
                                    <input id="inputPassword" name="password" type="password" placeholder="Mot de passe" class="form-control input-md" required>
                                </div>
                            </div>

                            <!-- Société -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="societe">Société</label>
                                <div class="col-md-4">
                                    <input id="societe" name="societe" type="text" placeholder="Société" class="form-control input-md" required>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="email">Email</label>
                                <div class="col-md-4">
                                    <input id="email" name="email" type="mail" placeholder="Adresse mail" class="form-control input-md" required>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="reg"></label>
                              <div class="col-md-4" align="center">
                                <button id="inputSubmit" type="submit" class="btn btn-primary">S'inscrire</button>
                              </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>

        <div>
            <div>
                </br>
                <div class='container col-md-8 col-md-offset-2'>
                    <div class='alert alert-danger' style='text-align: center;'>
                        <strong>NB :</strong>
                        Toute inscription nécessite l'approbation de l'administrateur du site.
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
