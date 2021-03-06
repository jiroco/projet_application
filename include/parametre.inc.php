<?php

session_start();

include("connexiondb.php");

if ((isset($_POST['nom']) && !empty($_POST['nom'])) ||
  (isset($_POST['prenom']) && !empty($_POST['prenom'])) ||
  (isset($_POST['mail']) && !empty($_POST['mail'])) ||
  (isset($_POST['societe']) && !empty($_POST['societe'])) ||
  (isset($_POST['password']) && !empty($_POST['password']))) {

  if ($_POST['password'] != NULL) {
    $change_user = $DBcon->prepare('UPDATE USER SET PASSWORD = ? WHERE IDUSER = ?');
    $change_user->bindValue(1,strip_tags(sha1($_POST['password'])),PDO::PARAM_INT);
    $change_user->bindValue(2,$_SESSION["IDUSER"],PDO::PARAM_INT);
    $change_user->execute();
    echo "Votre mot de passe a bien été changé ";
  }
  elseif ($_POST['societe'] != NULL) {
    $change = $DBcon->prepare('UPDATE USER SET SOCIETE = ? WHERE IDUSER = ?');
    $change->bindValue(1,strip_tags($_POST['societe']),PDO::PARAM_INT);
    $change->bindValue(2,$_SESSION["IDUSER"],PDO::PARAM_INT);
    $change->execute();
    $_SESSION['SOCIETE']=strip_tags($_POST['societe']);
    echo "Le nom de votre societe a bien été changé";
  }
  elseif ($_POST['mail'] != NULL) {
    $change = $DBcon->prepare('UPDATE USER SET MAIL = ? WHERE IDUSER = ?');
    $change->bindValue(1,strip_tags($_POST['mail']),PDO::PARAM_INT);
    $change->bindValue(2,$_SESSION["IDUSER"],PDO::PARAM_INT);
    $change->execute();
    $_SESSION['EMAIL']=strip_tags($_POST['mail']);
    echo "Votre adresse mail a bien été changé";
  }
  elseif ($_POST['nom'] != NULL) {
    $change = $DBcon->prepare('UPDATE USER SET NOM = ? WHERE IDUSER = ?');
    $change->bindValue(1,strip_tags($_POST['nom']),PDO::PARAM_INT);
    $change->bindValue(2,$_SESSION["IDUSER"],PDO::PARAM_INT);
    $change->execute();
    $_SESSION['NOM']=strip_tags($_POST['nom']);

    echo "Votre nom a bien été changé";
  }
  elseif ($_POST['prenom'] != NULL) {
    $change = $DBcon->prepare('UPDATE USER SET PRENOM = ? WHERE IDUSER = ?');
    $change->bindValue(1,strip_tags($_POST['prenom']),PDO::PARAM_INT);
    $change->bindValue(2,$_SESSION["IDUSER"],PDO::PARAM_INT);
    $change->execute();
    $_SESSION['PRENOM']=$_POST['prenom'];

    echo "Votre prenom a bien été changé";
  }

}

echo "<meta http-equiv='refresh' content='0; URL=../profil.php'>";

?>
