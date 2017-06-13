
<?php

include'./conectar.php';
$id = $_GET['idmat']; 
//echo "codigo: ".$id;
$qry = "SELECT * FROM material WHERE idmat=$id";
$res = mysqli_query($qry);
if($registro=mysqli_fetch_array($res)){
if($registro['archivo']==""){
echo "No hay archivo";
}
else{
echo "<p>Archivo encontrado</p>";
echo "<iframe src=$registro[archivo] width=800 height=800></iframe>";
}
}
?>
