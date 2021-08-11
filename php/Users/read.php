<?php
require("php/conexion.php");

$query= "SELECT * FROM $users";

if ($conexion->query($query)) {
    
    $result = $conexion->query($query);
    
    
    $allusers = array();
    $cont = 0;
    while ($query = @mysqli_fetch_array($result)) {
       $allusers[$cont] = $query;
       $cont++;
    }
    
    
}
    
    else echo "ERROR " . $query . "<br>" . $conexion->error;
    
    mysqli_close($conexion);
?>