<style type="text/css">
body{
background:#ccc;
}
.img{
width:15%;
height:15%;
}
.img:hover{
width:13%;
height:13%;
}
a{
color:rgb(0,0,0);
font-size:20px;
font-family:Arial,Andale Mono;
text-decoration:none;
}
a:hover{
color:rgb(255,255,255);
text-decoration:underline;
}
h1{
width:500px;
background:orange;
border:3px solid rgb(0,0,0);
}
.formulario{
border-radius:10%;
border: 25px solid rgb(255,255,255);
width:500px;
padding:3px;
margin:3px;
}
textarea{
width:300px;
height:300px;
}
label,input,textarea{
font-family:Arial,Andale Mono;
font-size:20px;
}
.btn{
color:rgb(255,255,255);
background:rgb(0,103,184);
border:3px solid rgb(0,103,184);
}
.btn:hover{
text-decoration:underline;
}

.Menu{
width:100%;
height: 20%;
backgrund:rgb(163,149,149);  
}
</style>
<?php
error_reporting(0);
if(!empty($_GET["ID"])){
$ID=$_GET["ID"];
?>
<center>
<div class="Menu">
<h1>Enviar mensaje</h1>


<div/>

</center>
<a href="RECIBIR.php?ID=<?php echo $ID;?>"><img/src="images/Re.png" class="img">Mensajes recibidos</a>
<a href="index.php"><img src="images/cerrar.png" class="img">Cerrar secion</a>
<br/>
<center>
<br/>
<form method="POST" class="formulario">
<label for="PARA">Para:</label>
<input type="text" id="PARA" name="PARA" placeholder="Numero de destinatario:" required>
<br/>
<label for="MENSAJE">Mensaje:</label>
<br/>
<textarea id="MENSAJE" name="MENSAJE" id="MENSAJE" placeholder="Escribe aqui tu mensaje:" required></textarea>
<br/>
<br/>
<input type="submit" id="EN" name="EN" value="Enviar" class="btn">
</form>
<?php
include("basedatos.php");
if(ISSET($_POST["EN"])){
$conexionbd=conectar_bd();
$query="INSERT INTO `ME`.`MENSAJE` (`id_mensaje`,`id_receptor`,`id_transmisor`,`mensaje`) VALUES ('','".$_POST["PARA"]."',$ID,'".$_POST["MENSAJE"]."');";
$exi=mysql_query($query,$conexionbd);
if($exi){
echo"<script>alert('Mensaje enviado con exito');</script>";
}
}

}
?>
