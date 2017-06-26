<?php
  session_start();
  if ((!isset($_SESSION['IDUSER'])) || (empty($_SESSION['IDUSER']))){
      echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
      exit();
  }
  else{
?>

<!DOCTYPE html>
<html>
<head>
  <title>Paramètres</title>

</head>
<body>
  <?php include 'layout_base.php'; ?>

  <div class="container container col-md-10 col-md-offset-1 row">

        <div id="paramètre" class="fade in active"> <!--Paramètre début -->
          <div class="container panel-group panel panel-default" style="width:100%;">
                <div class="panel-heading"> <!--panel heading pour tous les paramètres -->
                  <h2>Paramètres</h2>
                </div>
                <div class="panel-body row col-md-10 col-lg-10 col-md-offset-1">
                        <table class="table table-user-information" style="font-size: inherit;">
                          <tbody>
                            <form action="include/parametre.inc.php" method="post">
                            <tr>
                              <td>Changer votre nom</td>
                              <td><input type="text" class="form-control" placeholder="Changez votre nom..." name="nom" value=""></td>
                              <td><input type="submit" value="Changer" class="btn btn-default"></td>
                            </tr>
                            <tr>
                              <td>Changer votre prénom</td>
                              <td><input type="text" class="form-control" placeholder="Changez votre prénom..." name="prenom" value=""></td>
                              <td><input type="submit" value="Changer" class="btn btn-default"></td>
                            </tr>
                            <tr>
                              <td>Changer le nom de votre société</td>
                              <td><input type="text" class="form-control" placeholder="Changez le nom de votre société..." name="societe" value=""></td>
                              <td><input type="submit" value="Changer" class="btn btn-default"></td>
                            </tr>
                            <tr>
                              <td>Changer votre e-mail</td>
                              <td><input type="text" class="form-control" placeholder="Changez votre e-mail..." name="mail" value=""></td>
                              <td><input type="submit" name="" value="Changer" class="btn btn-default"></td>
                            </tr>
                            <tr>
                              <td>Changer votre mot de passe</td>
                              <td><input type="text" class="form-control" placeholder="Changez votre mot de passe..." name="password" value=""></td>
                              <td><input type="submit" value="Changer" class="btn btn-default"></td>
                            </tr>

                           </form>

                          </tbody>
                        </table>
                  </div>
              </div><!-- panel fin -->
            </div>
           </div><!--panel heading pour tous les paramètres fin -->
        </div><!--colonne 10 fin -->
  </div><!--container fin -->

</body>
</html>
<?php
  }
?>
