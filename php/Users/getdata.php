<?php
error_reporting(0);
require('php/conexion.php');    
$id=$_GET["id"];
$getuser = "SELECT * FROM $users Where IdUsers= $id";

if ($conexion->query($getuser)) $row = mysqli_fetch_assoc($conexion->query($getuser));
session_start();
if($_SESSION["Email"]!=$row["Email"])$d = "readonly";
//else echo "ERROR " . $gettruck . "<br>" . $conexion->error;

mysqli_close($conexion);

?>