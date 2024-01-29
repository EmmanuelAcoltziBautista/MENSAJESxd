<?php
include("basedatos.php);
if(!empty($_GET["P"]) && !empty($_GET["M"]) && !empty($_GET["id"])){
$conexionbd=conectar_bd();
$qu="INSERT INTO `ME`.`MENSAJE` (`id_mensaje`,`id_receptor`,`id_transmisor`,`MENSAJE`) VALUES 
('0','".$_GET["P"]."',$_GET["id"],'".$_GET["M"]."')";
$exito=mysql_query($qu,$conexionbd);
if($exito){
header('Location:iniciando.php');
}
else{
header('Location:SECION.php');
}
}
?>