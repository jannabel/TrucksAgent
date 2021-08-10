<?php
require("../conexion.php");

$codigo = $_POST["ID"];

$delete = "DELETE FROM $washingmachine WHERE Codigo='$codigo'";
if($conexion->query($delete)) {}//Header("Location:../../tabletrucks.php");
else echo "ERROR " . $delete . "<br>" . $conexion->error;



?>