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
<html>
	<head>
		<title>Connexion Administarteur</title>
	    <link rel="stylesheet" type="text/css" href="./stylesheet/index.css">
	</head>
	<body>


        <div id="main_containt">
            <?php include('layout_base_unsigned.php');?>
            <div class="container">
                <div class="row">
                    <form class="form-horizontal" method="POST">
                        <fieldset>
                            <!-- titre -->
                            <div class="row">
                                <div class="text_area">
                                    <div class="row titre"><h3>Administrateur</h3></div>
                                </div>
                            </div>
                            <br/><br/>

                            <!-- Username Admin-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="prenom">Username</label>  
                                <div class="col-md-4">
                     				<input type="hidden"/>
                                    <input id="username" name="USERNAME" type="text" placeholder="Username" required="" class="form-control input-md">
                                
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="inputLastName">Password</label>  
                                <div class="col-md-4">
                                    <input id="passwd" name="PASSWORD" placeholder="Password" class="form-control input-md" required="" type="password">    
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="reg"></label>
                              <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Sign up</button>
                              </div>
                            </div>                            
                        </fieldset>
                    </form>
                </div>
                <?php include("include/connexion_admin.inc.php"); ?>
            </div>
        </div>

        <div>
            <div>
                </br>
                <div class='container col-md-8 col-md-offset-2'>
                    <div class='alert alert-danger' style='text-align: center;'> 
                        <strong>NB :</strong> 
                        Cette page est réserver à l'administrateur 
                        <br/>Si vous voulez vous connecter ou vous inscrire allez sur les pages corespondantes.
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>
<?php
    }
?>



