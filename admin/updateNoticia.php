<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>

<title>.:: Actualizar Noticia</title>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!-- Inicia Head -->
    <?php include("navbar-admin.html") ?>
    <!-- Finaliza Head -->
    <section class="main container"> <!-- Inicia Pagina Principal -->       

        <div class="row"> <!-- Inicia contenedor-->         

            <section class="posts col-md-9">  

                <div class="migas-de-pan"> <!--Inicia migas de pan-->               
                    <ol class="breadcrumb" id="miga">
                        <li class="active">Usted está aquí.:::</li>
                        <li class=""><a href="#">Actualizar Noticia</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">ACTUALIZACIÓN DE NOTICIAS</h1>
                        <hr class="line-1">

                        <br>
                        <center>
                            <?php                             
                                
                                //CONEXIÓN A LA BD
                                include '../conectar.php';
                                $bd = conectar();

                                $idnoticia=$_POST['idnoticia'];
                                $titulo=$_POST['titulo'];
                                $descripcion=$_POST['descripcion'];
                                $estado=$_POST['estado'];
                                $orden=$_POST['orden'];
                                $imagen=$_FILES["foto"]["name"];
                                $ruta = $_FILES["foto"]["tmp_name"];
                                $nomImg = $_FILES["foto"]["name"];
                                $err = $_FILES["foto"]["error"];


                                $sql = "UPDATE noticia SET titulo='$titulo',descripcion='$descripcion', estado='$estado', orden='$orden', imagen='$imagen' WHERE idnoticia='$idnoticia'";
                                
                                $resultado = mysqli_query($bd, $sql);
                                if($resultado){
                                    echo"<h2 class='ok'>Registro actualizado con éxito</h2><br>";?>

                                    <table style="width:45%">
                                        <tr>
                                            <th class="brickRed">Título: </th>
                                            <td><?php echo $titulo; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Noticia: </th>
                                            <td><?php echo $descripcion; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Estado: </th>
                                            <td><?php echo $estado; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Orden: </th>
                                            <td><?php echo $orden; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Nombre Imagen: </th>
                                            <td><?php echo $nomImg; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center">
                                                <h3><a href="editarNoticias.php" class="royalPurple">Editar Noticia</a> 
                                                <a href="administracion.php" class="royalPurple">Regresar</a></h3>
                                            </td>
                                        </tr>
                                    </table>
                                        <?php
                                        move_uploaded_file($ruta, "./uploads/$nomImg");
                                }
                                else{
                                    echo"<h1 class='bad'>Error al actualizar</h1>";  
                                    echo mysqli_error($bd);?>

                                    <br><h3><a href="administracion.php" class="royalPurple">Regresar</a></h3><?php
                                }
                                mysqli_close($bd);
                            ?>                                
                        </center>
                    </div>
                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
            </section>

            <?php include("aside-admin.html") ?>
        </div>
    </section>  <!-- Finaliza Pagina Principal -->
        
    <?php include("footer-admin.html") ?>   

</body>
</html>