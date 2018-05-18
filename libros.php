<html>
<head>
  <title>Inicio</title>
</head>
<link rel="stylesheet" href="inicio.css">
<body>
<img src="imagenes/banner1.jpg" style="display:block; margin-left:auto; margin-right:auto; width="872px"/>
<!-- Men&uacute; de navegaci&oacute;n del sitio -->

<div id="principal">
<ul id="navbar">

<li><a href="inicio.php">Inicio</a></li>
<li><a href="libros.php">Libros</a></li>
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
<body>
<form method="post" action="conexionlibros.php">

<p> &iquest;Quiere visualizar todos los libros? </p>
<select name="tabla" >
<option> libros </option>
</select>
<br>
<p>
Mostrar los libros con paginas mayor o igual a 
<input type="text" name="min1" >
</p>
<p>
Mostrar los libros que datan de la fecha en el intervalo  [
<input type="text" name="min2" >
]  y  [
<input type="text" name="max2" >  ]
</p>


<input type="submit" value="Hacer click para enviar" >
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="Borrar todos los datos">
</div>
<!-- Firma y fecha de la p&aacute;gina, ¡s&oacute;lo por cortes&iacute;a! -->
<address style="text-align:right;margin-right:10px;">Creado en 2015</br>
</address>
</div>
</body>
</html>