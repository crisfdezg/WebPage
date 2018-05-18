<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	

<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.25" />
   <title>Formulario de ingreso de libros</title>
   
</head>

<body>


<h1> ¿Preparado para iniciarte en bookcrossing? </h1>
<div style=" width: 1000px;" >
<!--<form method="post"  action="http://138.100.77.110/equipo5/procesaform_libro.php" target="_blank"> -->

<!--<form method="post" action="http://localhost/bookcrossing/procesaform_libro.php" target="_blank"> -->

<!-- <form method="post" action="cadena2.php"> -->

<form enctype="multipart/form-data" action="subirlibro.php" method="post">  <!-- quien va a gestionar el archivo -->

<fieldset style="border:6px groove #ccc;">
<legend><font size=4><b> Datos para un nuevo libro</b></font></legend>

<div>
<label style="width:25%;float:left;" for="tit"> T&iacute;tulo:</label>
<input type="text" name="tit" id="tit" size="25"  />
</div>

<div>
<label style="width:25%;float:left;" for="aut"> Autor:</label>
<input type="text" name="aut" id="aut" size="30"  />
</div>

<div>
<label style="width:25%;float:left;" for="anho"> A&ntilde;o:</label>
<input type="number" min="1450" max="2020" name="anho" id="anho" size="5" />
</div>

<div>
<label style="width:25%;float:left;" for="ext"> Extensi&oacute;n:</label>
<input type="number" name="ext" id="ext" size="10" />
</div><br/>

G&eacute;nero:
<br/>
<input type="radio" name="gen" value="dra" /> Drama
<input type="radio" name="gen" value="com"/> Comedia
<input type="radio" name="gen" value="mis" /> Misterio
<input type="radio" name="gen" value="fan"/> Fantas&iacute;a
<input type="radio" name="gen" value="rom" /> Romance
<input type="radio" name="gen" value="au"/> Autoayuda
<input type="radio" name="gen" value="via"/> Viajes
<input type="radio" name="gen" value="gas"/> Gastronom&iacute;a
<input type="radio" name="gen" value="gas"/> Histórico
<input type="radio" name="gen" value="gas"/> Biogr&aacute;fico
<br/><br/>


¿Parte de una serie?:
<br/>
<input type="radio" name="tri" value="si" /> Si
<input type="radio" name="tri" value="no"/> No
<br/><br/>


<p> Sinopsis: </p>
<textarea name="sinops" id="sinops" rows="6" cols="60" >
Introduzca aqui la sinopsis
</textarea>
<p>

<input type="hidden" name="MAX_FILE_SIZE" value="1000000"> <!-- tamaño máximo que se puede subir en bytes -->
<p>Archivo del libro(PDF)<br>  
<input type="file" name="archivo" size="35"></p>  
</p>
<p>
Incluye una foto de la portada:
</p>
<p>
<input type="file" name="portada" size="50" />

</fieldset>
<br/><br />
<input type="hidden" name="estadoformulario" value="enviado" />
</p>

<input type="image" src="imagenes/enviar.jpg" name="imagen" style="width="50px"; height="50px"; "/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="reset" name="res" value="borra">
<img src="imagenes/bola.gif" alt="bola" />
Borrar todo
</button>

</form>
</body>
</html>