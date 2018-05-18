<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	

<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.25" />
   <title>Formularios ingreso a bookcrossing</title>
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
<!---<form method="post"  action="http://138.100.77.110/equipo5/procesaform_usuario.php" target="_blank"> -->

<!--<form method="post" action="http://localhost/bookcrossing/procesaform_usuario.php" target="_blank"> -->

<form method="post" action="procesaform_usuario.php" target="_blank">

<fieldset style="border:6px groove #ccc;">
<legend><font size=4><b> Datos necesarios para el  ingreso </b></font></legend>



<div>
<label style="width:25%;float:left;" for="ident"> Nombre y Apellidos:</label>
<input type="text" name="ident" id="ident" size="40"  />
</div>

<div>
<label style="width:25%;float:left;" for="correo"> Correo electr&oacute;nico:</label>
<input type="text" name="correo" id="correo" size="30" />
</div>

<div>
<label style="width:25%;float:left;" for="idu"> Id usuario:</label>
<input type="text" name="idu" id="idu" size="40"  />
</div>

<div>
<label style="width:25%;float:left;" for="clave"> Contrase&ntilde;a:</label>
<input type="password" name="clave" id="clave" size="10" />
</div><br/>

¿Autor?:
<br/>
<input type="radio" name="aut" value="si" /> Si
<input type="radio" name="aut" value="no"/> No
<br/><br/>



Fecha de alta:
<br/>
<input type="date" name="f_alta" step="1" min="2015-01-01" max="2018-12-31" value="<?php echo date('Y-m-d');?>" />



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