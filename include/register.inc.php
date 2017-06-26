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

        $req = $DBcon->prepare('INSERT INTO `user`(`IDUSER`, `PERMISSION`, `URLUSER`, `USERNAME`, `EMAIL`, `PASSWORD`, `SOCIETE`, `NOM`, `PRENOM`) VALUES (NULL,0,"test",?,?,?,?,?,?)');

        $req->bindValue(1,$username,PDO::PARAM_INT);
        $req->bindValue(2,$email,PDO::PARAM_INT);
        $req->bindValue(3,$password,PDO::PARAM_INT);
        $req->bindValue(4,$societe,PDO::PARAM_INT);
        $req->bindValue(5,$nom,PDO::PARAM_INT);
        $req->bindValue(6,$prenom,PDO::PARAM_INT);

        $check=$req->execute();
        if($check)
        {
            header("Refresh: 2; URL=../login.php");
        }
        else
        {
            echo "Un problème s'est produit lors de la requete.<br>";
        }
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
                        Un client souahite créer un compte sur le site INSA\'script
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

        echo '<p><br/>Votre demande de création de compte a bien été enregistrée et va être traitée</p>';

/*----------------------- FIN ENVOIS MAIL ---------------*/


    }
    else {
        echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> un champ est vide. </div></div>";
    }

?>