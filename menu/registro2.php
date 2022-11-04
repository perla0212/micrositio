<?php 
    include("../conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM registro2";
    $query=mysqli_query($con,$sql);
?>
<?php include("encabezado.php");?>

<div style="margin-left: 30%; margin-right:30%;">
    <form action="insertar.php" method="POST">

        <label for="cod_cliente"><b>Codigo:</b></label><input type="number" class="form-control mb-3" name="codigo">

        <label for="cod_cliente"><b>Nombre:</b></label> <input type="text" class="form-control mb-3" name="nombre">

        <label for="cod_cliente"><b>Correo:</b></label> <input type="email" class="form-control mb-3" name="matricula">

        <label for="cod_cliente"><b>Contraseña:</b></label> <input type="password" class="form-control mb-3" name="passw">

     

        <center><input type="submit" class="btn btn-primary"></center>
    </form> <br><br>


    <div class="container mt-5">
        <div class="row">

                <center>
                    <div class="col-md-8">
                        <table class="table table-dark table-sm">
                            <thead>
                                <tr>
                                    <th>Codigo cliente</th>
                                    <th>Nombres</th>
                                    <th>correo</th>
                                    <th>Contraseña</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                <tr>
                                    <th><?php  echo $row['codigo']?></th>
                                    <th><?php  echo $row['nombre']?></th>
                                    <th><?php  echo $row['matricula']?></th>
                                    <th><?php  echo $row['passw']?></th>
                                    <th><a href="actualizar.php?id=<?php echo $row['codigo'] ?>"
                                            class="btn btn-info">Editar</a>
                                    </th>
                                    <th><a href="delete.php?id=<?php echo $row['codigo'] ?>"
                                            class="btn btn-danger">Eliminar</a>
                                    </th>
                                </tr>
                                <?php 
                                            }
                                        ?>
                            </tbody>
                        </table>
                    </div>
                </center>

            </div>

        </div>
    </div>

</div>
</body>

</html>