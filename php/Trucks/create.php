<?php
require('../conexion.php');

$create = "INSERT INTO $trucks VALUES ('', '$_POST[Modelo]', '$_POST[Marca]', '$_POST[Color]', 
'$_POST[Comentario]', $_POST[CantLavadoras], $_POST[ValorCarga], $_POST[PesoCarga])";



if ($conexion->query($create))Header("Location:../../tabletrucks.php");
else echo "ERROR " . $create . "<br>" . $conexion->error;
?>