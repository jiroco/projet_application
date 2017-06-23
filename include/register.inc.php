<?php
include("connexiondb.php");
if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['passwd']) && !empty($_POST['passwd']) && isset($_POST['username']) && !empty($_POST['username'])){

    $email=htmlspecialchars($_POST['email']);
	$nom=htmlspecialchars($_POST['nom']);
    $prenom=htmlspecialchars($_POST['prenom']);
    $passwd=htmlspecialchars($_POST['passwd']);
    $passwd=sha1($passwd);
    $username=htmlspecialchars($_POST['username']);
	$req = $DBcon->prepare('INSERT INTO `user`(`ID`, `NOM`, `PRENOM`, `MAIL`, `USERNAME`, `PASSWORD`) VALUES (NULL,?,?,?,?,?)');

    $req->bindValue(1, $nom, PDO::PARAM_STR);
    $req->bindValue(2, $prenom, PDO::PARAM_STR);
    $req->bindValue(3, $email, PDO::PARAM_STR);
    $req->bindValue(4, $username, PDO::PARAM_STR);
    $req->bindValue(5, $passwd, PDO::PARAM_STR);

    $check=$req->execute();

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
                        <li>' . $_POST["entreprise"] . '<li>
    ';
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    mail('david.neyron@gmail.com','Demande de création de compte','OK', null);

    echo '<p><br/>Votre demande de création de compte a bien été enregistrée et va être traitée</p>';

    /*----------------------- FIN ENVOIS MAIL ---------------*/

    if($check){
        echo "<meta http-equiv='refresh' content='0; URL=../login.php'>";
    }
    else
        echo "Un problème s'est produit lors de la requete.<br>";

}
else
    include("../register.php");
    echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> un champ est vide. </div></div>";

$req->closeCursor();
?>
