<?php #Rutina para que se verifique si esta iniciado sesión
    include './verificarSesion.php'; 
    if (verificar()==1) {}else{return 0;}
?>

<title>.:: Editar Noticias</title>
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
                        <li class=""><a href="#">Editar Noticias</a></li>
                    </ol>
                </div> <!--Finaliza migas de pan-->   

                <div class="row col-md-12">
                    <p class="active margin-admin"><span class="glyphicon glyphicon-user"></span>Usuario: <b class="limeGreen"><?php echo " ".$_SESSION["usuario"]." ";?></b>
                    <a href="cerrar.php"> | Cerrar Sesión <span class="glyphicon glyphicon-log-in"></span> </a>
                </div> 

                <!-- /*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->

                    <div class="main-container">
                        
                        <br><br>
                        <h1 class="text-center brickRed shadow-brickRed">EDICIÓN DE NOTICIAS</h1>
                        <hr class="line-1">

                        <br>
                        <center>
                            <?php                             
                                
                                //CONEXIÓN A LA BD
                                include '../conectar.php';
                                $bd = conectar();

                                $sql = "SELECT * FROM noticia";
                                mysqli_select_db($bd, 'bdiescj');
                                $buscar = mysqli_query($bd, $sql);
                                $num_reg = mysqli_num_rows($buscar);
                                ?>
                                <table class="table table-hover titulo mi-table" style="width:95%"> 
                                <thead>                 
                                    <tr class="header">
                                        <th class="td-th" style="width: 20%">TÍTULO</th>
                                        <th class="td-th" style="width: 21%">NOTICIA</th>
                                        <th class="td-th" style="width: 11%">ESTADO</th>
                                        <th class="td-th" style="width: 11%">ORDEN</th>
                                        <th class="td-th" style="width: 23%">FOTOGRAFÍA</th>
                                        <th class="td-th">ACCIÓN</th>
                                    </tr>
                                </thead>
                                </table>

                                <div class="contienetabla">
                                    <table class="mi-table">

                                    <?php

                                        for ($i=0; $i < $num_reg; $i++){
                                            $listNews = mysqli_fetch_array($buscar);
                                            $titulo= $listNews["titulo"];   
                                            $descripcion= $listNews["descripcion"];
                                            $estado= $listNews["estado"];
                                            $orden= $listNews["orden"];
                                            $foto= $listNews["imagen"];
                                    ?>           
                                        <tr>
                                            <td class="td-th" style="width: 18%"><?php echo $titulo;?></td> 
                                            <td class="td-th" style="width: 18%"> <?php echo $descripcion;?></td> 
                                            <td class="td-th" style="width: 10%"><?php echo $estado;?></td> 
                                            <td class="td-th" style="width: 10%"><?php echo $orden;?></td>
                                            <?php echo "<td class='td-th' style='width: 20%'>".'<img src="./uploads/'.$listNews["imagen"].'" style="width: 5em;height: 5em;"><br>'."</td>"; ?>
                                            <td class="td-th" style="width:12%">
                                                <a href="modNoticia.php?idnoticia=<?php echo $listNews["idnoticia"]; ?>"><img src="../images/icon-mod-32.png" alt="Modificar" title="Modificar" class="img-hover"></a> <a href="deleteNoticia.php?idnoticia=<?php echo $listNews["idnoticia"]; ?>"><img src="../images/icon-user-delete-32.png" alt="Eliminar" title="Eliminar" class="img2-hover"></a>
                                            </td>
                                        </tr>
                                    <?php 
                                    }?>
                                    </table>
                                </div> 
                                <br><h3><a href="administracion.php" class="royalPurple"><span class="glyphicon glyphicon-chevron-left"></span> Registrar Noticia <span class="glyphicon glyphicon-chevron-right"></span> </a></h3>                          
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