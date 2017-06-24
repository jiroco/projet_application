<?php
 session_start();
 if ((!isset($_SESSION['IDUSER'])) || (empty($_SESSION['IDUSER']))){
     echo "<meta http-equiv='refresh' content='0; URL=login.php'>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
</head>
<body>
	<?php include 'layout_base.php'; ?>
	<div class="container col-md-10 col-md-offset-1">
	  <div class="row ">
		      
		        <div id="profil" class="fade in active"> <!--profil début -->
		        	<div class="container" style="width:100%;"> <!--container de profil début -->
		        		<div class="panel-group"><!-- panel group debut -->
						    <div class="panel panel-default"><!-- panel debut -->
							    <div class="panel-heading">
							    	<h3>Mon Profil 
					    				<small class="pull-right">
					    					<a href="parametre.php"><span class="glyphicon glyphicon-pencil"></span> Editer</a>
						      			</small>
						      		</h3>							    	
							    </div>
							    <div class="panel-body"> <!-- panel body debut  -->
									<div class="row"> <!-- row debut -->
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
						            </div> <!-- row fin -->
							    </div> <!-- panel body  fin -->
						    </div><!-- panel fin -->
			          </div><!-- panel group fin  -->
			        </div><!--container de profil fin -->
		        </div> <!-- profil fin -->

	  </div><!--row fin -->	   
	</div><!--container fin -->

</body>
</html>