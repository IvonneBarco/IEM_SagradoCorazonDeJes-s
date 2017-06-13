<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>

<title>.:: Guardar Docente</title>
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
                        <li class=""><a href="#">Guardar Docente</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">REGISTRO DE DOCENTES</h1>
                        <hr class="line-1">

                        <br>
                        <center>
                            <?php                             
                                
                                //CONEXIÓN A LA BD
                                include '../conectar.php';
                                $bd = conectar();

                                $ide=$_REQUEST["iddocente"];
                                $nom=$_REQUEST["nombre"];
                                $espc=$_REQUEST["especialidad"];
                                $cargo=$_REQUEST["cargo"];
                                $foto=$_FILES["foto"]["name"];
                                $ruta = $_FILES["foto"]["tmp_name"];
                                $nomImg = $_FILES["foto"]["name"];
                                $err = $_FILES["foto"]["error"];

                                $sql = "INSERT INTO docentes VALUES('$ide','$nom','$espc','$cargo','$foto')";
                                
                                $resultado = mysqli_query($bd, $sql);
                                if($resultado){
                                    echo"<h2 class='ok'>Registro guardado con éxito</h2><br>";?>

                                    <table style="width:45%">
                                        <tr>
                                            <th class="brickRed">Identificación: </th>
                                            <td><?php echo $ide; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Nombre: </th>
                                            <td><?php echo $nom; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Especialidad: </th>
                                            <td><?php echo $espc; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Cargo: </th>
                                        <td><?php echo $cargo; ?></td>
                                        </tr>
                                        <tr>
                                            <th class="brickRed">Nombre Imagen: </th>
                                            <td><?php echo $nomImg; ?></td>
                                        </tr>

                                    <?php

                                    if ($err == 0) {
                                        ?>
                                        <tr>
                                            <td colspan="2"><center>El archivo se cargo correctamente</center></td>
                                        </tr>
                                        <?php
                                        move_uploaded_file($ruta, "./uploads/$nomImg");?>

                                        <tr>
                                            <td colspan="2" align="center">
                                                <h3><a href="verDocentes.php" class="royalPurple">Ver Docentes</a> 
                                                <a href="registroDocente.php" class="royalPurple">Regresar</a></h3>
                                            </td>
                                        </tr>
                                    </table>
                                        <?php
                                    }
                                    else{
                                        echo "<br>El archivo no se cargó";                                        
                                    }
                                }
                                else{
                                    echo"<h1 class='bad'>No se guardaron los datos</h1>";  
                                    echo mysqli_error($bd);?>

                                    <br><h3><a href="registroDocente.php" class="royalPurple">Regresar</a></h3><?php
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