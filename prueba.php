<?php
include("basedatos.php");
$conexionbd=conectar_bd();
echo $conexionbd;
mysql_close($conexionbd);
?>