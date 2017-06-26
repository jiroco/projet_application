<!DOCTYPE html>
<html>
<head>
  <title>Paramètres</title>

</head>
<body>
<?php
session_start();
if ((!isset($_SESSION['IDUSER'])) || (empty($_SESSION['IDUSER']))){
    include 'layout_base_unsigned.php';
}

else {
  include 'layout_base.php';
}
?>
</body>
