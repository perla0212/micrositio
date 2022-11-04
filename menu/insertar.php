<?php
include("../conexion.php");
$con=conectar();

$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$matricula=$_POST['matricula'];
$passw=$_POST['passw'];


$sql="INSERT INTO registro2 VALUES('$codigo','$nombre','$matricula','$passw')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: registro2.php");
    
}else {
}
?>