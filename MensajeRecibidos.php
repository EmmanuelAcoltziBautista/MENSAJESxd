<html>
<head>
<title>Mensajes recibidos</title>
<style type="text/css">
</style>
</head>
<body>
<h1>Mensajes Recibidos</h1><h1></h1>
<?php
include("basedatos.php");
//include("Iniciando.php");
$conexionbd=conectar_bd();
$IdUsuario=$ID;
$query="SELECT * FROM `MENSAJE` WHERE id_receptor=$IdUsuario";
$resultado=mysql_query($query,$conexionbd);
mysql_close($conexionbd);


?>
<table border="1">
<tr>
<th>De</th>
<th>Mensaje</th>
</tr>
<ul>
<?php
while($registro=mysql_fetch_assoc($resultado)){
echo"<tr><td>".$registro["id_transmisor"]."</td><td>".$registro["MENSAJE"]."</td>";
}
?>
</body>
</html>