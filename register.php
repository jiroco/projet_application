<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>

<div>

      <form action="include/register.inc.php" method="POST">
        <h2 class="titre">Inscription</h2>

        <label for="inputFisrtName">Prénom</label>
        <input id="inputFisrtName" placeholder="Prénom" type="text", name="prenom">

        <label for="inputLastName">Nom</label>
        <input id="inputLastName" placeholder="Nom" name="nom" type="text">

        <label for="inputdepartement" >Departement</label>
        <input id="inputdepartement" placeholder="Departement" name="departement" type="text">

        <label for="inputEmail">Email</label>
        <input id="email"  type="email" name="email" placeholder="Entrer votre adresse mail"/>

        <label for="inputUsername" >Username</label>
        <input id="inputUsername" placeholder="Username" name="username" type="text">

        <label for="inputPassword">Mot de passe</label>
        <input id="inputPassword"  placeholder="Mot de passe" name="passwd" type="password">

        <button type="submit">S'inscrire</button>
      </form>

    </div>
</body>
</html>