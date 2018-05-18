<html>

<head>
	<title>Procesa formulario e inserta datos</title>
</head>

<body bgcolor=#FFE2FF text=#520029>
<h1> Se ha registrado como usuario con los siguientes datos </h1>

<?php
	$ident=$_POST['ident']; 
	$correo=$_POST['correo'];

	$clave=$_POST['clave']; 
	$aut=$_POST['aut'];

	
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
	$consulta="INSERT INTO `usuario`(id_usuario, nombre,  password, email, autor) 
	VALUES (NULL, :ident, , :clave, :correo, :aut)";
	$resultadoConsulta=$gd->prepare($consulta);
	$resultadoConsulta->bindParam(':ident', $ident);

	$resultadoConsulta->bindParam(':clave', $clave);
	$resultadoConsulta->bindParam(':correo', $correo);
	$resultadoConsulta->bindParam(':aut', $aut);
	$resultadoConsulta -> execute();
	
	
	
?>
<br/> <br/>
</body>
</html>