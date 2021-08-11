<?php require('../conexion.php');
session_start();

$Email=$_POST['Email'];
$pass=$_POST['Pass'];

$query="SELECT * FROM $users WHERE Email='$Email'";

if($conexion->query($query)) {
    $row=mysqli_fetch_assoc($conexion->query($query));

    if(password_verify($pass, $row['Pass'])) {
        $_SESSION["Rol"]=$row['Rol'];
        $_SESSION["Id"]=$row['IdUsers'];
        $_SESSION['Email']=$Email;
    }

    if($_SESSION["Rol"]==1) Header("Location:../../dashboard.php");
    else if ($_SESSION["Rol"]==0) Header("Location:../../tabletrucks.php");
    else Header("Location:../../index.php");
}

?>