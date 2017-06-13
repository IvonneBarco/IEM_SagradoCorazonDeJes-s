<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>
<title>.:: Modificar Noticia</title>
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
                        <li class=""><a href="#">Modificar Noticia</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div>               

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">MODIFICACIÓN DE NOTICIAS</h1>
                        <hr class="line-1">

                        <br>
                            <?php
                                include '../conectar.php';
                                $bd = conectar();
                                $idnoticia = $_GET['idnoticia'];
                                $sql = "SELECT * FROM noticia WHERE idnoticia='$idnoticia'";
                                $res = mysqli_query($bd, $sql);
                                $resultado = mysqli_fetch_assoc($res);
                            ?>

                        <!--nuevo formato de formulario-->
                        <center>
                            <img src="../images/2.7.png" class="img-responsive img-icono" alt="Img-Noticia">
                            
                            <form  class="form-group" id="contact_form" method="POST" action="updateNoticia.php" enctype="multipart/form-data">
                           
                                <table>
                                    <tr>
                                        <td>
                                            <div class="alert alert-info">
                                                <strong>Importante!</strong> Modifique los datos necesarios
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="hidden" name="idnoticia" value="<?php echo $idnoticia;?>">
                                            <label for="titulo" class="royalPurple">Título:</label>
                                            <input type="text" class="form-control size-font-form" value="<?php echo $resultado['titulo'];?>" name="titulo" title="Digite el campo" required /><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="noticia" class="royalPurple">Descripción:</label>
                                            <input class="form-control size-font-form" value="<?php echo $resultado['descripcion'];?>" name="descripcion" cols="29" rows="6" required title="Digite el campo"><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="fotos" class="royalPurple">Imágen:</label>
                                            <input type="file" class="form-control size-font-form" name="foto" id="foto" value="<?php echo $resultado['imagen'];?>"><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="estado" class="royalPurple">Estado:</label>
                                            <select name="estado" class="form-control size-font-form"> 
                                                <option value="Activa">Activa</option>
                                                <option value="Desactivada">Desactivada</option>              
                                            </select><br>                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="orden" class="royalPurple">Orden:</label>
                                            <input type="number" class="form-control size-font-form" value="<?php echo $resultado['orden'];?>" min="1" name="orden" required title="Digite números por favor"/><br>
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