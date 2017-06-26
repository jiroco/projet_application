<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
		<link rel="stylesheet" type="text/css" href="./stylesheet/login.css">

	</head>
	<body>
		<div id="main_containt">
            <?php include('layout_base_unsigned.php');?>
            <div class="container">
                <div class="row">
                    <form class="form-horizontal" method="POST">
                        <fieldset>
                            <!-- titre -->
                            <div class="row ">
                                <div class="text_area">
                                    <div class="row titre"><h3> Sign up</h3></div>
                                </div>
                            </div>
                            <br/><br/>

                          <!-- Username -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="prenom">Nom d'utilisateur</label>
                                <div class="col-md-4">
                   					        <input type="hidden"/>
                                    <input id="username" name="USERNAME" type="text" placeholder="Nom d'utilisateur" required class="form-control input-md"/>
                                </div>
							             </div>

                          <!-- Password -->
                          <div class="form-group">
                              <label class="col-md-4 control-label" for="inputLastName">Mot de passe</label>
                              <div class="col-md-4">
                                  <input id="passwd" name="PASSWORD" class="form-control input-md" placeholder="Mot de passe" required type="password"/>
                              </div>
                          </div>

                          <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="reg"></label>
                                <div class="col-md-4" align="center">
                                    <button type="submit" class="btn btn-primary">Se connecter</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
			      </div>
        </div>
    </body>
</html>
<?php include("include/connexion.inc.php");?>
