<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
</head>
<body>

<div>
	<form class="form-signin" method="POST">
		<div class="titre">
			<p>Connexion</p>
			<br>
			<input type="hidden"/>
			<input name="USERNAME" id="username"  placeholder="username" required="" type="text"/>
			<br>
			<input name="PASSWORD" id="passwd" placeholder="Mot de passe" required="" type="password"/>
			<br>
			<input type="submit"  value="Connexion"/>
		</div>
	</form>
</div>

<?php include("include/connexion.inc.php");?>

</body>
</html>