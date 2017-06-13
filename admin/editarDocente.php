<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>

<title>.:: Editar Docentes</title>
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
                        <li class=""><a href="#">Editar Docentes</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">EDICIÓN DE DOCENTES</h1>
                        <hr class="line-1">

                        <br>
                        <center>
                            <?php                             
                                
                                //CONEXIÓN A LA BD
                                include '../conectar.php';
                                $bd = conectar();

                                $sql = "SELECT * FROM docentes";
                                mysqli_select_db($bd, 'bdiescj');
                                $buscar = mysqli_query($bd, $sql);
                                $num_reg = mysqli_num_rows($buscar);
                                ?>
                                <table class="table table-hover titulo mi-table" style="width:95%"> 
                                <thead>                 
                                    <tr class="header">
                                        <th class="td-th">IDENTIFICACIÓN</th>
                                        <th class="td-th">NOMBRES Y APELLIDOS</th>
                                        <th class="td-th">ESPECIALIDAD</th>
                                        <th class="td-th">CARGO</th>
                                        <th class="td-th">FOTOGRAFÍA</th>
                                        <th class="td-th">ACCIÓN</th>
                                    </tr>
                                </thead>
                                </table>

                                <div class="contienetabla">
                                    <table class="mi-table">

                                    <?php

                                        for ($i=0; $i < $num_reg; $i++){
                                            $listDoc = mysqli_fetch_array($buscar);
                                            $iddocente= $listDoc["iddocente"];   
                                            $nomdocente= $listDoc["nomdocente"];
                                            $espedocente= $listDoc["espedocente"];
                                            $cargodocente= $listDoc["cargodocente"];
                                            $foto= $listDoc["foto"];
                                    ?>           
                                        <tr>
                                            <td class="td-th"><?php echo $iddocente;?></td> 
                                            <td class="td-th"><?php echo $nomdocente;?></td> 
                                            <td class="td-th"><?php echo $espedocente;?></td> 
                                            <td class="td-th"><?php echo $cargodocente;?></td>
                                            <?php echo "<td class='td-th'>".'<img src="./uploads/'.$listDoc["foto"].'" style="width: 5em;height: 5em;"><br>'."</td>"; ?>
                                            <td class="td-th"><a href="modDocente.php?iddocente=<?php echo $listDoc["iddocente"]; ?>"><img src="../images/icon-mod-32.png" alt="Modificar" class="img-hover"></a> <a href="deleteDocente.php?iddocente=<?php echo $listDoc["iddocente"]; ?>"><img src="../images/icon-user-delete-32.png" alt="Eliminar" class="img2-hover" title="Eliminar"></a></td>
                                        </tr>
                                    <?php 
                                    }?>
                                    </table>
                                </div> 
                                <br><h3><a href="administracion.php" class="royalPurple"><span class="glyphicon glyphicon-chevron-left"></span> Regresar</a></h3>                          
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