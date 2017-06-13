<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesionDocente.php'; 
    if (verificarDocente()==1) {}else{return 0;}
?>

<title>.:: Material</title>
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
                        <li class=""><a href="#">Material</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div>               

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">CARGAR MATERIAL EDUCATIVO</h1>
                        <hr class="line-1">

                        <br>

                        <?php
                            include './conectar.php';
                            $bd = conectar();

                            $sql = "SELECT MAX(ip) AS id FROM comentarios";
                            mysqli_select_db($bd, 'bdiescj');
                            $buscar = mysqli_query($bd, $sql);
                                if ($row = mysqli_fetch_row($buscar)) {
                                $id = trim(($row[0])+1);
                            }
                            #echo "num: ".$id;
                        ?>


                        <!--nuevo formato de formulario-->
                        <center>
                            
                            <form  class="form-group" action="guardarMaterial.php" id="contact_form" method="POST" enctype="multipart/form-data">                            
                                <table>
                                    <tr>
                                        <td>
                                            <div class="alert alert-danger">
                                                <center><strong>Importante!</strong> Todos los campos son obligatorios</center>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="titulo" class="brickRed">Título:</label>
                                            <input type="text" class="form-control size-font-form" placeholder="Título" name="titulo" title="Campo Obligatorio" required />
                                            <input type="hidden" class="form-control size-font-form" value="<?php echo "000".$id; ?>" placeholder="Título" name="idmat" title="Campo Obligatorio" required /><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="grado" class="brickRed">Grado:</label>
                                            <select class="form-control size-font-form" name="grado">
                                                <option value="6">Sexto</option>
                                                <option value="7">Séptimo</option>
                                                <option value="8">Octavo</option>
                                                <option value="9">Noveno</option>
                                                <option value="10">Décimo</option>
                                                <option value="11">Once</option>
                                            </select><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="area" class="brickRed">Área:</label>
                                            <select class="form-control size-font-form" name="area">
                                                <option value="Ciencias naturales y educación ambiental">Ciencias naturales y educación ambiental</option>
                                                <option value="Ciencias sociales, historia, geografía, constitución política y democracia">Ciencias sociales, historia, geografía, constitución política y democracia</option>
                                                <option value="Educación Artística">Educación Artística</option>
                                                <option value="Educación ética y en valores humanos">Educación ética y en valores humanos</option>
                                                <option value="Educación física, recreación y deportes">Educación física, recreación y deportes</option>
                                                <option value="Educación religiosa">Educación religiosa</option>
                                                <option value="Humanidades, lengua castellana e idiomas extranjeros">Humanidades, lengua castellana e idiomas extranjeros</option>
                                                <option value="Matemáticas">Matemáticas</option>
                                                <option value="Tecnología e informática">Tecnología e informática</option>
                                            </select><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="file" class="brickRed">Documento(pdf):</label>
                                            <input type="file" class="form-control size-font-form" name="archivo" id="archivo"><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <center>
                                                <button  type="submit" class="btn btn-warning btn-lg">Cargar Material</button> 
                                                <a href="index.php" class="btn btn-danger btn-lg" type="reset">Regresar</a>
                                            </center>
                                        </td>
                                    </tr>
                                </table>
                            </form>                        
                        <!--hasta aqui el nuevo formato-->                        
                        

                    </div>
                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
            </section>

            <?php include("aside.html") ?>
        </div>
    </section>  <!-- Finaliza Pagina Principal -->
        
    <?php include("footer.html") ?>   

</body>
</html>