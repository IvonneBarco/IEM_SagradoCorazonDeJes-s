<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>
<title>.:: Administración de Comentarios</title>
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
                        <li class=""><a href="#">Administración de Comentarios</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div>               

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">ADMINISTRACIÓN DE COMENTARIOS</h1>
                        <hr class="line-1">

                        <br>

                        <!-- Incluir Comentarios -->
                        <?php
                            include '../conectar.php';
                            $bd = conectar();

                            $sql = "SELECT MAX(ip) AS id FROM comentarios";
                            mysqli_select_db($bd, 'bdiescj');
                            $buscar = mysqli_query($bd, $sql);
                                if ($row = mysqli_fetch_row($buscar)) {
                                $id = trim(($row[0])+1);
                            }
                            #echo "num: ".$id;
                        ?>

                        <!-- Incluir Comentarios -->

                        <!--nuevo formato de formulario-->
                        <center>
                            <img src="../images/imgComent.png" class="img-responsive img-icono" alt="Img-Comentario"><br>
                            
                            <form  class="form-group" id="contact_form" method="POST" action="guardarComentario.php" enctype="multipart/form-data">
                           
                                <table>
                                    <tr>
                                        <td>
                                            <div class="alert alert-success">
                                                <strong><center><a href="verComentarios.php" target="_blank"><span class="glyphicon glyphicon-eye-open"></span> Ver comentarios realizados a nuestra Web</a></center></strong>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input-group col-xs-12">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pushpin"></i></span>
                                                <input id="ip" type="text" class="form-control size-font-form" readonly value="<?php echo $id; ?>" name="ip" placeholder="00<?php echo $id; ?>">
                                            </div><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input-group col-xs-12">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input id="usuario" type="text" class="form-control size-font-form" name="usuario" placeholder="Usuario">
                                            </div><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="input-group col-xs-12">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                <input id="email" type="text" class="form-control size-font-form" name="email" placeholder="E-mail">
                                            </div><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="comentario" class="royalPurple">Comentario:</label>
                                            <textarea class="form-control size-font-form" placeholder="Introduzca la información a publicar" name="comentario" cols="29" rows="6" required title="Digite el campo">                                                
                                            </textarea><br>
                                        </td>
                                    </tr>                                                                        
                                    <tr>
                                        <td>
                                            <center>
                                                <button  type="submit" class="btn btn-success btn-lg">Enviar</button> 
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