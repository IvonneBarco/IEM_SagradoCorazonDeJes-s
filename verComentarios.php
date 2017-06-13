<title>.:: Comentarios</title>
<!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!-- Inicia Head -->
    <?php include("navbar.html") ?>
    <!-- Finaliza Head -->

    
    <section class="main container"> <!-- Inicia Pagina Principal -->       

        <div class="row"> <!-- Inicia contenedor-->         

            <section class="posts col-md-9">                
                <div class="migas-de-pan"> <!--Inicia migas de pan-->               
                    <ol class="breadcrumb" id="miga">
                        <li class="active">Usted está aquí.:::</li>
                        <li><a href="index.php">Comentarios</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan--> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
                     <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">COMENTARIOS</h1>
                        <hr class="line-1">

                        <br>

                        <!-- Incluir Comentarios -->
                            <?php 

                                //CONEXIÓN A LA BD
                                include './conectar.php';
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
                        </div>

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
                
            </section>

            <?php include("aside.html") ?>
        </div>
    </section>  <!-- Finaliza Pagina Principal -->

        
    <?php include("footer.html") ?> 
</body>
</html>