<html>
<head>
<title>Crear cuenta</title>
<style type="text/css">
body{
background:#ccc;
}
h1{
background:orange;
width:500px;
border:3px solid rgb(0,0,0);
}
form{
width:500px;
border:3px solid rgb(0,0,0);
font-family:Arial,Andale Mono;
font-size:20px;
margin:1px;
padding:1px;
}
input{
font-family:Arial,Andale Mono;
font-size:20px;
}
.btn{
background:rgb(0,103,184);
border:3px solid rgb(0,103,184);
color:rgb(255,255,255);
}
.btn:hover{
text-decoration:underline;
}
a{
background:rgb(0,103,184);
border:3px solid rgb(0,103,184);
color:rgb(255,255,255);
font-size:20px;
font-family:Arial,Andale Mono;
text-decoration:none;
}
a:hover{
text-decoration:underline;
}
</style>
</head>
<body>
<a href="index.php">Regresar</a>
<center>
<h1>Crear cuenta</h1>
<br/>
<form method="post" action="">
<input type="hidden" name="ID" id="ID">
<label for="NOMBRE">Ingresa tu nombre:</label>
<br/>
<br/>
<input type="text" id="NOMBRE" name="NOMBRE" placeholder="Escibe aqui" required>
<br/>
<br/>
<label for="CORREO">Ingresa tu correo:</label>
<BR/>
<BR>
<input type="email" id="CORREO" name="CORREO" placeholder="Escribe aqui" required>
<br/>
<br/>
<label for="CONTRASENA">Crea una contrasena</label>
<br/>
<br/>
<input type="password" id="CONTRASENA" name="CONTRASENA" placeholder="Escribe aqui" required>
<br/><br/>
<label for="CONTRASENA2">Vuelve a escribir la contrasena</label>
<br/>
<br/>
<input type="password" id="CONTRASENA2" name="CONTRASENA2" placeholder="Escribe aqui" required>
<br/>
<br/>
<input type="submit" value="Crear cuenta" id="Crear" name="Crear" class="btn">
</form>
<br/><br/>

<footer>
Creado por Emmanuel Acoltzi Bautista
</footer>
<?php
	global $NOMBRE;
	global $r;
	if(ISSET($_POST['Crear'])){
	$NOMBRE=$_POST["NOMBRE"];
	$CORREO=$_POST["CORREO"];
	$id=$_POST["ID"];
	$CONTRASENA1=$_POST["CONTRASENA"];
	$CONTRASENA2=$_POST["CONTRASENA2"];
	if($CONTRASENA1==$CONTRASENA2){
	include("basedatos.php");
	$conexionbd=conectar_bd();
	$query="INSERT INTO `ME`.`USUARIOS`(`id`,`NOMBRE`,`CORREO`,`CONTRASENA`) VALUES ('".$_POST["ID"]."','".$_POST["NOMBRE"]."','".$_POST["CORREO"]."','".$_POST["CONTRASENA"]."')";
	$exito=mysql_query($query,$conexionbd);
	$ultimoid=mysql_insert_id($conexionbd);
	if($exito){
	echo"<script>
	alert('Tu cuenta se creo correctamente '+
	' Su numero de usuario es: '+$ultimoid);
	</script>";
	}
	else{
	echo"insercion incorrecto";
	}
	}
	else{
	echo"incorrecto";
	}
	}

?>
</body>
</html>
