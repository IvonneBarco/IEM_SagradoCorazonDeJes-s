<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>

<title>.:: Listar Estudiantes</title>
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
                        <li class=""><a href="#">Listar Estudiantes</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">ESTUDIANTES REGISTRADOS</h1>
                        <hr class="line-1">

                        <br>
                        <center>
                        <img src="../images/4.2.png" class="img-responsive img-icono" alt="Img-Estudiante">
                            <?php                             
                                
                                //CONEXIÓN A LA BD
                                include '../conectar.php';
                                $bd = conectar();

                                $sql = "SELECT * FROM estudiante";
                                mysqli_select_db($bd, 'bdiescj');
                                $buscar = mysqli_query($bd, $sql);
                                $num_reg = mysqli_num_rows($buscar);
                                ?>
                                <table class="table table-hover titulo mi-table table-responsive" style="width:95%"> 
                                <thead>                 
                                    <tr class="header">
                                        <th class="td-th" style="width: 7%">TIPO</th>
                                        <th class="td-th" style="width: 13%">DOCUMENTO</th>
                                        <th class="td-th" style="width: 12%">EXPEDICIÓN</th>
                                        <th class="td-th" style="width: 15%">NOMBRES</th>
                                        <th class="td-th" style="width: 12%">DIRECCIÓN</th>
                                        <th class="td-th" style="width: 18%">E-MAIL</th>
                                        <th class="td-th">TELÉFONO</th>
                                        <th class="td-th" style="width: 12%">ESTADO</th>
                                    </tr>
                                </thead>
                                </table>

                                <div class="contienetabla">
                                    <table class="mi-table table-responsive">

                                    <?php

                                        for ($i=0; $i < $num_reg; $i++){
                                            $listUser = mysqli_fetch_array($buscar);
                                            $tipodocumento= $listUser["tipodocumento"];   
                                            $idestudiante= $listUser["idestudiante"];
                                            $lugarexpedicion= $listUser["lugarexpedicion"];
                                            $nomestudiante= $listUser["nomestudiante"];
                                            $direstudiante= $listUser["direstudiante"];   
                                            $correoestudiante= $listUser["correoestudiante"];
                                            $telestudiante= $listUser["telestudiante"];
                                            $estado= $listUser["estado"];

                                    ?>           
                                        <tr>
                                            <td class="td-th" style="width: 7%"><?php echo $tipodocumento;?></td> 
                                            <td class="td-th" style="width: 13%"><?php echo $idestudiante;?></td> 
                                            <td class="td-th" style="width: 12%"><?php echo $lugarexpedicion;?></td> 
                                            <td class="td-th" style="width: 15%"><?php echo $nomestudiante;?></td>
                                            <td class="td-th" style="width: 12%"><?php echo $direstudiante;?></td> 
                                            <td class="td-th" style="width: 18%"><?php echo $correoestudiante;?></td> 
                                            <td class="td-th"><?php echo $telestudiante;?></td> 
                                            <td class="td-th" style="width: 12%"><?php echo $estado;?></td>
                                        </tr>
                                    <?php 
                                    }?>
                                    </table>
                                </div> 
                                <br><h3><a href="registroEstudiante.php" class="royalPurple"><span class="glyphicon glyphicon-chevron-left"></span> Regresar</a></h3>                          
                        </center>
                    </div>
                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
            </section>

            <?php include("aside-admin.html") ?>
        </div>
    </section>  <!-- Finaliza Pagina Principal -->
        
    <?php include("footer-admin.html") ?>   

</body>
</html>