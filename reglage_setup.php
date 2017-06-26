
<?
	include("include/connexiondb.php");
	session_start();
	if ((!isset($_SESSION['IDUSER'])) || (empty($_SESSION['IDUSER']))){
	    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
	}
	else{
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<?php include('layout_base.php'); ?>
	<div class="container">
	  <h2>Reglage du setup</h2>
	  <form method="POST" action="include/reglage_setup.inc.php">
		  <table class="table table-bordered">
		    <thead>
		      <tr>
		      	<th>#</th>
		        <th><input type="text" name="firstset" value="Numero"></th>
		        <th><input type="text" name="secondset" value="Fonction"></th>
		        <th><input type="text" name="thirdset" value="Exigence fonctionnelle"></th>
		        <th><input type="text" name="fourthset" value="Organe"></th>
		        <th><input type="text" name="fiveset" value="Mode de defaillance"></th>
		      	<th><input type="text" name="sixset" value="Cause local"></th>
		        <th><input type="text" name="sevenset" value="Effet local"></th>
		        <th><input type="text" name="eightset" value="Besoin"></th>
		        <th><input type="text" name="nineset" value="Exigence besoin"></th>
		        <th><input type="text" name="tenset" value="Nouvelle ligne ?"></th>
		        <th><input type="text" name="elevenset" value="A garder ?"></th>

		    </thead>
		    <tbody>
		      <tr>
		        <td>Numéro</td>
		        <td><input type="checkbox" name="firstsetbox[0]"></td>
		        <td><input type="checkbox" name="secondsetbox[0]"></td>
		        <td><input type="checkbox" name="thirdsetbox[0]"></td>
		        <td><input type="checkbox" name="fourthsetbox[0]"></td>
		        <td><input type="checkbox" name="fivesetbox[0]"></td>
		        <td><input type="checkbox" name="sixsetbox[0]"></td>
		        <td><input type="checkbox" name="sevensetbox[0]"></td>
		        <td><input type="checkbox" name="eightsetbox[0]"></td>
		        <td><input type="checkbox" name="ninesetbox[0]"></td>
		        <td><input type="checkbox" name="tensetbox[0]"></td>
		        <td><input type="checkbox" name="elevensetbox[0]"></td>
		      </tr>
		      <tr>
		      	<td>Fonction</td>
		        <td><input type="checkbox" name="firstsetbox[1]"></td>
		        <td><input type="checkbox" name="secondsetbox[1]"></td>
		        <td><input type="checkbox" name="thirdsetbox[1]"></td>
		        <td><input type="checkbox" name="fourthsetbox[1]"></td>
		        <td><input type="checkbox" name="fivesetbox[1]"></td>
		        <td><input type="checkbox" name="sixsetbox[1]"></td>
		        <td><input type="checkbox" name="sevensetbox[1]"></td>
		        <td><input type="checkbox" name="eightsetbox[1]"></td>
		        <td><input type="checkbox" name="ninesetbox[1]"></td>
		        <td><input type="checkbox" name="tensetbox[1]"></td>
		        <td><input type="checkbox" name="elevensetbox[1]"></td>
		      </tr>
		      <tr>
		      	<td>Exigence fonctionnelle</td>
		        <td><input type="checkbox" name="firstsetbox[2]"></td>
		        <td><input type="checkbox" name="secondsetbox[2]"></td>
		        <td><input type="checkbox" name="thirdsetbox[2]"></td>
		        <td><input type="checkbox" name="fourthsetbox[2]"></td>
		        <td><input type="checkbox" name="fivesetbox[2]"></td>
		        <td><input type="checkbox" name="sixsetbox[2]"></td>
		        <td><input type="checkbox" name="sevensetbox[2]"></td>
		        <td><input type="checkbox" name="eightsetbox[2]"></td>
		        <td><input type="checkbox" name="ninesetbox[2]"></td>
		        <td><input type="checkbox" name="tensetbox[2]"></td>
		        <td><input type="checkbox" name="elevensetbox[2]"></td>
		      </tr>
	 		  <tr>
		      	<td>Organe</td>
		        <td><input type="checkbox" name="firstsetbox[3]"></td>
		        <td><input type="checkbox" name="secondsetbox[3]"></td>
		        <td><input type="checkbox" name="thirdsetbox[3]"></td>
		        <td><input type="checkbox" name="fourthsetbox[3]"></td>
		        <td><input type="checkbox" name="fivesetbox[3]"></td>
		        <td><input type="checkbox" name="sixsetbox[3]"></td>
		        <td><input type="checkbox" name="sevensetbox[3]"></td>
		        <td><input type="checkbox" name="eightsetbox[3]"></td>
		        <td><input type="checkbox" name="ninesetbox[3]"></td>
		        <td><input type="checkbox" name="tensetbox[3]"></td>
		        <td><input type="checkbox" name="elevensetbox[3]"></td>
		      </tr>
	 		  <tr>
		        <td>Mode de défaillance</td>
		        <td><input type="checkbox" name="firstsetbox[4]"></td>
		        <td><input type="checkbox" name="secondsetbox[4]"></td>
		        <td><input type="checkbox" name="thirdsetbox[4]"></td>
		        <td><input type="checkbox" name="fourthsetbox[4]"></td>
		        <td><input type="checkbox" name="fivesetbox[4]"></td>
		        <td><input type="checkbox" name="sixsetbox[4]"></td>
		        <td><input type="checkbox" name="sevensetbox[4]"></td>
		        <td><input type="checkbox" name="eightsetbox[4]"></td>
		        <td><input type="checkbox" name="ninesetbox[4]"></td>
		        <td><input type="checkbox" name="tensetbox[4]"></td>
		        <td><input type="checkbox" name="elevensetbox[4]"></td>
		      </tr>
		      <tr>
		        <td>Cause local</td>
		        <td><input type="checkbox" name="firstsetbox[5]"></td>
		        <td><input type="checkbox" name="secondsetbox[5]"></td>
		        <td><input type="checkbox" name="thirdsetbox[5]"></td>
		        <td><input type="checkbox" name="fourthsetbox[5]"></td>
		        <td><input type="checkbox" name="fivesetbox[5]"></td>
		        <td><input type="checkbox" name="sixsetbox[5]"></td>
		        <td><input type="checkbox" name="sevensetbox[5]"></td>
		        <td><input type="checkbox" name="eightsetbox[5]"></td>
		        <td><input type="checkbox" name="ninesetbox[5]"></td>
		        <td><input type="checkbox" name="tensetbox[5]"></td>
		        <td><input type="checkbox" name="elevensetbox[5]"></td>
		      </tr>
		      <tr>
		        <td>Effet local</td>
		        <td><input type="checkbox" name="firstsetbox[6]"></td>
		        <td><input type="checkbox" name="secondsetbox[6]"></td>
		        <td><input type="checkbox" name="thirdsetbox[6]"></td>
		        <td><input type="checkbox" name="fourthsetbox[6]"></td>
		        <td><input type="checkbox" name="fivesetbox[6]"></td>
		        <td><input type="checkbox" name="sixsetbox[6]"></td>
		        <td><input type="checkbox" name="sevensetbox[6]"></td>
		        <td><input type="checkbox" name="eightsetbox[6]"></td>
		        <td><input type="checkbox" name="ninesetbox[6]"></td>
		        <td><input type="checkbox" name="tensetbox[6]"></td>
		        <td><input type="checkbox" name="elevensetbox[6]"></td>
		      </tr>
	 		  <tr>
		        <td>Besoin</td>
		        <td><input type="checkbox" name="firstsetbox[7]"></td>
		        <td><input type="checkbox" name="secondsetbox[7]"></td>
		        <td><input type="checkbox" name="thirdsetbox[7]"></td>
		        <td><input type="checkbox" name="fourthsetbox[7]"></td>
		        <td><input type="checkbox" name="fivesetbox[7]"></td>
		        <td><input type="checkbox" name="sixsetbox[7]"></td>
		        <td><input type="checkbox" name="sevensetbox[7]"></td>
		        <td><input type="checkbox" name="eightsetbox[7]"></td>
		        <td><input type="checkbox" name="ninesetbox[7]"></td>
		        <td><input type="checkbox" name="tensetbox[7]"></td>
		        <td><input type="checkbox" name="elevensetbox[7]"></td>
		      </tr>
	 		  <tr>
		        <td>Exigence besoin</td>
		        <td><input type="checkbox" name="firstsetbox[8]"></td>
		        <td><input type="checkbox" name="secondsetbox[8]"></td>
		        <td><input type="checkbox" name="thirdsetbox[8]"></td>
		        <td><input type="checkbox" name="fourthsetbox[8]"></td>
		        <td><input type="checkbox" name="fivesetbox[8]"></td>
		        <td><input type="checkbox" name="sixsetbox[8]"></td>
		        <td><input type="checkbox" name="sevensetbox[8]"></td>
		        <td><input type="checkbox" name="eightsetbox[8]"></td>
		        <td><input type="checkbox" name="ninesetbox[8]"></td>
		        <td><input type="checkbox" name="tensetbox[8]"></td>
		        <td><input type="checkbox" name="elevensetbox[8]"></td>
		      </tr>
		      <tr>
		        <td>Nouvelle ligne ?</td>
		        <td><input type="checkbox" name="firstsetbox[9]"></td>
		        <td><input type="checkbox" name="secondsetbox[9]"></td>
		        <td><input type="checkbox" name="thirdsetbox[9]"></td>
		        <td><input type="checkbox" name="fourthsetbox[9]"></td>
		        <td><input type="checkbox" name="fivesetbox[9]"></td>
		        <td><input type="checkbox" name="sixsetbox[9]"></td>
		        <td><input type="checkbox" name="sevensetbox[9]"></td>
		        <td><input type="checkbox" name="eightsetbox[9]"></td>
		        <td><input type="checkbox" name="ninesetbox[9]"></td>
		        <td><input type="checkbox" name="tensetbox[9]"></td>
		        <td><input type="checkbox" name="elevensetbox[9]"></td>
		      </tr>
		      <tr>
		        <td>A garder ?</td>
		        <td><input type="checkbox" name="firstsetbox[10]"></td>
		        <td><input type="checkbox" name="secondsetbox[10]"></td>
		        <td><input type="checkbox" name="thirdsetbox[10]"></td>
		        <td><input type="checkbox" name="fourthsetbox[10]"></td>
		        <td><input type="checkbox" name="fivesetbox[10]"></td>
		        <td><input type="checkbox" name="sixsetbox[10]"></td>
		        <td><input type="checkbox" name="sevensetbox[10]"></td>
		        <td><input type="checkbox" name="eightsetbox[10]"></td>
		        <td><input type="checkbox" name="ninesetbox[10]"></td>
		        <td><input type="checkbox" name="tensetbox[10]"></td>
		        <td><input type="checkbox" name="elevensetbox[10]"></td>
		      </tr>

		    </tbody>
		  </table>

		  <input type="submit" name="submitsetup" value="Valider">
		</form>
	</div>
</body>
</html>
<?php
	}
?>
