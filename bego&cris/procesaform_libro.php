<html>

<head>
	<title>Procesa formulario e inserta datos</title>
</head>

<body bgcolor=#FFE2FF text=#520029>
<h1> Se ha registrado como usuario con los siguientes datos </h1>

<?php
	$idl=$_POST['idl']; 
	$tit=$_POST['tit'];
	$aut=$_POST['aut']; 
	$anho=$_POST['anho']; 
	$ext=$_POST['ext'];
	$gen=$_POST['gen'];
	$portada=$_POST['portada'];
	$sinops=$_POST['sinops'];	
	$tri=$_POST['tri'];
	$stock=$_POST['stock'];
	
	
	
	//Primero voy a mostrar por pantalla los valores del registro de usuario
	foreach($_POST as $clave => $valor){
			echo $clave, "=>", $valor, "<br>", "<br>" ;
	}
	
	//A continuacion voy a insertar los valores en la tabla usuario
	include("datosconexion.php");
	try {
	$gd = new PDO($dsn, $usuario, $contrasena);
	}
	catch (PDOException $e){
		echo 'Fallo de conexion: ' . $e->getMessage();
	}

	$consulta="INSERT INTO `libros`(`id_libro`, `titulo`, `autor`, `genero`, `año`, `extensión`, `imagen_portada`, `descripcion`, `trilogia`, `stock`)
	VALUES (:idl, :tit, :aut, :gen, :anho, :ext, :portada, :sinops, :tri, :stock)";
	$resultadoConsulta=$gd->prepare($consulta);
	$resultadoConsulta->bindParam(':idl', $idl);
	$resultadoConsulta->bindParam(':tit', $tit);	
	$resultadoConsulta->bindParam(':aut', $aut);
	$resultadoConsulta->bindParam(':anho', $anho);
	$resultadoConsulta->bindParam(':ext', $ext);
	$resultadoConsulta->bindParam(':gen', $gen);
	$resultadoConsulta->bindParam(':portada', $portada);	
	$resultadoConsulta->bindParam(':sinops', $sinops);	
	$resultadoConsulta->bindParam(':tri', $tri);
	$resultadoConsulta->bindParam(':stock', $stock);	
	$resultadoConsulta -> execute();
	
	
	
?>
<br/> <br/>
</body>
</html>