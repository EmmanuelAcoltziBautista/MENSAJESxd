<?php
error_reporting(0);
include("basedatos.php");

?>
<?php
	if(!empty($_POST["ID"]) && !empty($_POST["CONTRASENA"])){
	$conexionbd=conectar_bd();
	$ID;
	$ID=$_POST["ID"];
	$CONTRASENA=$_POST["CONTRASENA"];
	$query="SELECT * FROM `USUARIOS` WHERE id='".$ID."' AND CONTRASENA='".$CONTRASENA."'";
	$resultado=mysql_query($query,$conexionbd);


	$registro=mysql_num_rows($resultado);
	if($registro>0){
	mysql_close($conexionbd);
	?>
<html>
<head>
<title>Mensajes recibidos</title>
<style type="text/css">
.A{
display:inline-block;
margin:20px;
padding:20px;
}
.B{
display:inline-block;
margin:20px;
padding:20px;
}
.c{
display:inline-block;
width:50%;
}
a{
/*display:inline-block;
*/
text-decoration:none;
font-family:Ink Free,Arial;
font-size:20px;
color:rgb(0,0,0);
}
a:hover{
color:rgb(0,0,255);
text-decoration:underline;
}
body{
background:#ccc;
}
h1{
display:inline-block;
background:orange;
border:3px solid rgb(0,0,0);
}
.cerrar1{
background:rgb(0,103,184);
border:3px solid rgb(0,103,184);
color:rgb(255,255,255);
font-family:Ink Free,Arial;
font-size:20px;
}
.cerrar1:hover{
text-decoration:underline;
color:#ffffff;
}




.modal{
width:100%;
height:100%;
display:flex;
justify-content:center;
aling-items:center;
}
.modal{
position:fixed;
top:0;
left:0;
background:rgba(0,0,0,0.5);
transition:all 500ms ease;
opacity:0;
visibility:hidden;
}
#btn-modal:checked ~ .modal{
opacity:1;
visibility:visible;
}
.contenedor{
width:400px;
height:400px;
margin:auto;
background:#fff;
box-shadow:1px 7px 25px rgba(0,0,0,0.6);
transition:all 500ms ease;
position:relative;
transform:translateY(-30%);
}
#btn-modal:checked ~ .modal .contenedor{
opacity:1;
visibility:visible;
}
.contenedor header{
padding:10px;
background:#db8046;
color:#fff;
}
.contenedor .cerrar{
position:absolute;
top:10px;
right:10px;
font-size:15px;
cursor:pointer;
color:#fff;
}
#btn-modal{
display:none;
}
.lbl-modal{
background:rgb(0,103,184);
padding:10px 15px;
border-radius:4px;
color:#fff;
cursor:pointer;
height:20px;
text-decoration:none;
}
.lbl-modal:hover{
text-decoration:underline;
color:rgb(255,255,255);
}
textarea{
max-width:300px;
min-width:300px;
max-height:200px;
min-height:200px;
}
.img{
width:40%;
height:40%;
}
.img:hover{
width:35%;
height:35%;
}
</style>
</head>
<body>
<a href="index.php" class="cerrar1">Cerrar secion</a>
<center>

<?php
$cone=conectar_bd();
$q="SELECT * FROM `USUARIOS` WHERE ID=$ID;";
$re=mysql_query($q,$cone);
mysql_close($cone);
?>
<?php
$r=mysql_fetch_assoc($re);
$nombre=$r["NOMBRE"];
?>
<h1 class="A">Bienvenido <?php echo $nombre;?></h1>
<br/>
<a href="RECIBIR.php?ID=<?php echo $ID;?>"><img src="images/Re.png" class="img">Recibir</a>
<a href="ENVIAR.php?ID=<?php echo $ID;?>"><img src="images/Recibidos.png" class="img">Enviar mensaje</a>












<!--h1 class="A">Mensajes Recibidos</h1>
<br/>









<input type="checkbox" id="btn-modal">
<label for="btn-modal" class="lbl-modal">Enviar mensaje</label>
<div class="modal">
<div class="contenedor">
<header>Enviar mensaje</header>
<label for="btn-modal" class="cerrar"><b>X</b></label>
<div class="contenido">
<br/>
<div class="container">
<form method="POST" action="">
<label for="PARA">Para:</label>
<input type="text" id="PARA" name="PARA" placeholder="Escribe aqui:" required>
<br/><br/>
<label for="MENSAJES">Mensaje:</label>
<br/><textarea id="MENSAJES" name="MENSAJES" placeholder="Escribe aqui:" required></textarea>
<br/><br/>
<input type="submit" id="ENVIAR" name="ENVIAR" class="cerrar1">
</form>
</div>
</div>
</div>
</div>
<?php
if(ISSET($_POST["ENVIAR"])){
	$c=conectar_bd();
	$querys="INSERT INTO `ME`.`MENSAJE` (`ID_MENSAJE`,`ID_RECEPTOR`,`ID_TRANSMISOR`,`MENSAJE`) VALUES ('','".$_POST["PARA"]."','2','".$_POST["MENSAJES"]."')";
	$E=mysql_query($querys,$c);
}
?>

<table border="1" class="c">
<tr>
<th>De</th>
<th>Mensaje</th>
</tr>

<?php
$conex=conectar_bd();
$quer="SELECT * FROM `MENSAJE` WHERE id_receptor=1 order by id_mensaje desc";
$resultado=mysql_query($quer,$conex);

?>
<?php
while($registro=mysql_fetch_assoc($resultado)){
echo"<tr><td>".$registro["id_transmisor"]."</td><td>".$registro["MENSAJE"]."</td>";
}
?>
</table-->
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<footer>
Creado por Emmanuel Acoltzi Bautista
</footer>
</body>
</html>
	<?php
	}
	else{
	echo"<script>	alert('EL usuario o la contrasena es icorrecto');</script>";
	}
	
	}
?>
