<?php
function conectar_bd(){
$servidor="localhost";
$BaseDeDatos="ME";
$usuario="root";
$contrasena="";
$conexion=mysql_connect($servidor,$usuario,$contrasena);
mysql_select_db($BaseDeDatos,$conexion);
return $conexion;
}
?>