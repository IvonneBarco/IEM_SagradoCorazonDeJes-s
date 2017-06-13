<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>
<title>.:: Comentarios</title>
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
                        <li class=""><a href="#">Comentarios</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div>               

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">COMENTARIOS</h1>
                        <hr class="line-1">

                        <br>
                        <center><img src="../images/imgComent.png" class="img-responsive img-icono" alt="Img-Comentario"></center>

                        <!-- Incluir Comentarios -->
                            <?php 

                                //CONEXIÓN A LA BD
                                include '../conectar.php';
                                $bd = conectar();
                                // Selecciona la base de datos 
                                if(!mysqli_select_db($bd, "bdiescj")) 
                                die("Error: No existe la base de datos");                             
                                $sql = "SELECT * FROM comentarios ORDER BY ip DESC LIMIT 5"; 
                                  

                                // Ejecuta la sql SQL 
                                $resultado = mysqli_query($bd, $sql); 
                                if(!$resultado) 
                                    die("Error: no se pudo realizar la consulta");                                
                                while($fila = mysqli_fetch_assoc($resultado)) 
                                { 
                                    ?>
                                    <br><br>
                                    <div class="panel panel-success comentario col-xs-6">
                                        <div class="panel-heading" align="right">
                                            <table style="width:100%">
                                              <tr>
                                                <th rowspan="3"><span class="glyphicon glyphicon-user icon-max"></span></th>
                                                <td align="right"><div class="candal"><?php echo $fila['usuario']?></div></td>
                                              </tr>
                                              <tr>
                                                <td align="right"><div class="candal"><?php echo $fila['email']?></div></td>
                                              </tr>
                                            </table>  
                                        </div>
                                        <div class="panel-body"><?php echo $fila['comentario']?></div>
                                    </div>
                                    <br><br>                                 
                                    <?php
                                } 

                                // Libera la memoria del resultado
                                mysqli_free_result($resultado);
                                 
                                // Cierra la conexiÃ³n con la base de datos 
                                mysqli_close($bd); 
                            ?> 
                        <!-- Incluir Comentarios -->

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
            </section>

            <?php include("aside-admin.html") ?>
        </div>
    </section>  <!-- Finaliza Pagina Principal -->
        
    <?php include("footer-admin.html") ?>   

</body>
</html>