<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>

<title>.:: Actualizar Estudiante</title>
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
                        <li class=""><a href="#">Actualizar Estudiante</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">ACTUALIZACIÓN DE ESTUDIANTES</h1>
                        <hr class="line-1">

                        <br>
                        <center>
                            <?php                             
                                
                                //CONEXIÓN A LA BD
                                include '../conectar.php';
                                $bd = conectar();

                                $idestudiante=$_POST['idestudiante'];
                                $tipodocumento=$_POST['tipodocumento'];
                                $lugarexpedicion=$_POST['lugarexpedicion'];
                                $nomestudiante=$_POST['nomestudiante'];
                                $direstudiante=$_POST['direstudiante'];
                                $correoestudiante=$_POST['correoestudiante'];
                                $telestudiante=$_POST['telestudiante'];
                                $estado=$_POST['estado'];

                                $sql = "UPDATE estudiante SET tipodocumento='$tipodocumento',lugarexpedicion='$lugarexpedicion', nomestudiante='$nomestudiante', direstudiante='$direstudiante',correoestudiante='$correoestudiante', telestudiante='$telestudiante', estado='$estado' WHERE idestudiante='$idestudiante'"; 
                                
                                $resultado = mysqli_query($bd, $sql);
                                if($resultado){
                                    echo"<h2 class='ok'>Registro actualizado con éxito</h2><br>";?>

                                    <table style="width:45%">
                                        <tr>
                                            <th class="brickRed">Tipo: </th>
                                            <td><?php echo $tipodocumento; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Identificación: </th>
                                            <td><?php echo $idestudiante; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Lugar expedición: </th>
                                            <td><?php echo $lugarexpedicion; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Nombre: </th>
                                            <td><?php echo $nomestudiante; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Dirección: </th>
                                            <td><?php echo $direstudiante; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">E-mail: </th>
                                            <td><?php echo $correoestudiante; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Télefono: </th>
                                            <td><?php echo $telestudiante; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Estado: </th>
                                        <td><?php echo $estado; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center">
                                                <h3><a href="editarEstudiante.php" class="royalPurple">Editar Estudiantes</a> 
                                                <a href="editar.php" class="royalPurple">Regresar</a></h3>
                                            </td>
                                        </tr>
                                    </table>
                                <?php
                                }
                                else{
                                    echo"<h1 class='bad'>Error al actualizar</h1>";  
                                    echo mysqli_error($bd);?>

                                    <br><h3><a href="editarEstudiante.php" class="royalPurple">Regresar</a></h3><?php
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