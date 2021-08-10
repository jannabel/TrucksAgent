<?php
    require('../conexion.php');

    if ($_POST["IdCamion"]!=""){
        $query = "UPDATE $trucks SET Modelo='$_POST[Modelo]', Marca='$_POST[Marca]', Color='$_POST[Color]', Comentario='$_POST[Comentario]', CantLavadoras= $_POST[CantLavadoras], ValorCarga= $_POST[ValorCarga], PesoCarga=$_POST[PesoCarga]
        WHERE IdCamion = $_POST[IdCamion]";
    }
    else
    {
        $query = "INSERT INTO $trucks VALUES ('', '$_POST[Modelo]', '$_POST[Marca]', '$_POST[Color]', '$_POST[Comentario]', 0, 0, 0)";
    }

    if ($conexion->query($query))Header("Location:../../tabletrucks.php");
    else echo "ERROR " . $query . "<br>" . $conexion->error;

?>