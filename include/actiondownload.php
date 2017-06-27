<?php
include("include/connexiondb.php");
session_start();
if ((!isset($_SESSION['IDUSER'])) || (empty($_SESSION['IDUSER']))){
    echo "<meta http-equiv='refresh' content='0; URL=index.php'>";
}
else {
    header('charset=iso-8859-1');

    

}
?>