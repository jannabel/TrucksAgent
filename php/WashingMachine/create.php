<?php
require('../conexion.php');

$IdCamion = $_POST["IdCamion"];  
if(isset($_POST["Codigo"])){
 
    for($i = 0; $i<count($_POST["Codigo"]);$i++)
    {    
        $Codigo = $_POST["Codigo"][$i];
        $Marca = $_POST["Marca"][$i];
        $Modelo = $_POST["Modelo"][$i];
        $Valor = $_POST["Valor"][$i];
        $Peso = $_POST["Peso"][$i];
      
    
        echo count($_POST);
        echo $Marca;
        echo $Modelo;
        echo $Valor;
        echo $Peso;
        echo $IdCamion;
    
        $create = "INSERT INTO $washingmachine VALUES ('$Codigo', '$Marca', '$Modelo', $Valor, $Peso, $IdCamion)";
        if ($conexion->query($create)){}
        else echo "ERROR " . $create . "<br>" . $conexion->error;
    }
  
}

Header("Location:../../washingmachine.php?id=". $IdCamion);


?>