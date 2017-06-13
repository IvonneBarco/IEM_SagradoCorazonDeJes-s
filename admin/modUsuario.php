<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>

<title>.:: Modificación Usuario</title>
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
                        <li class=""><a href="#">Modificación Usuario</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div>               

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">MODIFICACIÓN DE USUARIOS</h1>
                        <hr class="line-1">

                        <br>
                            <?php
                                include '../conectar.php';
                                $bd = conectar();
                                $codusuario = $_GET['codusuario'];
                                $sql = "SELECT * FROM usuario WHERE codusuario='$codusuario'";
                                $res = mysqli_query($bd, $sql);
                                $arr = mysqli_fetch_assoc($res);
                            ?>

                        <!--nuevo formato de formulario-->
                        <center>
                            <img src="../images/2.1.png" class="img-responsive img-icono" alt="Img-Usuario">
                            
                            <form  class="form-group" action="updateUsuario.php" id="contact_form" method="POST" enctype="multipart/form-data">                            
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
                                            <label for="usuario" class="royalPurple">Usuario:</label>
                                            <input type="text" class="form-control size-font-form" value="<?php echo $codusuario; ?>" name="codusuario" title="Campo Obligatorio" required /><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="nombreu" class="royalPurple">Nombre y Apellido:</label>
                                            <input type="text" class="form-control size-font-form" value="<?php echo $arr['nomusuario']; ?>" name="nomusuario" required title="Campo Obligatorio" /><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="clave" class="royalPurple">Constraseña:</label>
                                            <input type="password" class="form-control size-font-form" value="<?php echo $arr['conusuario']; ?>"  name="conusuario" required minlength="8" title="Formato correcto: números, letras máx. 8 caracteres"/><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="email" class="royalPurple">E-mail:</label>
                                            <input type="email" class="form-control size-font-form" value="<?php echo $arr['correousuario']; ?>" name="correousuario" required/><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>
                                                <button  type="submit" class="btn btn-success btn-lg">Registrar</button> 
                                                <a href="editarUsuario.php" class="btn btn-danger btn-lg">Regresar</a>
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