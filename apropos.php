<!DOCTYPE html>
<html>
<head>
  <title>A propos</title>
  <link rel="stylesheet" type="text/css" href="./stylesheet/apropos.css">
</head>
<body>
	<div id="main_containt">
		<?php
			include("include/connexiondb.php");
			session_start();
			if ((!isset($_SESSION['IDUSER'])) || (empty($_SESSION['IDUSER']))){
				include 'layout_base_unsigned.php';
			}
			else{
				include 'layout_base.php';
			}
		?>
		<div class="container">
			<div class="row text_area">
					<h1>A propos de ce projet : medisis web</h1>
			</div>
			<div class="row">
				
			</div>
		</div>
	</div>
 </body>
