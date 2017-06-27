<?php
include("include/connexiondb.php");
session_start();
if (!isset($_SESSION['IDUSER']) || empty($_SESSION['IDUSER'])){
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
    <link rel="stylesheet" type="text/css" href="./stylesheet/index.css">


</head>
<body>
	<div id="main_containt">
        <?php include 'layout_base.php'; ?>
        <div class="container">
            <div class="row">
				<?php include("include/reglage_setup_3.inc.php"); ?>
                <div class="text_area">
                	<legend><h2>Reglage du setup</h2></legend>
					<form method="POST">
					  	<div class="table-responsive"> 
							<table class="table table-bordered" style="background-color:white !important;">
							    <thead>
							      <tr>
							      	<th>#</th>
							        <th>Effet local</th>
							      </tr>
							    </thead>
							    <tbody>
							      <tr>
							        <td>Séparateur</td>
							        <td><input type="text" name="firstsetbox" value="=>"></td>
							      </tr>
							    </tbody>
						  	</table>
						</div>
					  <input type="submit" name="submitsetup3" value="Valider">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php
}
?>