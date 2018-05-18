<html>
<head>
<title>Intro</title>
<link rel="stylesheet" href="intro.css">
</head>
<body>



<img src="imagenes/welcome.jpg"  style="display:block; margin-left:auto; margin-right:auto;"width="234px" height="111px"/>
<div id="principal">
<p class="parrafo">Bienvenido LoveBookCrossing, la p&aacute;gina web donde encontrar&aacute;s todo tipo de informaci&oacuten sobre las &uacuteltimas publicaciones y podr&aacutes ponerte en contacto
directo con autores y escritores. T&Uacute; tambien puedes ser parte de la comunidad y compartir tu contenido con miles de personas. Antes de empezar identifiquese como usuario registrado, cree una cuenta o entre como invitado</p>
<br></br>

<form action=" " method="post"> <!-- Falta direccionarlo -->
<fieldset>
<legend> Ya estoy registrado </legend>
<div id="interior">
<div>
<label style="width:20%;float:left;" for="ident1"> Usuario: </label>
<input type="text" name="usuario" id="usuario" size="20" />
</div>
<div>
<label style="width:20%;float:left;" for="ident1"> Contrase&ntilde;a: </label>
<input type="password" name="contrasena" id="contrasena" size="20" />
</div>
</br>
<div style="position:relative;left: 7em;">
<input name="enviar" type="submit" value="Entrar !" />
</div>
</div>
</fieldset>
</form>


<form action=" " method="post"> <!-- Falta direccionarlo -->
<fieldset>
<legend> Soy nuevo </legend>
<div id="interior">
<div>
<label style="width:20%;float:left;" for="ident1"> Usuario: </label>
<input type="text" name="nombre" id="nombre" size="20" />
</div>
<div>
<label style="width:20%;float:left;" for="ident2"> Nombre: </label>
<input type="text" name="nombre" id="nombre" size="20" />
</div>
<div>
<label style="width:20%;float:left;" for="ident3"> Apellido: </label>
<input type="text" name="apellido" id="apellido" size="20" />
</div>
<div>
<label style="width:20%;float:left;" for="ident4"> E-mail </label>
<input type="text" name="email" id="email" size="20" />
</div>
<div>
<label style="width:20%;float:left;" for="ident5"> Contrase&ntilde;a: </label>
<input type="password" name="contrasena1" id="contrasena1" size="20" />
</div>
<div>
<label style="width:20%;float:left;" for="ident6"> Repetir contrase&ntilde;a: </label>
<input type="text" name="contrasena2" id="contrasena2" size="20" />
</div>
</br>
<div style="position:relative;left: 7em;">
<input name="enviar" type="submit" value="Registrarse !" />
</div>
</div>
</fieldset>
</form>

<p style="position:absolute;left:40em;top:40em;">Entrar como lector  <a href="inicio.php">AQU&Iacute</a></p>

</div>
</body>
</html>