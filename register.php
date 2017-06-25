<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="./stylesheet/index.css">
</head>
    <body>
        <div id="main_containt">
            <?php include('layout_base_unsigned.php');?>
            <div class="container-fluid">
                <div class="row">
                    <form class="form-horizontal" action="include/register.inc.php" method="POST">
                        <fieldset>
                            <!-- titre -->
                            <div class="row">
                                <div class="text_area">
                                    <div class="row titre"><h3>Sign in</h3></div>
                                </div>
                            </div>
                            <br/><br/>

                            <!-- Prenom-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="prenom">Prénom</label>
                                <div class="col-md-4">
                                    <input id="inputFisrtName" name="prenom" type="text" placeholder="Prénom" class="form-control input-md">
                                </div>
                            </div>

                            <!-- Nom -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="nom">Nom</label>
                                <div class="col-md-4">
                                    <input id="nom" name="nom" type="text" placeholder="Nom" class="form-control input-md">
                                </div>
                            </div>

                            <!-- Username -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="username">Username</label>
                                <div class="col-md-4">
                                    <input id="inputUsername" name="username" type="text" placeholder="Username" class="form-control input-md">
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="password">Mot de passe</label>
                                <div class="col-md-4">
                                    <input id="inputPassword" name="password" type="password" placeholder="Password" class="form-control input-md">
                                </div>
                            </div>

                            <!-- Société -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="societe">Société</label>
                                <div class="col-md-4">
                                    <input id="societe" name="societe" type="text" placeholder="Société" class="form-control input-md">
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="email">Email</label>
                                <div class="col-md-4">
                                    <input id="email" name="email" type="text" placeholder="Adresse mail" class="form-control input-md">
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="reg"></label>
                              <div class="col-md-4">
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
                        Cette inscription ne saura en rien vous créer un compte.
                        <br/>Un mail va être envoyer à l'administrateur du site qui décidera alors de votre inscription effective.
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
