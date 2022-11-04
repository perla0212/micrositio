<?php

include("../conexion.php");
$con=conectar();

$codigo2=$_GET['id'];

$sql="DELETE FROM hash2  WHERE codigo2 ='$codigo2'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: registro3.php");
    }
?>