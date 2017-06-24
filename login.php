<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="./stylesheet/login.css">
		<title> Connexion</title>
	</head>
	<body>
		<div id="main_contain">
			<?php include 'layout_base_unsigned.php'; ?>
			<div class="container-fluid">
				<div class="row text_area">
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
				<div class="row text_area">
					<?php include("include/connexion.inc.php");?>
				</div>
			</div>
		</div>
	</body>
</html>