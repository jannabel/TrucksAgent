<?php

require('../conexion.php');

$id=$_GET["id"];

$delete = "DELETE  FROM $trucks WHERE IdCamion=$id";
if($conexion->query($delete)) Header("Location:../../tabletrucks.php");
else echo "ERROR " . $delete . "<br>" . $conexion->error;
?>