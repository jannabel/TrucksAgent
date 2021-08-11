<?php

require('../conexion.php');

$id=$_GET["id"];

$delete = "DELETE  FROM $users WHERE IdUsers=$id";
if($conexion->query($delete)) Header("Location:../../userstable.php"); 
else echo "ERROR " . $delete . "<br>" . $conexion->error;
?>