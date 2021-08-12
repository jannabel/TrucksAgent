<?php

require('php/conexion.php');

$view = "SELECT * FROM trucks_view";

if($conexion->query($view)) $row= mysqli_fetch_assoc($conexion->query($view));

?>