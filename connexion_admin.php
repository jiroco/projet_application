<!DOCTYPE html>
<html>
<head>
	<title>Connexion Admin</title>
</head>
<body>
<?php include 'layout_base.php'; ?>
<div>
	<form class="form-signin" method="POST">
		<div class="titre">
			<p>Connexion Administrateur</p>
			<br>
			<input type="hidden"/>
			<input name="USERNAME" id="username"  placeholder="username" required="" type="text"/>
			<br>
			<input name="PASSWORD" id="passwd" placeholder="Mot de passe" required="" type="password"/>
			<br/><br/>
			<input type="submit"  value="Connexion"/>
		</div>
	</form>
</div>

<?php include("include/connexion_admin.inc.php"); ?>

</body>
</html>
