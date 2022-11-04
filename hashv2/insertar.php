<?php
include("../conexion.php");
$con=conectar();

$codigo2=$_POST['codigo2'];
$nombre=$_POST['nombre'];
$matricula=$_POST['matricula'];
$passw=$_POST['passw'];

//$passw = sha1($passw);
$passw = hash('sha256', $passw);

$sql="INSERT INTO hash2 VALUES('$codigo2','$nombre','$matricula','$passw')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: registro3.php");
    
}else {
}
?>