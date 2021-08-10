<?php
error_reporting(0);
require('php/conexion.php');    
$id=$_GET["id"];
$gettruck = "SELECT * FROM $trucks Where IdCamion= $id";

if ($conexion->query($gettruck)) $row = mysqli_fetch_assoc($conexion->query($gettruck));
//else echo "ERROR " . $gettruck . "<br>" . $conexion->error;


$getwashing = "SELECT * FROM $washingmachine Where IdCamion= $id";

if ($conexion->query($getwashing)){
    $result = $conexion->query($getwashing);
    
    
    $rowmachine = array();
    $cont = 0;
    while ($getwashing = @mysqli_fetch_array($result)) {
       $rowmachine[$cont] = $getwashing;
       $cont++;
    }
}
//else echo "ERROR " . $getwashing . "<br>" . $conexion->error;
mysqli_close($conexion);




?>