 <?php 

session_start();

require_once("../../php/db.php");


$archivo = $_FILES["archivito"]["tmp_name"]; 
$tamanio = $_FILES["archivito"]["size"];
$tipo    = $_FILES["archivito"]["type"];
$nombre  = $_FILES["archivito"]["name"];

$titulo  = $_POST["titulo"];
$genero = $_POST["genero"];
$precio = $_POST["precio"];
$tipo = $_POST["tipo"];
$productor = $_POST["productor"];

echo "hola";


$conn = new mysqli($servername, $username, $password, $dbname);


if ( $archivo != "none" )
	{

	$fp = fopen($archivo, "rb");
	$contenido = fread($fp, $tamanio);
	$contenido = addslashes($contenido);
	fclose($fp); 

	print "hola";
	
	$qry = "INSERT INTO beat(titulo, genero, precio, tipo, producer, archivo) VALUES (\"$titulo\", \"$genero\", $precio, \"$tipo\",\"$productor\",\"$archivo\")";

	print "huola";

	
	if ($conn->query($qry) === TRUE) {   
		header ('Location: ../index.php');
	}else{

		echo "Error: " . $insert . "<br>" . $conn->error;
	}

	
  	}else{

    	print "No se ha podido subir el archivo al servidor";
	}
?>