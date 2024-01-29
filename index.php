<html>
<head>
<title>Iniciar secion</title>
<style type="text/css">
h1{
background:orange;
border:3px solid rgb(0,0,0);
width:500px;
}
form{
border:3px solid #000000;
width:500px;
}
body{
background:#ccc;
}
.U::placeholder{
background-image:url("images/user.png");
background-size:20%;
background-repeat:no-repeat;
background-position:left center;
}
.P::placeholder{
background-image:url("images/contra.png");
background-size:20%;
background-repeat:no-repeat;
background-position:left center;
}
input{
font-size:20px;
font-family:Arial;
}
.BOTON{
background:rgb(0,103,184);
color:rgb(255,255,255);
font-family:Ink Free,Arial;
border:3px solid rgb(0,103,184);
text-decoration:none;
font-size:20px;
}
.BOTON:hover{
text-decoration:underline;
}
</style>
</head>
<body>
<center>
<h1>Iniciar secion</h1>
<img src="images/ico.png" width="300px" height="200px">
<form method="post" action="Iniciando.php">
<label for="">Ingresa tu numero de usuario</label>
<br/>
<br/>
<input type="number" id="ID" name="ID" class="U" placeholder="          Escribe aqui" required>
<br/>
<br/>
<label for="CONTRASENA">Ingresa la contrasena</label>
<br/>
<br/>
<input type="password" name="CONTRASENA" class="P" id="CONTRASENA" placeholder="          Escribe aqui" required>
<br/><br/>
<input type="submit" value="Ingresar" id="Ingresar" name="Ingresar" class="BOTON">
<br/>
<br/>
</form>
<a href="CREARCUENTA.php" class="BOTON">Crear cuenta</a>
<br/>
<br/>
<footer>
Creado por Emmanuel Acoltzi Bautista ©
</footer>
<!--?php
	if(ISSET($_POST["Ingresar"])){
	include("basedatos.php");
	$conexionbd=conectar_bd();
	$ID;
	$ID=$_POST["ID"];
	$CONTRASENA=$_POST["CONTRASENA"];
	$query="SELECT * FROM `USUARIOS` WHERE id=$ID AND CONTRASENA=$CONTRASENA";
	$resultado=mysql_query($query,$conexionbd);
	mysql_close($conexionbd);


	$registro=mysql_num_rows($resultado);
	if($registro>0){
	header('Location: MENU.php');
	}
	else{
	echo"<script>
	alert('EL usuario o la contrasena es icorrecto');
	</script>";
		}
	
	}

?-->
</body>
</html>
