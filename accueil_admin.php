<?php

    session_start();
    include("include/connexiondb.php");
    if ((!isset($_SESSION['IDUSER'])) || (empty($_SESSION['IDUSER']))){
        echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
    }

?>

<html>

    <head>
    	<title>Projet application</title>
    	<!-- Latest compiled and minified CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    	<!-- Optional theme -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    	<!-- Latest compiled and minified JavaScript -->
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include("layout_base.php"); ?>
        <div style="color:#0000FF">
        	<p>Valider un utilisateur</p>
            <?php

                $req = $DBcon->query('SELECT IDUSER, NOM, PRENOM, SOCIETE FROM user WHERE PERMISSION=0');
                while ($resultat = $req->fetch()) { ?>
                    <div id='<?php echo -$resultat["IDUSER"];?>' >
                        <input class='autor' id='<?php echo $resultat["IDUSER"];?>' type=button value='Autoriser'></input>
                        <?php print_r($resultat["NOM"] . " " . $resultat["PRENOM"] . " travaillant chez " . $resultat["SOCIETE"] . "<br/>"); ?>
                    </div>
                <?php }

            ?>
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
        <div>
        	<p>Logs</p>
            <?php
                $date = date("m/y");
                echo $date;
            ?>
        </div>
    </body>
</html>
