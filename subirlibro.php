<?php
echo "Nombre original:   " , $_FILES['archivo']['name'] , "<br>";
echo "Tipo de archivo:   ", $_FILES['archivo']['type'] , "<br>";
echo "Tama&ntilde;o en bytes:   ", $_FILES['archivo']['size'] , "<br>";
echo "Nombre temporal:   ", $_FILES['archivo']['tmp_name'] , "<br>";
echo "Error:    ", $_FILES['archivo']['error'] , "<br>";
$a=time(); /*Devuelve el momento actual medido como el número de segundos desde la Época Unix (1 de Enero de 1970 00:00:00 GMT) */
$nuevo_nombre= "$a"."_".$_FILES['archivo']['name']; /* El punto concatena cadenas en php*/
echo "Nuevo nombre asignado:    " , $nuevo_nombre ;
echo "</br>";

/*código de comprobación de errores*/
if (( $_FILES['archivo']['size'] !=0 ) && (strcmp($_FILES['archivo']['name'],"")!=0)){
	if($_FILES['archivo']['error']==0){
		move_uploaded_file( $_FILES['archivo']['tmp_name'],"Libros_pdf/".$nuevo_nombre );} /*El archivo temporal se debe mover a la carpeta que deseeamos o se borrara*/
	else {echo "No se ha podido mover el archivo";}
}
elseif (( $_FILES['archivo']['size'] == 0 ) && (strcmp($_FILES['archivo']['name'],"")!=0)){ echo "Tama&ntilde;o de archivo superado";}
		else {echo "No ha escogido archivo";}
echo"</br>";
?>
<p>Subido con &eacute;xito.</p> 
<p><a href="inicio.php">Volver atr&aacute;s</a></p>


