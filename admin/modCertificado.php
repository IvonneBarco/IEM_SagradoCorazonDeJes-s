<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>
<title>.:: Modificar Certificados</title>
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
                        <li class=""><a href="#">Modificar Certificados</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div>               

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">MODIFICACIÓN DE CERTIFICADOS</h1>
                        <hr class="line-1">

                        <br>

                        <?php
                                include '../conectar.php';
                                $bd = conectar();
                                $codcertificado = $_GET['codcertificado'];
                                $sql = "SELECT * FROM certificado WHERE codcertificado='$codcertificado'";
                                $res = mysqli_query($bd, $sql);
                                $resultado = mysqli_fetch_assoc($res);
                            ?>

                        <!--nuevo formato de formulario-->
                        <center>
                            <img src="../images/2.4.png" class="img-responsive img-icono" alt="Img-Certificado">
                            
                            <form  class="form-group" action="updateCertificado.php" id="contact_form" method="POST" enctype="multipart/form-data">                                                           
                                <table>
                                    <tr>
                                        <td>
                                            <div class="alert alert-info">
                                                <strong>Importante!</strong> Modifique lo necesario
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="hidden" name="codcertificado" value="<?php echo $codcertificado;?>">
                                            <label for="numlibro" class="royalPurple">Número del Libro:</label>
                                            <input type="number" class="form-control size-font-form" value="<?php echo $resultado['numlibro'];?>" name="numlibro" title="Por favor digite la información" min="0" required /><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="numfolio" class="royalPurple">Número del Folio:</label>
                                            <input type="number" class="form-control size-font-form" value="<?php echo $resultado['numfolio'];?>" name="numfolio" title="Por favor digite la información" min="0" required /><br>
                                        </td>
                                    </tr>
                                    <td>
                                            <label for="idestudiante" class="royalPurple">Identificación:</label>
                                            <input style="" type="number" class="form-control size-font-form" value="<?php echo $resultado['idestudiante'] ;?>" name="idestudiante" required title="Por favor digite solo letras" /><br>
                                        </td>
                                    <tr>
                                        <td>
                                            <label for="fecha" class="royalPurple">Fecha:</label>
                                            <input style="" type="date" class="form-control size-font-form" value="<?php echo $resultado['fecha'] ;?>" name="fecha" required title="Campo Requerido" /><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="iddocente" class="royalPurple">Identificación Docente:</label>
                                            <input type="text" name="iddocente" class="form-control size-font-form" required title="Campo Requerido" value="<?php echo $resultado['iddocente'] ;?>"> 
                                        </td>
                                    </tr>                                  
                                    <tr>
                                        <td><br>
                                            <center>
                                                <button  type="submit" class="btn btn-success btn-lg">Registrar</button> 
                                                <button class="btn btn-danger btn-lg" type="reset">Limpiar</button>
                                            </center>
                                        </td>
                                    </tr>
                                </table>
                            </form>                        
                        <!--hasta aqui el nuevo formato-->
                    </div>
                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
            </section>

            <?php include("aside-admin.html") ?>
        </div>
    </section>  <!-- Finaliza Pagina Principal -->
        
    <?php include("footer-admin.html") ?>   

</body>
</html>