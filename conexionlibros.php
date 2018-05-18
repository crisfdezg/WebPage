<html>

<head>
	<title>Consultas a la Base de Datos</title>
</head>

<body bgcolor=#FAFAD2 text=#3CB371>

<?php
$tabla=$_POST['tabla'];
include("datosconexionlibros.php");
try{
	$gd = new PDO($dsn, $usuario, $contrasena);
	$consulta="SELECT titulo FROM $tabla";
	$resultadoConsulta=$gd->prepare($consulta);
	$resultadoConsulta -> execute();
	$numcol=$resultadoConsulta->columnCount();
	$numfil=$resultadoConsulta->rowCount();
	if($numfil==0) 
		{	
			echo "<font size=5>","<b>","ERROR","<br> <br>","</b>","</font>";
			echo "<font size=4>","La tabla esta vacia","<br> <br>","</font>";
		}   
}

catch (PDOException $error)	
	{
		echo 'ERROR:   '. $error->getMessage();
	}

echo"<table border ='4', align='center', cellpadding='5', cellspacing='3'>";
echo"<caption>","<font size=6>","<b>","<i>","Listado de libros"</i>","</b>","<br>","</font>","</caption>";

$primeravez=0; 
foreach($resultadoConsulta as $fila) { 
	if ($primeravez==0) {
		$array = array_keys($fila);
		echo "<tr>"; 
		for($i=0; $i<$numcol*2;$i=$i+2) echo"<th> $array[$i] </th>";	
		echo"</tr>"; 
		$primeravez=1;
	}
	for($i=0; $i<$numcol;$i++)
	echo "<td> $fila[$i] </td>";
	echo "</tr>";
}

include("datosconexionlibros.php");
?>
</body>
</html>