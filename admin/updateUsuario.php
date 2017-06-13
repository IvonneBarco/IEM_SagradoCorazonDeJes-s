<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>

<title>.:: Actualizar Usuario</title>
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
                        <li class=""><a href="#">Actualizar Usuario</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">ACTUALIZACIÓN DE USUARIOS</h1>
                        <hr class="line-1">

                        <br>
                        <center>
                            <?php                             
                                
                                //CONEXIÓN A LA BD
                                include '../conectar.php';
                                $bd = conectar();

                                $codusuario=$_REQUEST['codusuario'];
                                $nomusuario=$_REQUEST['nomusuario'];
                                $conusuario=md5($_REQUEST['conusuario']);
                                $correousuario=$_REQUEST['correousuario'];

                                $sql = "UPDATE usuario SET nomusuario='$nomusuario',conusuario='$conusuario', correousuario='$correousuario' WHERE codusuario='$codusuario'"; 
                                
                                $resultado = mysqli_query($bd, $sql);
                                if($resultado){
                                    echo"<h2 class='ok'>Registro actualizado con éxito</h2><br>";?>

                                    <table style="width:45%">
                                        <tr>
                                            <th class="brickRed">Usuario: </th>
                                            <td><?php echo $codusuario; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Nombre: </th>
                                            <td><?php echo $nomusuario; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">E-mail: </th>
                                            <td><?php echo $correousuario; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Contraseña: </th>
                                        <td><?php echo $conusuario; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center">
                                                <h3><a href="editarUsuario.php" class="royalPurple">Editar Usuarios</a> 
                                                <a href="administracion.php" class="royalPurple">Regresar</a></h3>
                                            </td>
                                        </tr>
                                    </table>
                                <?php
                                }
                                else{
                                    echo"<h1 class='bad'>Error en la actualización</h1>";  
                                    echo mysqli_error($bd);?>

                                    <br><h3><a href="editarUsuario.php" class="royalPurple">Regresar</a></h3><?php
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