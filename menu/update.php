<?php

include("../conexion.php");
$con=conectar();

$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$matricula=$_POST['matricula'];
$passw=$_POST['passw'];

$sql="UPDATE registro2 SET  nombre='$nombre',matricula='$matricula',passw='$passw' WHERE codigo='$codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: registro2.php");
    }
?>