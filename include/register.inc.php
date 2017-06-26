<?php
    include("connexiondb.php");
    if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['societe']) && !empty($_POST['societe'])){

        $email=htmlspecialchars($_POST['email']);
        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $societe=htmlspecialchars($_POST['societe']);
        $username=htmlspecialchars($_POST['username']);
        $password=htmlspecialchars($_POST['password']);
        $password=sha1($password);

        $usernameDsipo = true;

        $verifDispoUsername = $DBcon->query('SELECT USERNAME FROM USER');
        while ($verification=$verifDispoUsername->fetch()) {
            if ($verification[0] == $username) {
                echo "</br><div class='container col-md-8 col-md-offset-2'><div class='alert alert-danger' style='text-align: center;'><strong> Attention ! </strong> Ce Username est deja pris</div></div>";
                exit();
            }
        }

        $req = $DBcon->prepare('INSERT INTO `USER`(`IDUSER`, `PERMISSION`, `URLUSER`, `USERNAME`, `EMAIL`, `PASSWORD`, `SOCIETE`, `NOM`, `PRENOM`) VALUES (NULL,0,"test",?,?,?,?,?,?)');

        $req->bindValue(1,$username,PDO::PARAM_INT);
        $req->bindValue(2,$email,PDO::PARAM_INT);
        $req->bindValue(3,$password,PDO::PARAM_INT);
        $req->bindValue(4,$societe,PDO::PARAM_INT);
        $req->bindValue(5,$nom,PDO::PARAM_INT);
        $req->bindValue(6,$prenom,PDO::PARAM_INT);

        $check=$req->execute();

        if($check){

            echo "</br><div class='container col-md-8 col-md-offset-2'><div class='alert alert-success' style='text-align: center;'>Votre demande de création de compte a bien été enregistrée et va être traitée</div></div>";

            /* ----------------- ENVOIS DU MAIL ------------------*/

                $to = "admin@admin.com";
                $subject = "Demande de création de compte";
                $message = '
                <html>
                    <head>
                        <title>Demande de création de compte</title>
                    </head>
                    <body>
                        <div>
                            <p>
                                Un client souahite créer un compte sur le site INSA\'Script
                                <br/>
                                <ul>
                                    <li>' . $_POST["prenom"] . '<li>
                                    <li>' . $_POST["nom"] . '<li>
                                    <li>' . $_POST["email"]. '<li>
                                    <li>' . $_POST["societe"] . '<li>
                ';
                $headers = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                //mail($to,$subject,$message,$headers);


            /*----------------------- FIN ENVOIS MAIL ---------------*/


        }
        else{
            echo "</br><div class='container col-md-8 col-md-offset-2'><div class='alert alert-danger' style='text-align: center;'><strong> Attention ! </strong> Erreur de requète. </div></div>";
        }
        $req->closeCursor();
    }

?>
