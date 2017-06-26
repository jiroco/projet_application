<?php
include("include/connexiondb.php");
session_start();
if (!isset($_SESSION['IDUSER']) || empty($_SESSION['IDUSER'])){
    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
}
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
		        <th><input type="text" name="firstset" value="Exigence fonctionnelle"></th>
		        <th><input type="text" name="secondset" value="Organe"></th>
		        <th><input type="text" name="thirdset" value="Besoin"></th>
		        <th><input type="text" name="fourthset" value="Exigence besoin"></th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td>Texte de la première ligne fusionnée</td>
		        <td><input type="checkbox" name="firstsetbox[0]"></td>
		        <td><input type="checkbox" name="secondsetbox[0]"></td>
		        <td><input type="checkbox" name="thirdsetbox[0]"></td>
		        <td><input type="checkbox" name="fourthsetbox[0]"></td>
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
		    </tbody>
		  </table>

		  <input type="submit" name="submitsetup" value="Valider">
		</form>
	</div>
</body>
</html>
