<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>
<title>.:: Registro Docente</title>
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
                        <li class=""><a href="#">Registro Docente</a></li>
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

                        <!--nuevo formato de formulario-->
                        <center>
                            <img src="../images/imgDoc.png" class="img-responsive img-icono" alt="Img-Docente">
                            
                            <form  class="form-group" action="guardarDocente.php" id="contact_form" method="POST" enctype="multipart/form-data">                            
                                <table>
                                    <tr>
                                        <td>
                                            <div class="alert alert-info">
                                                <strong>Importante!</strong> Todos los campos son obligatorios
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="iddocente" class="royalPurple">Identificación:</label>
                                            <input type="number" class="form-control size-font-form" placeholder="Identificación" name="iddocente" title="Por favor digite solo números" min="0" required /><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name" class="royalPurple">Nombre y Apellido:</label>
                                            <input style="" type="text" class="form-control size-font-form" placeholder="Nombres" name="nombre" required title="Por favor digite solo letras" /><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="name" class="royalPurple">Cargo:</label>
                                            <input type="text" class="form-control size-font-form" placeholder="Cargo" name="cargo" required title="Rector, Docente"/><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="especialidad" class="royalPurple">Especialidad:</label>
                                            <input type="text" class="form-control size-font-form" placeholder="Especialidad" name="especialidad" required title="Area de desempeño" /><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="fotos" class="royalPurple">Fotografía:</label>
                                            <input type="file" class="form-control size-font-form" name="foto" id="foto"><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
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