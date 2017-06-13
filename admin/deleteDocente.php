<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>

<title>.:: Eliminar Docentes</title>
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
                        <li class=""><a href="#">Eliminar Docentes</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">ELIMINACIÓN DE DOCENTES</h1>
                        <hr class="line-1">

                        <br>
                            <?php
                                include '../conectar.php';
                                $bd = conectar();
                                $iddocente = $_GET['iddocente'];
                                $sql = "DELETE FROM docentes WHERE iddocente='$iddocente'";
                                $res = mysqli_query($bd, $sql);

                                if($res){?>
                                    <center>
                                        <img src="../images/imgDoc-delete.png" class="img-responsive img-icono" alt="Img-Docente-Eliminado">                                 
                                    </center> 
                                <?php echo"<h2 class='ok'>Registro eliminado de forma correcta</h2><br>";
                                }else{
                                    echo"<h1 class='bad'>Error en la eliminación</h1>";  
                                    echo mysqli_error($bd);                                
                                }
                            ?>
                            <h3 align="center"><a href="editarContacto.php" class="royalPurple">Regresar</a></h3>
                    </div>
                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
            </section>

            <?php include("aside-admin.html") ?>
        </div>
    </section>  <!-- Finaliza Pagina Principal -->
        
    <?php include("footer-admin.html") ?>   

</body>
</html>