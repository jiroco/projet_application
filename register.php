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
            <br/>
            <label for="inputLastName">Nom</label>
            <input id="inputLastName" placeholder="Nom" name="nom" type="text">
            <br/>
            <label for="inputdepartement" >Departement</label>
            <input id="inputdepartement" placeholder="Departement" name="departement" type="text">
            <br/>
            <label for="inputEmail">Email</label>
            <input id="email"  type="email" name="email" placeholder="Entrer votre adresse mail"/>
            <br/>
            <label for="inputUsername" >Username</label>
            <input id="inputUsername" placeholder="Username" name="username" type="text">
            <br/>
            <label for="inputPassword">Mot de passe</label>
            <input id="inputPassword"  placeholder="Mot de passe" name="passwd" type="password">
            <br/><br/>
            <button id="inputSubmit" type="submit">S'inscrire</button>
          </form>

          <div>

            <p>
              <strong>NB :</strong> Cette inscription ne saura en rien vous créer un compte
              <br/>Un mail va être envoyer à l'administrateur du site qui décidera alors de votre inscription effective
            </p>

        </div>
    </div>
  </body>
</html>
