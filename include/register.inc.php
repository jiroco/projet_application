<?php
include("connexiondb.php");
if(isset($_POST['EMAIL']) && !empty($_POST['EMAIL']) && isset($_POST['PRENOM']) && !empty($_POST['PRENOM']) && isset($_POST['NOM']) && !empty($_POST['NOM']) && isset($_POST['PASSWORD']) && !empty($_POST['PASSWORD']) && isset($_POST['USERNAME']) && !empty($_POST['USERNAME'])){

    $email=htmlspecialchars($_POST['EMAIL']);
	$nom=htmlspecialchars($_POST['NOM']);
    $prenom=htmlspecialchars($_POST['PRENOM']);
    $passwd=htmlspecialchars($_POST['PASSWORD']);
    $passwd=sha1($passwd);
    $username=htmlspecialchars($_POST['USERNAME']);
	$req = $DBcon->prepare('INSERT INTO `USER`(`IDUSER`, `NOM`, `PRENOM`, `EMAIL`, `USERNAME`, `PASSWORD`) VALUES (NULL,?,?,?,?,?)');


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
