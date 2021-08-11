<?php
    require('../conexion.php');

    if ($_POST["IdCamion"]!=""){
        $query = "UPDATE $users SET Nombre='$_POST[Nombre]', Apellidos='$_POST[Apellidos]', Email='$_POST[Email]', Pass='$_POST[Comentario]', CantLavadoras= $_POST[CantLavadoras], ValorCarga= $_POST[ValorCarga], PesoCarga=$_POST[PesoCarga]
        WHERE IdCamion = $_POST[IdCamion]";
    }
    else
    {
        $query = "INSERT INTO $users VALUES ('', '$_POST[Modelo]', '$_POST[Marca]', '$_POST[Color]', '$_POST[Comentario]', 0, 0, 0)";
    }

    if ($conexion->query($query))Header("Location:../../tabletrucks.php");
    else echo "ERROR " . $query . "<br>" . $conexion->error;

?>