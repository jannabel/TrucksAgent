<?php
require("php/conexion.php");

$query= "SELECT * FROM $trucks";

if ($conexion->query($query)) {
    
    $result = $conexion->query($query);
    
    
    $dir = array();
    $cont = 0;
    while ($query = @mysqli_fetch_array($result)) {
       $dir[$cont] = $query;
       $cont++;
    }
    
    
}
    
    else echo "ERROR " . $query . "<br>" . $conexion->error;
    
    mysqli_close($conexion);