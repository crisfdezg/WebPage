<html>
<head>
  <title>Opini&oacute;n</title>
</head>
<link rel="stylesheet" href="inicio.css">
<body>
<img src="imagenes/banner1.jpg" style="display:block; margin-left:auto; margin-right:auto; width="872px"/>
<!-- Men&uacute; de navegaci&oacute;n del sitio -->
<div id="principal">
<ul id="navbar">

<li><a href="inicio.php">Inicio</a></li>
<li><a href="">Libros</a></li>
<li><a href="recomendaciones.php">Recomendaciones</a></li>
<li><a href="noticias.php">Noticias</a></li>
<li><a href="autores.php">Zona autores</a></li>
<li><a href="opinion.php">Opini&oacute;n</a></li>
<li><a href="registro.php">Registro</a></li>
<li><a href="contacto.php">Contacto</a></li>

</ul>
<br></br><br></br>

<!-- Contenido principal -->
<div id="cuerpo">
<p class="parrafo">
<fieldset style="border:6px ridge #003312; border-width: thick;">
<legend text align="center"><font size=5 ><b>Cons&uacute;ltanos tus dudas y cu&eacute;ntanos tu opini&oacute;n</b></font></legend>

<!-- Hace falta un servidor que permita e-mail -->

<?php
if (!isset($_POST['email'])) {
?>
  <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    <label >
		*Valore siendo 1:Nada satisfactorio y 5:Totalmente satisfactorio
    </label>
	<br></br>
    <label>
     &iquest;C&oacute;mo fue su experiencia en general?
	  <br>
		<input type="radio" name="exp" value="1" /> 1
		<input type="radio" name="exp" value="2"/> 2
		<input type="radio" name="exp" value="3" /> 3
		<input type="radio" name="exp" value="4"/> 4
		<input type="radio" name="exp" value="5"/> 5
    </label>
	<br></br>
    <label >
     &iquest;Ha encontrado esta web de utilidad?
	 <br/>
		<input type="radio" name="util" value="1" /> 1
		<input type="radio" name="util" value="2"/> 2
		<input type="radio" name="util" value="3" /> 3
		<input type="radio" name="util" value="4"/> 4
		<input type="radio" name="util" value="5"/> 5
    </label>
	<br></br>
    <label>
      &iquest;Volver&iacute;a a visitar nuestra web?
	  <br/>
		<input type="radio" name="val" value="si" /> Si
		<input type="radio" name="val" value="no"/> No
    </label>
		<br></br>
    <label>
      &iquest;Qu&eacute; te ha parecido la variedad?
		<br/>
		<input type="radio" name="var" value="1" /> 1
		<input type="radio" name="var" value="2"/> 2
		<input type="radio" name="var" value="3" /> 3
		<input type="radio" name="var" value="4"/> 4
		<input type="radio" name="var" value="5"/> 5
    </label>
	<br></br>
    <label>
	&iquest;Nos recomendar&iacute;a a sus amigos?
	<br/>
		<input type="radio" name="val" value="si" /> Si
		<input type="radio" name="val" value="no"/> No
    </label>
		<br></br>
    <label>
	<p> &iquest;C&oacute;mo nos ha conocido? </p>
		<textarea name="conoc" id="conoz" rows="4" cols="40" >
		</textarea>
    </label>
		<br></br>
    <label>
	&iquest;Has echado algo en falta?
	<br/>
		<input type="radio" name="fal" value="si" /> Si
		<input type="radio" name="fal" value="no"/> No
    </label>
		<br>
    <label>
	<p> Cu&eacute;ntanoslo: </p>
		<textarea name="conoc" id="conoz" rows="4" cols="40" >
		</textarea>
    </label>
	
</fieldset>	
	
	<br></br><br></br>
    <input type="reset" value="Borrar" />
    <input type="submit" value="Enviar" />
  </form>
<?php
}else{
  $mensaje="Mensaje del formulario de opinion de LoveBookCrossing";
  $mensaje.= "\nNombre: ". $_POST['nombre'];
  $mensaje.= "\nEmail: ".$_POST['email'];
  $mensaje.= "\nTelefono: ". $_POST['telefono'];
  $mensaje.= "\nMensaje: \n".$_POST['mensaje'];
  $destino= "correo@direccion.com";
  $remitente = $_POST['email'];
  $asunto = "Mensaje enviado por: ".$_POST['nombre'];
  mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>
  <p><strong>Mensaje enviado.</strong></p>
<?php
}
?>
</p>
<!-- Firma y fecha de la p&aacute;gina, ¡s&oacute;lo por cortes&iacute;a! -->
<address style="text-align:right;margin-right:10px;">Creado en 2015</br>
</address>
</div>
</div>
</body>
</html>