<?php

function conectar() {
    $bd = mysqli_connect("localhost", "root", "", "bdiescj");
    if (!$bd) {
        echo "<h3>Conexión fallida</h3>";
        echo mysqli_error($bd);
        return NULL;
    }
    return $bd;
}
?>

<?php
$conexion = mysqli_connect("localhost", "root","");
mysqli_select_db($conexion, "bdiescj");

?>



