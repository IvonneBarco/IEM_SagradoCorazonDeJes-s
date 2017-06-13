<?php require_once 'conectar.php';
		   $bd = conectar();
$sql = "SELECT * FROM noticia WHERE noticia.estado ='Activa' ORDER BY noticia.orden";
$resultado = mysqli_query($bd,$sql) or die(mysqli_error($bd));
$row = mysqli_fetch_assoc($resultado);
$totalRows= mysqli_num_rows($resultado);
?>
   
		<!-- Inicio body slider -->
		  <!-- inicio de estilos slider-->
	<link rel="stylesheet" href="slider/css/mi-estilo-1.css">
	<!--<link rel="stylesheet" href="slider/css/estilomenu.css">	-->
	<link rel="stylesheet" href="slider/css/fonts.css">

	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<?php do { ?>
		<li><a href="MostrarNoticias.php"><img src="./admin/uploads/<?php echo $row['imagen']; ?>" alt="<?php echo $row['titulo']; ?>" title="<?php echo $row['titulo']; ?>" id="wows1_0" width="960" height="380"/></a></li>
		<!--li><img src="data1/images/2.jpg" alt="2" title="2" id="wows1_1"/></li-->
		<?php }while ($row = mysqli_fetch_assoc($resultado));  ?>
	</ul></div>
	<div class="ws_bullets"><div>
		<?php do { ?>
		<a href="#" title="<?php echo $row['titulo']; ?>"><span><img src="<?php echo $row['imagen']; ?>" alt="<?php echo $row['titulo']; ?>"/><?php echo $row['idnoticia']; ?></span></a>
		<!--a href="#" title="2"><span><img src="data1/tooltips/2.jpg" alt="2"/>2</span></a-->
		<?php }while ($row = mysqli_fetch_assoc($resultado));?>
		
	</div></div>

	<div class="ws_script" style="position:absolute;left:-99%"></div>
	<div class="ws_shadow"></div>
		
	</div>	