<?php
include ("prodi.php");
include ("mhss.php");

$nim = $_GET['nim'];
$mhss = new mhss($nim);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Data Mahasiswa</title>
    <style type="text/css">
    body
    {background-color: #<?=$mhss->getwarna()?>;}
    </style>
  </head>
  <body>
    <h3><b><?=$mhss->getnama()?><b></h3><br>
    <h3><?=$mhss->getemail()?></h3><br>
    <h3><?=$mhss->getsex()?></h3><br>
    <p><?=$mhss->getpros()->getprogram()?><?=$mhss->getpros()->getnama()?></p>
  </body>
</html>
