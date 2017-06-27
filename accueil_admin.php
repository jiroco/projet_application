<?php

    session_start();
    include("include/connexiondb.php");
    if ((!isset($_SESSION['IDUSER'])) || (empty($_SESSION['IDUSER']))){
        echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
    }
        else{
?>

<html>

    <head>
    	<title>Projet application</title>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="./stylesheet/index.css">

    </head>

    <body>
        <div id="main_containt">
            <?php include("layout_base_admin.php"); ?>
            <div class="container">
                <div class="row">
                    <div class="text_area">
                        <?php
                            $req = $DBcon->query('SELECT IDUSER, NOM, PRENOM, SOCIETE FROM USER WHERE PERMISSION=0');
                        ?>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 40px;"><h3>Valider un utilisateur : </h3></th>
                                    <th style="width: 400px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    while ($resultat = $req->fetch()) { 
                                ?>
                                <tr>
                                    <td></td>
                                    <td> 
                                        <div id='<?php echo -$resultat["IDUSER"];?>' >
                                            <input class='autor btn btn-default' id='<?php echo $resultat["IDUSER"];?>' type=button value='Autoriser'></input>
                                            <?php print_r($resultat["NOM"] . " " . $resultat["PRENOM"] . " travaillant chez " . $resultat["SOCIETE"] . "<br/>"); ?>
                                        </div>
                                    </td>
                                </tr>
                                <?php 
                                    }
                                ?>
                            </tbody>
                        </table>
                        <script
                            src="https://code.jquery.com/jquery-3.2.1.js"
                            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
                            crossorigin="anonymous"></script>
                        <script type="text/javascript">
                          $(document).ready(function () {
                            $('.autor').click(function () {
                              var id_button = $(this).attr('id');
                              var dataObject = {};
                              dataObject["id_button"] = id_button;
                              $.ajax({
                                url:  'include/autor_users.php',
                                timeout: 30000,
                                type: 'POST',
                                data: dataObject,
                                success: function(data) {
                                  $("#" + -id_button).html(data);
                                },
                                error: function(data) {
                                  $("#" + -id_button).html(data);
                                },
                              });
                            });
                          });
                        </script>
                    </div>
                </div>
            </div>
        </div>            
    </body>
</html>
<?php
    }
?>
