<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>

<title>.:: Guardar Objetivos</title>
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
                        <li class=""><a href="#">Guardar Objetivos</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">OBJETIVOS</h1>
                        <hr class="line-1">

                        <br>
                        <center>
                            <!-- acción del formuluario -->
                            <?php                             
                                
                                //CONEXIÓN A LA BD
                                include '../conectar.php';
                                $bd = conectar();

                                $titulo=$_POST['titulo'];
                                $texto=$_POST['texto'];
                                $seccion=$_POST['seccion'];
                                $foto=$_FILES["foto"]["name"];
                                $ruta = $_FILES["foto"]["tmp_name"];
                                $nomImg = $_FILES["foto"]["name"];

                                $sql0 = "DELETE FROM pagobjetivos WHERE seccion='".$seccion."'";
                                $sql = "INSERT INTO pagobjetivos VALUES('$titulo','$texto','$seccion','$foto')";
                                
                                $resultado = mysqli_query($bd, $sql0);
                                $resultado = mysqli_query($bd, $sql);
                                if($resultado){
                                    echo"<h2 class='ok'>Registro guardado con éxito</h2><br>";?>

                                    <table style="width:45%">
                                        <tr>
                                            <th class="brickRed">TÍTULO: </th>
                                        </tr>
                                        <tr>
                                            <td><?php echo $titulo; ?><br></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed"><br>TEXTO OBJETIVOS: </th>
                                        </tr>
                                        <tr>
                                            <td class="text-justify"><?php echo $texto; ?><br></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed"><br>NOMBRE IMAGEN: </th>
                                        </tr>
                                        <tr>
                                            <td><?php echo $nomImg; ?></td>
                                        </tr>
                                        <?php
                                        move_uploaded_file($ruta, "./uploads/$nomImg");?>
                                    </table>
                                    <br><h3><a href="adminObjetivos.php" class="royalPurple">Regresar</a></h3>
                                <?php
                                }
                                else{
                                    echo"<h1 class='bad'>No se guardaron los datos</h1>";  
                                    echo mysqli_error($bd);?>

                                    <br><h3><a href="adminObjetivos.php" class="royalPurple"><span class="glyphicon glyphicon-chevron-left"></span> Regresar</a></h3> <?php
                                }
                                mysqli_close($bd);
                            ?> 
                        <!-- acción del formuluario -->                               
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