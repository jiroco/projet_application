<?php
include("include/connexiondb.php");
session_start();
if ((!isset($_SESSION['IDUSER'])) || (empty($_SESSION['IDUSER']))){
    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>

    <form method="POST" action="include/reglage_defaillance.inc.php">
        <table>
            <tr>
                <td>Mode de défaillance 1:</td>
                <td><input type="text" name="defaillance_1" id="defaillance" value="Perte de la fonction"/></td>  
                <td><input type="checkbox" name="boxdefaillance_1" id="boxdefaillance_1"  /></td>
            
            </tr>
            <tr>
                <td>Mode de défaillance 2:</td>
                <td> <input type="text" name="defaillance_2" value="Fonction exécutée de façon intempestive"/> </td>
                <td><input type="checkbox" name="boxdefaillance_2" id="boxdefaillance_2"  /></td>
            </tr>
            <tr>
                <td>Mode de défaillance 3:</td>
                <td> <input type="text" name="defaillance_3" value="Retard d'exécution de la fonction" /> </td>
                <td><input type="checkbox" name="boxdefaillance_3" id="boxdefaillance_3"  /></td>
            </tr>
            
            <tr>
                <td>Mode de défaillance 4:</td>
                <td> <input type="text" name="defaillance_4" value="Démarrage de la fonction impossible" /> </td>
                <td><input type="checkbox" name="boxdefaillance_4" id="boxdefaillance_4"  /></td>
            </tr>
            <tr>
                <td>Mode de défaillance 5:</td>
                <td> <input type="text" name="defaillance_5" value="Arrêt de la fonction impossible" /> </td>
                <td><input type="checkbox" name="boxdefaillance_5" id="boxdefaillance_5"  /></td>
            </tr>
            <tr>
                <td>Mode de défaillance 6:</td>
                <td> <input type="text" name="defaillance_6" value="Fonction intermittente" /> </td>
                <td><input type="checkbox" name="boxdefaillance_6" id="boxdefaillance_6"  /></td>
            </tr>
            <tr>
                <td>Mode de défaillance 7:</td>
                <td> <input type="text" name="defaillance_7" value="Fonction dégradée" /> </td>
                <td><input type="checkbox" name="boxdefaillance_7" id="boxdefaillance_7"  /></td>
            </tr>



            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="submit" value="Valider" /></td>
            </tr>



        </table>
    </form>




</body>
</html>

