<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
		<link rel="stylesheet" type="text/css" href="./stylesheet/index.css">

	</head>
	<body>


		<div id="main_containt">
            <?php include('layout_base.php');?>
            <div class="container-fluid">
                <div class="row">
                    <form class="form-horizontal" method="POST">
                        <fieldset>
                            <!-- titre -->
                            <div class="row">
                                <div class="text_area">
                                    <div class="row titre"><h3> Sign up</h3></div>
                                </div>
                            </div>
                            <br/><br/>

                            <!-- Username -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="prenom">Username</label>  
                                <div class="col-md-4">
                     				<input type="hidden"/>
                                    <input id="username" name="USERNAME" type="text" placeholder="Username" required="" class="form-control input-md"/>
                                
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="inputLastName">Password</label>  
                                <div class="col-md-4">
                                    <input id="passwd" name="PASSWORD" placeholder="Password" class="form-control input-md" required="" type="password"/>    
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="reg"></label>
                              <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Sign up</button>
                              </div>
                            </div>                            
                        </fieldset>
                    </form>
                </div>
				<?php include("include/connexion.inc.php");?>
            </div>
        </div>
	</body>
</html>





