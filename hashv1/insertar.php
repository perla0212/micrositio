<?php
include("../conexion.php");
$con=conectar();

$codigo1=$_POST['codigo1'];
$nombre=$_POST['nombre'];
$matricula=$_POST['matricula'];
$passw=$_POST['passw'];

$passw = sha1($passw);

$sql="INSERT INTO hash1 VALUES('$codigo1','$nombre','$matricula','$passw')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: registro4.php");
    
}else {
}
?>