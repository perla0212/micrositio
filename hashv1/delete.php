<?php

include("../conexion.php");
$con=conectar();

$codigo1=$_GET['id'];

$sql="DELETE FROM hash1  WHERE codigo1='$codigo1'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: registro4.php");
    }
?>
