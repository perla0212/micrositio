<?php

include("../conexion.php");
$con=conectar();

$codigo1=$_POST['codigo1'];
$nombre=$_POST['nombre'];
$matricula=$_POST['matricula'];
$passw=$_POST['passw'];

$sql="UPDATE hash1 SET  nombre='$nombre',matricula='$matricula',passw='$passw' WHERE codigo1='$codigo1'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: registro4.php");
    }
?>
