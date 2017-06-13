<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesionDocente.php'; 
    if (verificarDocente()==1) {}else{return 0;}
?>

<title>.:: Listar Material</title>
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
                        <li class=""><a href="#">Listar Material</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">USUARIOS REGISTRADOS</h1>
                        <hr class="line-1">

                        <br>

                        <center>

                            <!--Formulario para generar Material -->

                            <form  class="form-group" action="" id="contact_form" method="POST" enctype="multipart/form-data">                            
                                <table>
                                    <tr>
                                        <td>
                                            <div class="alert alert-danger">
                                                <center>Seleccióne las opciones para ver el Material</center>
                                            </div>
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
                                            <center>
                                                <button  type="submit" class="btn btn-success btn-lg">Generar</button> <a href="adminMaterial.php" class="btn btn-danger btn-lg">Regresar</a>
                                            </center>
                                        </td>
                                    </tr>
                                </table>
                            </form>   

                            <!-- Formulario para generar Material-->


                        <?php                             
                                
                            //CONEXIÓN A LA BD
                            include './conectar.php';
                            $bd = conectar();

                            if(isset($_POST['grado']) and isset($_POST['area'])){
                                $grado=$_POST['grado'];
                                $area=$_POST['area'];

                                $sql = "SELECT * FROM material WHERE grado='".$grado."' and area='".$area."'";
                                mysqli_select_db($bd, 'bdiescj');
                                $buscar = mysqli_query($bd, $sql);
                                $num_reg = mysqli_num_rows($buscar);
                                ?>
                                <table class="table table-hover titulo mi-table" style="width:95%"> 
                                <thead>                 
                                    <tr class="header">
                                        <th class="td-th">CÓDIGO</th>
                                        <th class="td-th">TÍTULO</th>
                                        <th class="td-th">GRADO</th>
                                        <th class="td-th">AREA</th>
                                        <th class="td-th">ACCIÓN</th>
                                    </tr>
                                </thead>
                                </table>

                                <div class="contienetabla">
                                    <table class="mi-table">

                                    <?php

                                        for ($i=0; $i < $num_reg; $i++){

                                            $listMaterial = mysqli_fetch_array($buscar);
                                            $idmat= $listMaterial["idmat"];   
                                            $titulo= $listMaterial["titulo"];
                                            $grado= $listMaterial["grado"];
                                            $area= $listMaterial["area"];
                                    ?>           
                                        <tr>
                                            <td class="td-th"><?php echo $idmat;?></td> 
                                            <td class="td-th"><?php echo $titulo;?></td> 
                                            <td class="td-th"><?php echo $grado;?></td> 
                                            <td class="td-th"><?php echo $area;?></td>
                                            <td class="td-th">
                                                <a href="descargarArchivo.php?idmat=<?php echo $listMaterial["idmat"]; ?>"><span class="glyphicon glyphicon-save"></span> Descargar</a>
                                            </td>
                                        </tr>
                                    <?php 
                                    }?>
                                    </table>                                    
                                </div> 
                                <br><h3><a href="index.php" class="royalPurple"><span class="glyphicon glyphicon-chevron-left"></span> Regresar</a></h3>      
                                <?php 
                                    }?>                    
                        </center>
                    </div>
                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
            </section>

            <?php include("aside.html") ?>
        </div>
    </section>  <!-- Finaliza Pagina Principal -->
        
    <?php include("footer.html") ?>   

</body>
</html>