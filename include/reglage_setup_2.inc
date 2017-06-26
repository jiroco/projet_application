<?php
include("connexiondb.php");


$req= $DBcon->prepare('TRUNCATE TABLE setup');
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
$req = $DBcon->prepare('INSERT INTO `setup2`(`IDSETUP`, `1`, `2`, `3`, `4`) VALUES (NULL,?,?,?,?)');
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
if (isset($_POST["fivesetbox"][1])){
	$five1 ="x";
	$count2+=1;
}
else{
	$five1 = "";
}
if (isset($_POST["sixsetbox"][1])){
	$six1 ="x";
	$count2+=1;
}
else{
	$six1 = "";
}
if (isset($_POST["sevensetbox"][1])){
	$seven1 ="x";
	$count2+=1;
}
else{
	$seven1 = "";
}
if (isset($_POST["eightsetbox"][1])){
	$eight1 ="x";
	$count2+=1;
}
else{
	$eight1 = "";
}
if (isset($_POST["ninesetbox"][1])){
	$nine1 ="x";
	$count2+=1;
}
else{
	$nine1 = "";
}
if (isset($_POST["tensetbox"][1])){
	$ten1 ="x";
	$count2+=1;
}
else{
	$ten1 = "";
}
if (isset($_POST["elevensetbox"][1])){
	$eleven1 ="x";
	$count2+=1;
}
else{
	$eleven1 = "";
}

//requet avec la selection des données
$req = $DBcon->prepare('INSERT INTO `setup`(`IDSETUP`, `TYPE`,`1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`) VALUES (NULL,"Fonction",?,?,?,?,?,?,?,?,?,?,?)');
        $req->bindValue(1,$one1,PDO::PARAM_STR);
        $req->bindValue(2,$two1,PDO::PARAM_STR);
        $req->bindValue(3,$three1,PDO::PARAM_STR);
        $req->bindValue(4,$four1,PDO::PARAM_STR);
        $req->bindValue(5,$five1,PDO::PARAM_STR);
        $req->bindValue(6,$six1,PDO::PARAM_STR);
        $req->bindValue(7,$seven1,PDO::PARAM_STR);
        $req->bindValue(8,$eight1,PDO::PARAM_STR);
        $req->bindValue(9,$nine1,PDO::PARAM_STR);
        $req->bindValue(10,$ten1,PDO::PARAM_STR);
        $req->bindValue(11,$eleven1,PDO::PARAM_STR);
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
if (isset($_POST["fivesetbox"][2])){
	$five2 ="x";
	$count3+=1;
}
else{
	$five2 = "";
}
if (isset($_POST["sixsetbox"][2])){
	$six2 ="x";
	$count3+=1;
}
else{
	$six2 = "";
}
if (isset($_POST["sevensetbox"][2])){
	$seven2 ="x";
	$count3+=1;
}
else{
	$seven2 = "";
}
if (isset($_POST["eightsetbox"][2])){
	$eight2 ="x";
	$count3+=1;
}
else{
	$eight2 = "";
}
if (isset($_POST["ninesetbox"][2])){
	$nine2 ="x";
	$count3+=1;
}
else{
	$nine2 = "";
}
if (isset($_POST["tensetbox"][2])){
	$ten2 ="x";
	$count3+=1;
}
else{
	$ten2 = "";
}
if (isset($_POST["elevensetbox"][2])){
	$eleven2 ="x";
	$count3+=1;
}
else{
	$eleven2 = "";
}

//requet avec la selection des données
$req = $DBcon->prepare('INSERT INTO `setup`(`IDSETUP`,`TYPE`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`) VALUES (NULL,"Exigence fonctionnelle",?,?,?,?,?,?,?,?,?,?,?)');
        $req->bindValue(1,$one2,PDO::PARAM_STR);
        $req->bindValue(2,$two2,PDO::PARAM_STR);
        $req->bindValue(3,$three2,PDO::PARAM_STR);
        $req->bindValue(4,$four2,PDO::PARAM_STR);
        $req->bindValue(5,$five2,PDO::PARAM_STR);
        $req->bindValue(6,$six2,PDO::PARAM_STR);
        $req->bindValue(7,$seven2,PDO::PARAM_STR);
        $req->bindValue(8,$eight2,PDO::PARAM_STR);
        $req->bindValue(9,$nine2,PDO::PARAM_STR);
        $req->bindValue(10,$ten2,PDO::PARAM_STR);
        $req->bindValue(11,$eleven2,PDO::PARAM_STR);
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
if (isset($_POST["fivesetbox"][3])){
	$five3 ="x";
	$count4+=1;
}
else{
	$five3 = "";
}
if (isset($_POST["sixsetbox"][3])){
	$six3 ="x";
	$count4+=1;
}
else{
	$six3 = "";
}
if (isset($_POST["sevensetbox"][3])){
	$seven3 ="x";
	$count4+=1;
}
else{
	$seven3 = "";
}
if (isset($_POST["eightsetbox"][3])){
	$eight3 ="x";
	$count4+=1;
}
else{
	$eight3 = "";
}
if (isset($_POST["ninesetbox"][3])){
	$nine3 ="x";
	$count4+=1;
}
else{
	$nine3 = "";
}
if (isset($_POST["tensetbox"][3])){
	$ten3 ="x";
	$count4+=1;
}
else{
	$ten3 = "";
}
if (isset($_POST["elevensetbox"][3])){
	$eleven3 ="x";
	$count4+=1;
}
else{
	$eleven3 = "";
}


//requet avec la selection des données
$req = $DBcon->prepare('INSERT INTO `setup`(`IDSETUP`, `TYPE`,`1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`) VALUES (NULL,"Organe",?,?,?,?,?,?,?,?,?,?,?)');
        $req->bindValue(1,$one3,PDO::PARAM_STR);
        $req->bindValue(2,$two3,PDO::PARAM_STR);
        $req->bindValue(3,$three3,PDO::PARAM_STR);
        $req->bindValue(4,$four3,PDO::PARAM_STR);
        $req->bindValue(5,$five3,PDO::PARAM_STR);
        $req->bindValue(6,$six3,PDO::PARAM_STR);
        $req->bindValue(7,$seven3,PDO::PARAM_STR);
        $req->bindValue(8,$eight3,PDO::PARAM_STR);
        $req->bindValue(9,$nine3,PDO::PARAM_STR);
        $req->bindValue(10,$ten3,PDO::PARAM_STR);
        $req->bindValue(11,$eleven3,PDO::PARAM_STR);
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
if (isset($_POST["fivesetbox"][4])){
	$five4 ="x";
	$count5+=1;
}
else{
	$five4 = "";
}
if (isset($_POST["sixsetbox"][4])){
	$six4 ="x";
	$count5+=1;
}
else{
	$six4 = "";
}
if (isset($_POST["sevensetbox"][4])){
	$seven4 ="x";
	$count5+=1;
}
else{
	$seven4 = "";
}
if (isset($_POST["eightsetbox"][4])){
	$eight4 ="x";
	$count5+=1;
}
else{
	$eight4 = "";
}
if (isset($_POST["ninesetbox"][4])){
	$nine4 ="x";
	$count5+=1;
}
else{
	$nine4 = "";
}
if (isset($_POST["tensetbox"][4])){
	$ten4 ="x";
	$count5+=1;
}
else{
	$ten4 = "";
}
if (isset($_POST["elevensetbox"][4])){
	$eleven4 ="x";
	$count5+=1;
}
else{
	$eleven4 = "";
}
//requet avec la selection des données
$req = $DBcon->prepare('INSERT INTO `setup`(`IDSETUP`,`TYPE`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`) VALUES (NULL,"Mode de defaillance",?,?,?,?,?,?,?,?,?,?,?)');
        $req->bindValue(1,$one4,PDO::PARAM_STR);
        $req->bindValue(2,$two4,PDO::PARAM_STR);
        $req->bindValue(3,$three4,PDO::PARAM_STR);
        $req->bindValue(4,$four4,PDO::PARAM_STR);
        $req->bindValue(5,$five4,PDO::PARAM_STR);
        $req->bindValue(6,$six4,PDO::PARAM_STR);
        $req->bindValue(7,$seven4,PDO::PARAM_STR);
        $req->bindValue(8,$eight4,PDO::PARAM_STR);
        $req->bindValue(9,$nine4,PDO::PARAM_STR);
        $req->bindValue(10,$ten4,PDO::PARAM_STR);
        $req->bindValue(11,$eleven4,PDO::PARAM_STR);
        $check=$req->execute();

        if($check){
            }

        else
            echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Erreur de requete.</div></div>";        
        
        $req->closeCursor();

if (isset($_POST["firstsetbox"][5])){
	$one5 ="x";
	$count6+=1;
}
else{
	$one5 = "";
}
if (isset($_POST["secondsetbox"][5])){
	$two5 ="x";
	$count6+=1;
}
else{
	$two5 = "";
}
if (isset($_POST["thirdsetbox"][5])){
	$three5 ="x";
	$count6+=1;
}
else{
	$three5 = "";
}
if (isset($_POST["fourthsetbox"][5])){
	$four5 ="x";
	$count6+=1;
}
else{
	$four5 = "";
}
if (isset($_POST["fivesetbox"][5])){
	$five5 ="x";
	$count6+=1;
}
else{
	$five5 = "";
}
if (isset($_POST["sixsetbox"][5])){
	$six5 ="x";
	$count6+=1;
}
else{
	$six5 = "";
}
if (isset($_POST["sevensetbox"][5])){
	$seven5 ="x";
	$count6+=1;
}
else{
	$seven5 = "";
}
if (isset($_POST["eightsetbox"][5])){
	$eight5 ="x";
	$count6+=1;
}
else{
	$eight5 = "";
}
if (isset($_POST["ninesetbox"][5])){
	$nine5 ="x";
	$count6+=1;
}
else{
	$nine5 = "";
}
if (isset($_POST["tensetbox"][5])){
	$ten5 ="x";
	$count6+=1;
}
else{
	$ten5 = "";
}
if (isset($_POST["elevensetbox"][5])){
	$eleven5 ="x";
	$count6+=1;
}
else{
	$eleven5 = "";
}

//requet avec la selection des données
$req = $DBcon->prepare('INSERT INTO `setup`(`IDSETUP`,`TYPE`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`) VALUES (NULL,"Cause locale",?,?,?,?,?,?,?,?,?,?,?)');
        $req->bindValue(1,$one5,PDO::PARAM_STR);
        $req->bindValue(2,$two5,PDO::PARAM_STR);
        $req->bindValue(3,$three5,PDO::PARAM_STR);
        $req->bindValue(4,$four5,PDO::PARAM_STR);
        $req->bindValue(5,$five5,PDO::PARAM_STR);
        $req->bindValue(6,$six5,PDO::PARAM_STR);
        $req->bindValue(7,$seven5,PDO::PARAM_STR);
        $req->bindValue(8,$eight5,PDO::PARAM_STR);
        $req->bindValue(9,$nine5,PDO::PARAM_STR);
        $req->bindValue(10,$ten5,PDO::PARAM_STR);
        $req->bindValue(11,$eleven5,PDO::PARAM_STR);
        $check=$req->execute();

        if($check){
            }

        else
            echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Erreur de requete.</div></div>";        
        
        $req->closeCursor();

if (isset($_POST["firstsetbox"][6])){
	$one6 ="x";
	$count7+=1;
}
else{
	$one6 = "";
}
if (isset($_POST["secondsetbox"][6])){
	$two6 ="x";
	$count7+=1;
}
else{
	$two6 = "";
}
if (isset($_POST["thirdsetbox"][6])){
	$three6 ="x";
	$count7+=1;
}
else{
	$three6 = "";
}
if (isset($_POST["fourthsetbox"][6])){
	$four6 ="x";
	$count7+=1;
}
else{
	$four6 = "";
}
if (isset($_POST["fivesetbox"][6])){
	$five6 ="x";
	$count7+=1;
}
else{
	$five6 = "";
}
if (isset($_POST["sixsetbox"][6])){
	$six6 ="x";
	$count7+=1;
}
else{
	$six6 = "";
}
if (isset($_POST["sevensetbox"][6])){
	$seven6 ="x";
	$count7+=1;
}
else{
	$seven6 = "";
}
if (isset($_POST["eightsetbox"][6])){
	$eight6 ="x";
	$count7+=1;
}
else{
	$eight6 = "";
}
if (isset($_POST["ninesetbox"][6])){
	$nine6 ="x";
	$count7+=1;
}
else{
	$nine6 = "";
}
if (isset($_POST["tensetbox"][6])){
	$ten6 ="x";
	$count7+=1;
}
else{
	$ten6 = "";
}
if (isset($_POST["elevensetbox"][6])){
	$eleven6 ="x";
	$count7+=1;
}
else{
	$eleven6 = "";
}

$req = $DBcon->prepare('INSERT INTO `setup`(`IDSETUP`, `TYPE`,`1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`) VALUES (NULL,"Effet locale",?,?,?,?,?,?,?,?,?,?,?)');
        $req->bindValue(1,$one6,PDO::PARAM_STR);
        $req->bindValue(2,$two6,PDO::PARAM_STR);
        $req->bindValue(3,$three6,PDO::PARAM_STR);
        $req->bindValue(4,$four6,PDO::PARAM_STR);
        $req->bindValue(5,$five6,PDO::PARAM_STR);
        $req->bindValue(6,$six6,PDO::PARAM_STR);
        $req->bindValue(7,$seven6,PDO::PARAM_STR);
        $req->bindValue(8,$eight6,PDO::PARAM_STR);
        $req->bindValue(9,$nine6,PDO::PARAM_STR);
        $req->bindValue(10,$ten6,PDO::PARAM_STR);
        $req->bindValue(11,$eleven6,PDO::PARAM_STR);
        $check=$req->execute();

        if($check){
            }

        else
            echo "</br><div class='container col-md-4 col-md-offset-4'><div class='alert alert-danger' style='text-align: center;'> <strong>Attention !</strong> Erreur de requete.</div></div>";        
        
        $req->closeCursor();


if ($count1==1 && $count2==1 && $count3<=1 && $count4<=1 && $count5==1 && $count6==1 && $count7==1){
	include("excel.php");
}
else{
	echo "vous n'avez pas coché correctement les cases du setup";
}


//echo $output;
?>
