<?php
	session_start();
	if ((!isset($_SESSION['IDUSER'])) || (empty($_SESSION['IDUSER']))){
		$phpvar=1;
	    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
	}
	else{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
	<script type="text/javascript">
		var test= <?php echo $phpvar ;?>
		if(test==1){
			document.InnerHTML=" ";
		}
	</script>
</head>
<body>
	<?php include 'layout_base.php'; ?>
	<div class="container col-md-10 col-md-offset-1 row">

		        <div id="profil" class="fade in active"> <!--profil début -->
		        	<div class="container panel-group panel panel-default" style="width:100%;">
							    <div class="panel-heading">
							    	<h3>Mon Profil
					    				<small class="pull-right">
					    					<a href="parametre.php"><span class="glyphicon glyphicon-pencil"></span>Editer</a>
						      			</small>
						      		</h3>
							    </div>
							    <div class="panel-body">
            						<div class=" col-md-9 col-lg-9 ">
				                  <table class="table table-user-information">
				                    <tbody>
				                      <tr>
				                        <td>Prénom :	</td>
				                        <td><?php print_r($_SESSION['PRENOM']) ?></td>
				                      </tr>
				                      <tr>
				                        <td>Nom :	</td>
				                        <td><?php print_r($_SESSION["NOM"]) ?></td>
				                      </tr>
				                      <tr>
				                        <td>Société :	</td>
				                        <td><?php print_r($_SESSION['SOCIETE']) ?></td>
				                      </tr>
					                  <tr>
					                    <td>Email :	</td>
					                    <td><a href="mailto:"><?php print_r($_SESSION['EMAIL']) ?></a></td>
				                     </tr>
				                    </tbody>
				                  </table>
				                </div>
							    </div> <!-- panel body  fin -->
			        </div><!--container de profil fin -->
		        </div> <!-- profil fin -->

	</div><!--container fin -->
</body>
</html>

<?php
	}
?>
