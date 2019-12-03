<?php  

require_once("../../php/db.php");


$pista = $_FILES["pistita"]["tmp_name"]; 
$tamanio = $_FILES["pistita"]["size"];
$tipo    = $_FILES["pistita"]["type"];
$nombre  = $_FILES["pistita"]["name"];

$cod_b = $_POST["beat"];



$conn = new mysqli($servername, $username, $password, $dbname);

if ( $pista != "none" )
	{

	$fp = fopen($pista, "rb");
	$contenido = fread($fp, $tamanio);
	$contenido = addslashes($contenido);
	fclose($fp); 

	print "hola";
	
	$qry = "INSERT INTO pistas(cod_b, archivo_p) VALUES (\"$cod_b\", \"$pista\")";

	print "huola";

	
	if ($conn->query($qry) === TRUE) {

		header ('Location: ../index.php');

	}else{

		echo ("Error creating table: " . $conn->error);
	}

	
}else{

	print "No se ha podido subir el archivo al servidor";
}


?>