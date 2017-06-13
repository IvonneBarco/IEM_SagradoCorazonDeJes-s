<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>
<title>.:: Modificar Contacto</title>
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
                        <li class=""><a href="#">Modificar Contacto</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div>               

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">MODIFICACIÓN DE CONTACTOS</h1>
                        <hr class="line-1">

                        <br>
                            <?php
                                include '../conectar.php';
                                $bd = conectar();
                                $idcontactos = $_GET['idcontactos'];
                                $sql = "SELECT * FROM contactos WHERE idcontactos='$idcontactos'";
                                $res = mysqli_query($bd, $sql);
                                $arr = mysqli_fetch_assoc($res);
                            ?>

                        <!--nuevo formato de formulario-->
                        <center>
                            <img src="../images/2.3.png" class="img-responsive img-icono" alt="Img-Contacto">
                            
                            <form  class="form-group" action="updateContacto.php" id="contact_form" method="POST" enctype="multipart/form-data">                            
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
                                            <input type="hidden" class="form-control size-font-form" value="<?php echo $idcontactos; ?>" name="idcontactos" title="Por favor digite solo números" min="0" required /><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="nomestudiante" class="royalPurple">Nombre y Apellido:</label>
                                            <input style="" type="text" class="form-control size-font-form" value="<?php echo $arr['nomcontactos']; ?>" name="nomcontactos" required title="Por favor digite solo letras" /><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="correoestudiante" class="royalPurple">E-mail:</label>
                                            <input type="email" class="form-control size-font-form" value="<?php echo $arr['correocontactos']; ?>" name="correocontactos" required/><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="telestudiante" class="royalPurple">Teléfono:</label>
                                            <input type="phone" class="form-control size-font-form" value="<?php echo $arr['telcontactos']; ?>" name="telcontactos" required title="Campo requerido"/><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="sugerencia">Sugerencia:</label>
                                            <input class="form-control size-font-form" value="<?php echo $arr['sugerencias']; ?>" name="sugerencias" odrequired title="Digite el campo">                                                
                                            </input><br>
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