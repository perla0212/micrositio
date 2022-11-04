<?php

include("../conexion.php");
$con=conectar();

$codigo2=$_POST['codigo2'];
$nombre=$_POST['nombre'];
$matricula=$_POST['matricula'];
$passw=$_POST['passw'];

$sql="UPDATE hash2 SET  nombre='$nombre',matricula='$matricula',passw='$passw' WHERE codigo2='$codigo2'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: registro3.php");
    }
?>
