<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	

<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.25" />
   <title>Formulario de ingreso de libros</title>
   <style type="text/css">
   .texto {
	width:25%;
	float:left;
    }
   </style>
   
</head>

<body bgcolor=#48D1CC text=#000080>


<h1> ¿Preparado para iniciarte en bookcrossing? </h1>
<div style=" width: 1000px;" >
<!--<form method="post"  action="http://138.100.77.110/equipo5/procesaform_libro.php" target="_blank"> -->

<!--<form method="post" action="http://localhost/bookcrossing/procesaform_libro.php" target="_blank"> -->

<form method="post" action="procesaform_libro.php" target="_blank">

<fieldset style="border:6px groove #ccc;">
<legend><font size=4><b> Datos para un nuevo libro</b></font></legend>


<div>
<label style="width:25%;float:left;" for="idl"> Id libro:</label>
<input type="text" name="idl" id="idl" size="20"  />
</div>

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


¿Trilog&iacute;a?:
<br/>
<input type="radio" name="tri" value="si" /> Si
<input type="radio" name="tri" value="no"/> No
<br/><br/>

<div>
<label style="width:25%;float:left;" for="stock"> Stock:</label>
<input type="number" size="5" min="0" name="stock" id="stock"  />
</div>

<p> Sinopsis: </p>
<textarea name="sinops" id="sinops" rows="6" cols="60" >
Introduzca aqui la sinopsis
</textarea>

<p>
Incluye una foto de la portada:
</p>
<p>
<input type="file" name="portada" size="50" />

</fieldset>
<br/><br />
<input type="hidden" name="estadoformulario" value="enviado" />
</p>

<input type="image" src="enviar.jpg" name="imagen" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="reset" name="res" value="borra">
<img src="bola.gif" alt="bola" />
Borrar todo
</button>

</form>
</body>
</html>