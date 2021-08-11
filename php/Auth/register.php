<?php
require('../conexion.php');

var_dump($_POST);
if($_POST["ROL"]=="on") $rol = 1;
else $rol=0;

if ($_POST["IdUsers"]!=""){
    $register = "UPDATE $users SET Nombre ='$_POST[Nombre]', Apellidos='$_POST[Apellidos]', Email='$_POST[Email]', Pass='$_POST[Pass]', Rol=$rol WHERE IdUsers = $_POST[IdUsers]";
}else{
    $pass = $_POST['Pass'];    
    $passHash = password_hash($pass, PASSWORD_BCRYPT);
    $register = "INSERT INTO $users VALUES('','$_POST[Nombre]', '$_POST[Apellidos]', '$_POST[Email]', '$passHash', $rol)";
}


if($conexion->query($register)) Header("Location:../../userstable.php");
else echo "ERROR " . $save . "<br>" . $conexion->error;
?>