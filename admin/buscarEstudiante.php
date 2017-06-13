<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>

<title>.:: Listar Estudiante</title>
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
                        <li class=""><a href="#">Listar Estudiante</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">ESTUDIANTES</h1>
                        <hr class="line-1">

                        <br>
                        <center>
                            <?php                             
                                
                                //CONEXIÓN A LA BD
                                include '../conectar.php';
                                $bd = conectar();
                                $text=$_POST['buscar'];
                                $sql = "SELECT * FROM estudiante WHERE idestudiante LIKE '%".$text."%' ORDER BY idestudiante";
                                mysqli_select_db($bd, 'bdiescj');
                                $buscar = mysqli_query($bd, $sql);
                                $num_reg = mysqli_num_rows($buscar);
                                if($num_reg!=0){
                                ?>
                                    <table class="table table-hover" style="width:95%"> 
                                        <thead class="table-head-search">                 
                                            <tr>
                                                <th>TIPO</th>
                                                <th>IDENTIFICACIÓN</th>
                                                <th>LUGAR EXPEDICIÓN</th>  
                                                <th>NOMBRE ESTUDIANTE</th>   
                                                <th>DIRECCIÓN</th>                                   
                                                <th>CORREO ELECTRÓNICO</th>
                                                <th>TÉLEFONO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                                for ($i=0; $i < $num_reg; $i++){
                                                    $listStudent = mysqli_fetch_array($buscar);
                                                    $tipodocumento= $listStudent["tipodocumento"];   
                                                    $idestudiante= $listStudent["idestudiante"];
                                                    $lugarexpedicion= $listStudent["lugarexpedicion"];
                                                    $nomestudiante= $listStudent["nomestudiante"];
                                                    $direstudiante= $listStudent["direstudiante"];
                                                    $correoestudiante= $listStudent["correoestudiante"];
                                                    $telestudiante= $listStudent["telestudiante"];
                                            ?>           
                
                                                <tr>
                                                    <td><?php echo $tipodocumento;?></td> 
                                                    <td><?php echo $idestudiante;?></td> 
                                                    <td><?php echo $lugarexpedicion;?></td> 
                                                    <td><?php echo $nomestudiante;?></td>
                                                    <td><?php echo $direstudiante;?></td> 
                                                    <td><?php echo $correoestudiante;?></td> 
                                                    <td><?php echo $telestudiante;?></td>
                                                </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                <?php
                                }else{
                                    echo"<h2 class='bad'>No se han encontrado resultados</h2><br>";
                                }
                                ?>
                                <br><h3><a href="consultarEstudiante.php" class="royalPurple"><span class="glyphicon glyphicon-chevron-left"></span> Regresar<span class="glyphicon glyphicon-chevron-right"></span></a></h3>                          
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