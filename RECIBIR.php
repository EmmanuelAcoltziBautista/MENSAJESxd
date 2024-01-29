<style type="text/css">
h1{
background:orange;
width:500px;
border:3px solid rgb(0,0,0);
}
.img{
width:15%;
height:15%;
text-aling:right;
font-size:20px;
font-family:Arial,Andale Mono;
color:rgb(0,0,0);
}
.img:hover{
width:13%;
height:13%;
}
a{
text-aling:right;
font-size:20px;
font-family:Arial,Andale Mono;
color:rgb(0,0,0);
text-decoration:none;
}
a:hover{
color:rgb(255,255,255);
text-decoration:underline;
}
body{
background:#ccc;
}
.c{
width:50%;
}
th{
background:rgb(0,103,184);
color:rgb(255,255,255);
}
td{
font-size:20px;
background:#fff;
}
</style>
<body onload="ajax();">
<?php
error_reporting(0);
include("basedatos.php");
if(!empty($_GET["ID"])){
$conexionbd=conectar_bd();
$ID=$_GET["ID"];
$query="SELECT * FROM `MENSAJE` WHERE ID_RECEPTOR=$ID ORDER BY ID_MENSAJE DESC;";
$EXITO=mysql_query($query,$conexionbd);
mysql_close($conexionbd);

?>
<center>
<h1>Mensajes recibidos</h1>
</center>
<a href="ENVIAR.php?ID=<?php echo $ID; ?>"><img src="images/Recibidos.png" class="img">Enviar mensaje</a>
<a href="index.php"><img src="images/cerrar.png" class="img">Cerrar secion</a>
<center>
<br/>
<ul>
<table border="1" class="c">
<tr>
<th>De</th>
<th>Mensaje</th>
</tr>

<?php
while($re=mysql_fetch_assoc($EXITO)){
echo"<tr><td>".$re["id_transmisor"]."</td><td>".$re["MENSAJE"]."</td>";
}
}
?>
</body>
