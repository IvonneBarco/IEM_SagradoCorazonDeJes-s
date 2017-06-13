<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>

<title>.:: Guardar Contacto</title>
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
                        <li class=""><a href="#">Guardar Contacto</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">REGISTRO DE CONTACTO</h1>
                        <hr class="line-1">

                        <br>
                        <center>
                            <?php                             
                                
                                //CONEXIÓN A LA BD
                                include '../conectar.php';
                                $bd = conectar();

                                $identificacion=$_REQUEST['identificacion'];
                                $nombre=$_REQUEST['nombre'];
                                $correo=$_REQUEST['email'];
                                $telefono=$_REQUEST['telefono'];
                                $comentario=$_REQUEST['comentario'];

                                $sql = "INSERT INTO contactos VALUES('$identificacion','$nombre','$correo','$telefono','$comentario')";
                                
                                $resultado = mysqli_query($bd, $sql);
                                if($resultado){
                                    echo"<h2 class='ok'>Registro guardado con éxito</h2><br>";?>

                                    <table style="width:45%">
                                        <tr>
                                            <th class="brickRed">Identificación: </th>
                                            <td><?php echo $identificacion; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Nombre: </th>
                                            <td><?php echo $nombre; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">E-mail: </th>
                                            <td><?php echo $correo; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Télefono: </th>
                                            <td><?php echo $telefono; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Comentario: </th>
                                            <td><?php echo $comentario; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center">
                                                <h3><a href="verContacto.php" class="royalPurple">Ver Contactos</a> 
                                                <a href="registroContacto.php" class="royalPurple">Regresar</a></h3>
                                            </td>
                                        </tr>
                                    </table>
                                <?php
                                }
                                else{
                                    echo"<h1 class='bad'>No se guardaron los datos</h1>";  
                                    echo mysqli_error($bd);?>

                                    <br><h3><a href="registroContacto.php" class="royalPurple">Regresar</a></h3><?php
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