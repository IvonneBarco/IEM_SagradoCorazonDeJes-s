<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>

<title>.:: Actualizar Certificado</title>
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
                        <li class=""><a href="#">Actualizar Certificado</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">ACTUALIZACIÓN DE CERTIFICADOS</h1>
                        <hr class="line-1">

                        <br>
                        <center>
                            <?php                             
                                
                                //CONEXIÓN A LA BD
                                include '../conectar.php';
                                $bd = conectar();

                                $codcertificado=$_POST['codcertificado'];
                                $numlibro=$_REQUEST['numlibro'];
                                $numfolio=$_REQUEST['numfolio'];
                                $idestudiante=$_REQUEST['idestudiante'];
                                $fecha=$_REQUEST['fecha'];
                                $iddocente=$_REQUEST['iddocente'];

                                $sql = "UPDATE certificado SET numlibro='$numlibro',numfolio='$numfolio', idestudiante='$idestudiante', fecha='$fecha', iddocente='$iddocente' WHERE codcertificado='$codcertificado'";
                                
                                $resultado = mysqli_query($bd, $sql);
                                if($resultado){
                                    echo"<h2 class='ok'>Registro actualizado con éxito</h2><br>";?>

                                    <table style="width:45%">
                                        <tr>
                                            <th class="brickRed">N° Libro: </th>
                                            <td><?php echo $numlibro; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">N° Folio: </th>
                                            <td><?php echo $numfolio; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Identificación Estudiante: </th>
                                        <td><?php echo $idestudiante; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center">
                                                <h3><a href="editarCertificados.php" class="royalPurple">Editar Certificado</a> 
                                                <a href="editar.php" class="royalPurple">Regresar</a></h3>
                                            </td>
                                        </tr>
                                    </table>
                                <?php
                                }
                                else{
                                    echo"<h1 class='bad'>Error al actualizar</h1>";  
                                    echo mysqli_error($bd);?>

                                    <br><h3><a href="registroCertificados.php" class="royalPurple">Regresar</a></h3><?php
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