<?php
$hostname = "localhost";
$username ="root";
$password="";
$db = "trucksagent";
$trucks = "trucks";
$washingmachine = "washingmachine";
$users = "users";

$conexion = mysqli_connect($hostname, $username, $password, $db);

if(!$conexion)
{
echo 'Conexion Fallida' ;
}

?>