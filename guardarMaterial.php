<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesionDocente.php'; 
    if (verificarDocente()==1) {}else{return 0;}
?>

<title>.:: Guardar Material</title>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!-- Inicia Head -->
    <?php include("navbar.html") ?>
    <!-- Finaliza Head -->
    <section class="main container"> <!-- Inicia Pagina Principal -->       

        <div class="row"> <!-- Inicia contenedor-->         

            <section class="posts col-md-9">  

                <div class="migas-de-pan"> <!--Inicia migas de pan-->               
                    <ol class="breadcrumb" id="miga">
                        <li class="active">Usted está aquí.:::</li>
                        <li class=""><a href="#">Guardar Material</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">MATERIAL</h1>
                        <hr class="line-1">

                        <br>
                        <center>
                            <!-- acción del formuluario -->
                            <?php                             
                                
                                //CONEXIÓN A LA BD
                                include './conectar.php';
                                $bd = conectar();

                                $idmat=$_POST['idmat'];
                                $titulo=$_POST['titulo'];
                                $grado=$_POST['grado'];
                                $area=$_POST['area'];

                                $archivo=$_FILES["archivo"]["name"];
                                $ruta = $_FILES["archivo"]["tmp_name"];
                                $nomFile = $_FILES["archivo"]["name"];

                                $sql = "INSERT INTO material VALUES('$idmat','$titulo','$grado',$area','$archivo')";
                                
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
                                            <th class="brickRed"><br>GRADO: </th>
                                        </tr>
                                        <tr>
                                            <td class="text-justify"><?php echo $grado; ?><br></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed"><br>ÁREA: </th>
                                        </tr>
                                        <tr>
                                            <td class="text-justify"><?php echo $area; ?><br></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed"><br>NOMBRE ARCHIVO: </th>
                                        </tr>
                                        <tr>
                                            <td><?php echo $nomFile; ?></td>
                                        </tr>
                                        <?php
                                        move_uploaded_file($ruta, ".admin/uploads/$nomFile");?>
                                    </table>
                                    <br><h3><a href="adminMaterial.php" class="royalPurple">Regresar</a>  <a href="verMaterial.php" class="royalPurple"><span class="glyphicon glyphicon-chevron-left"></span> Ver Material</a> </h3>
                                <?php
                                }
                                else{
                                    echo"<h1 class='bad'>No se guardaron los datos</h1>";  
                                    echo mysqli_error($bd);?>

                                    <br><h3><a href="adminMaterial.php" class="royalPurple"><span class="glyphicon glyphicon-chevron-left"></span> Regresar</a></h3> <?php
                                }
                                mysqli_close($bd);
                            ?> 
                        <!-- acción del formuluario -->                               
                        </center>
                    </div>
                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
            </section>

            <?php include("aside.html") ?>
        </div>
    </section>  <!-- Finaliza Pagina Principal -->
        
    <?php include("footer.html") ?>   

</body>
</html>