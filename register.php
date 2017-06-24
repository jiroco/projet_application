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

            <label for="inputFisrtName">Prenom</label>
            <input id="inputFisrtName" placeholder="Prénom" type="text", name="prenom">
            <br/>
            <label for="inputLastName">Nom</label>
            <input id="inputLastName" placeholder="Nom" name="nom" type="text">
            <br/>
            <label for="inputSociete" >Société</label>
            <input id="inputSociete" placeholder="Societe" name="societe" type="text">
            <br/>
            <label for="inputEmail">Email</label>
            <input id="inputEmail"  type="email" name="email" placeholder="Entrer votre adresse mail"/>
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
