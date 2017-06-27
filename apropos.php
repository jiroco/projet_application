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
				if ($_SESSION['NOM']=='admin'){
					include('layout_base_admin.php');
				}
				else{
					include ('layout_base.php'); 	
				}
			}
		?>
		<div class="container">
			<div class="row text_area">
					<h1>A propos de ce projet : MEDISIS</h1>
     <div align="justify">
      <div style="text-indent :20px;">Au cours du processus d’ISBM, le modèle commun d’ingénierie utilisé doit permettre d’initier et de connecter les différentes activités d’analyse et de conception nécessaires à la production du système désiré.</div>
      <br><div align="center"><img src="image/aproposMeDISIS.png" align="middle" style="width:40%;height:40%;"></div>
      <br><div style="text-indent :20px;">Nous avons bâti une méthode afin d’intégrer efficacement le sous-processus d’analyse de SdF des systèmes au processus plus global d’ISBM. Cette méthode intitulée MéDISIS (Méthode D’Intégration des analyses de SdF à l’Ingénierie Système) a pour but de proposer un enchaînement de traitements de l’information et des connaissances, incluant leur création, expression, analyse, pérennisation et réutilisation répondant aux objectifs explicités ci-dessous. Ces traitements doivent être supportés par des outils et répertoires formant un EDS (Environnement de Développement Système) cohérent. Les objectifs à atteindre par la méthode sont les suivants :
      <br><br><div style="text-indent :20px;">1.Faciliter la transmission de connaissances entre équipes et entre les différentes activités d’ingénierie.</div>
      <div style="text-indent :20px;">2.Accélérer la réalisation des études de SdF.</div>
      <div style="text-indent :20px;">3.Organiser l’exploitation commune des connaissances sous forme de modèles.</div>
      <div style="text-indent :20px;">4.Permettre la réutilisation des connaissances entre projets (i.e. favoriser le retour d’expérience).</div>
      <div style="text-indent :20px;">5.Identifier les besoins d’analyse et réaliser le suivi de leurs résultats pendant les phases de vie du projet.</div>
      <div style="text-indent :20px;">6.Améliorer la cohérence et la qualité des analyses SdF.</div>
      <br><div style="text-indent :20px;">MéDISIS considère comme langage central le langage de modélisation système SysML. En effet, celui-ci, intrinsèquement profite aux points points 1 et 3 puisqu’il permet une modélisation multi-vue qui s’adaptera aux attentes des différents acteurs intervenants dans la conception du système. Un autre apport majeur de SysML est d’intégrer entre autres, la possibilité de modéliser les exigences en créant un support pour leur suivi au cours de l’évolution du modèle et du projet. Sur ce point, il satisfait donc l’objectif 5.
      MéDISIS intègre, de manière centrale, aux différents processus une couche de persistance de l’information (BCD), celle-ci contribue à répondre aux attentes du point 1 en permettant une agrégation structurée et maitrisée des connaissances en proposant à chaque expert, détenteur d’un point de vue, une structure centrale permettant la pérennisation des informations issues de ses analyses. La BCD apportera au point 3 son caractère multi-vue, et multi-langage et répondra aussi aux points 2 et 4 puisqu’elle est le résultat même de l’expression de ces besoins à savoir permettre un accès rapide aux informations de sureté de fonctionnement issues du REX, aussi bien pour être exploitées que pour être archivées. Et enfin, la BCD permettra une cohérence des analyses de SdF grâce à l’architecture de son méta-modèle qui relie entre eux les informations fonctionnelles, métiers et les résultats des analyses ce qui répond en partie aux objectifs du point 6.</div>
      <br><div style="text-indent :20px;">Enfin, MéDISIS se compose de plusieurs processus d’aide à la traduction permettant de passer d’un modèle en SysML vers d’autres modèles du même système dans des langages différents. Ce sont des processus automatisables, gages de cohérence, de rapidité et de traçabilité des informations traitées, crées et réutilisées, ils couvrent les besoins 1, 2 et 6. Ces processus de traduction doivent permettre de générer un squelette de modèle dans le langage cible le plus complet possible en respectant les points précédents. Ces processus ont pour but de permettre un déploiement opérationnel et de répondre aux besoins des industriels qui utilisent souvent plusieurs outils et formalismes au cours de leurs projets, manipulés par diverses personnes expertes dans leurs domaines propres.</div>
      </div>
			</div>
		</div>
	</div>
 </body>
