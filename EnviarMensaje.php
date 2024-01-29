<?php
include("basedatos.php");
$c=conectar_bd();
if(!empty($_POST["PARA"]) && !empty($_POST["MENSAJES"])){
$querys="INSERT INTO `ME`.`MENSAJE` (`ID_MENSAJE`,`ID_RECEPTOR`,`ID_TRANSMISOR`,`MENSAJE`) VALUES ('','".$_POST["PARA"]."','1','".$_POST["MENSAJES"]."')";
$E=mysql_query($querys,$c);
if($E){
header("Location: iniciando.php");
}
}
?>