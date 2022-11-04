<?php

include("../conexion.php");
$con=conectar();

$codigo=$_GET['id'];

$sql="DELETE FROM registro2 WHERE codigo='$codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: registro2.php");
    }
?>
