<?php
include("connexiondb.php");


$req= $DBcon->prepare('TRUNCATE TABLE setup2');
$req->execute();
$count1=0;
$count2=0;
$count3=0;
$count4=0;
$count5=0;



if (isset($_POST["firstsetbox"][0])){
	$one0 ="x";
	$count1+=1;
}
else{
	$one0 = "";
}
if (isset($_POST["secondsetbox"][0])){
	$two0 ="x";
	$count1+=1;
}
else{
	$two0 = "";
}
if (isset($_POST["thirdsetbox"][0])){
	$three0 ="x";
	$count1+=1;
}
else{
	$three0 = "";
}
if (isset($_POST["fourthsetbox"][0])){
	$four0 ="x";
	$count1+=1;
}
else{
	$four0 = "";
}

//requet avec la selection des données
$req = $DBcon->prepare('INSERT INTO `setup2`(`IDSETUP2`,`TYPE2`, `1`, `2`, `3`, `4`) VALUES (NULL,"Texte de la premiere ligne fusionnee",?,?,?,?)');
        $req->bindValue(1,$one0,PDO::PARAM_STR);
        $req->bindValue(2,$two0,PDO::PARAM_STR);
        $req->bindValue(3,$three0,PDO::PARAM_STR);
        $req->bindValue(4,$four0,PDO::PARAM_STR);
        
        $check=$req->execute();

        if($check){
            }

        else
            echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Erreur de requete.</div></div>";        
        
        $req->closeCursor();

if (isset($_POST["firstsetbox"][1])){
	$one1 ="x";
	$count2+=1;
}
else{
	$one1 = "";
}
if (isset($_POST["secondsetbox"][1])){
	$two1 ="x";
	$count2+=1;

}
else{
	$two1 = "";
}
if (isset($_POST["thirdsetbox"][1])){
	$three1 ="x";
	$count2+=1;
}
else{
	$three1 = "";
}
if (isset($_POST["fourthsetbox"][1])){
	$four1 ="x";
	$count2+=1;
}
else{
	$four1 = "";
}


//requet avec la selection des données
$req = $DBcon->prepare('INSERT INTO `setup2`(`IDSETUP2`,`TYPE2`,`1`, `2`, `3`, `4`) VALUES (NULL,"Concatenation",?,?,?,?)');
        $req->bindValue(1,$one1,PDO::PARAM_STR);
        $req->bindValue(2,$two1,PDO::PARAM_STR);
        $req->bindValue(3,$three1,PDO::PARAM_STR);
        $req->bindValue(4,$four1,PDO::PARAM_STR);
        $check=$req->execute();

        if($check){
            }

        else
            echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Erreur de requete.</div></div>";        
        
        $req->closeCursor();

if (isset($_POST["firstsetbox"][2])){
	$one2 ="x";
	$count3+=1;
}
else{
	$one2 = "";
}
if (isset($_POST["secondsetbox"][2])){
	$two2 ="x";
	$count3+=1;
}
else{
	$two2 = "";
}
if (isset($_POST["thirdsetbox"][2])){
	$three2 ="x";
	$count3+=1;
}
else{
	$three2 = "";
}
if (isset($_POST["fourthsetbox"][2])){
	$four2 ="x";
	$count3+=1;
}
else{
	$four2 = "";
}


//requet avec la selection des données
$req = $DBcon->prepare('INSERT INTO `setup2`(`IDSETUP2`,`TYPE2`, `1`, `2`, `3`, `4`) VALUES (NULL,"Fusion avec cardinalite",?,?,?,?)');
        $req->bindValue(1,$one2,PDO::PARAM_STR);
        $req->bindValue(2,$two2,PDO::PARAM_STR);
        $req->bindValue(3,$three2,PDO::PARAM_STR);
        $req->bindValue(4,$four2,PDO::PARAM_STR);
        $check=$req->execute();

        if($check){
            }

        else
            echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Erreur de requete.</div></div>";        
        
        $req->closeCursor();

if (isset($_POST["firstsetbox"][3])){
	$one3 ="x";
	$count4+=1;
}
else{
	$one3 = "";
}
if (isset($_POST["secondsetbox"][3])){
	$count4+=1;
	$two3 ="x";
}
else{
	$two3 = "";
}
if (isset($_POST["thirdsetbox"][3])){
	$three3 ="x";
	$count4+=1;
}
else{
	$three3 = "";
}
if (isset($_POST["fourthsetbox"][3])){
	$four3 ="x";
	$count4+=1;
}
else{
	$four3 = "";
}


//requet avec la selection des données
$req = $DBcon->prepare('INSERT INTO `setup2`(`IDSETUP2`,`TYPE2`,`1`, `2`, `3`, `4`) VALUES (NULL,"Fusion sans cardinalite",?,?,?,?)');
        $req->bindValue(1,$one3,PDO::PARAM_STR);
        $req->bindValue(2,$two3,PDO::PARAM_STR);
        $req->bindValue(3,$three3,PDO::PARAM_STR);
        $req->bindValue(4,$four3,PDO::PARAM_STR);

        $check=$req->execute();

        if($check){
            }

        else
            echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Erreur de requete.</div></div>";        
        
        $req->closeCursor();

if (isset($_POST["firstsetbox"][4])){
	$one4 ="x";
	$count5+=1;
}
else{
	$one4 = "";
}
if (isset($_POST["secondsetbox"][4])){
	$two4 ="x";
	$count5+=1;

}
else{
	$two4 = "";
}
if (isset($_POST["thirdsetbox"][4])){
	$count5+=1;
	$three4 ="x";
}
else{
	$three4 = "";
}
if (isset($_POST["fourthsetbox"][4])){
	$four4 ="x";
	$count5+=1;
}
else{
	$four4 = "";
}


//requet avec la selection des données
$req = $DBcon->prepare('INSERT INTO `setup2`(`IDSETUP2`,`TYPE2`, `1`, `2`, `3`, `4`) VALUES (NULL,"Intersection",?,?,?,?)');
        $req->bindValue(1,$one4,PDO::PARAM_STR);
        $req->bindValue(2,$two4,PDO::PARAM_STR);
        $req->bindValue(3,$three4,PDO::PARAM_STR);
        $req->bindValue(4,$four4,PDO::PARAM_STR);

        $check=$req->execute();

        if($check){
            }

        else
            echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Erreur de requete.</div></div>";        
        
        $req->closeCursor();



if (isset($_POST['submitsetup2']) && $count1<=1 && $count2<=1 && $count3<=1 && $count4<=1 ){
	include("excel2.php");
	echo "<meta http-equiv='refresh' content='3; URL=reglage_setup_3.php'>";
}
else{
	if (isset($_POST['submitsetup2'])) {
		echo "vous n'avez pas coché correctement les cases du setup2";
	}
}


//echo $output;
?>
