<?php   

require_once("../../php/db.php");

session_start();

$conn = new mysqli($servername, $username, $password, $dbname);


$cod_b = $_POST["codigo"];

$querys = "SELECT beat FROM publicacion p, beat b WHERE p.beat = $cod_b AND b.cod_b = $cod_b";

$consult = $conn->query($querys);
$row = $consult->fetch_assoc();

if($row['beat'] != $cod_b){

	$consulta = "SELECT cod_p, cod_b, archivo 
				FROM producer p,beat b WHERE p.cod_p = b.producer";

	$resultado = $conn->query($consulta);
		

	if($resultado->num_rows >= 0){
		
	    while($row = $resultado->fetch_assoc()){
	    
	    $value = $row['cod_p'];


	    /*if ($row['cod_b'] == $cod_b) {
	    	$value2 = $row['archivo'];
	    }*/

	    }
	    $publi = true;

		$qry = "INSERT INTO publicacion(beat, prod, publicado) VALUES (\"$cod_b\", \"$value\", \"$publi\")";

		if ($conn->query($qry) === TRUE) {

			echo "Ya se ha publicado";
		}else{

			echo ("No se ha podio publicar el beat: " . $conn->error);
		}

	    /*header ('Location: ../index.php');*/
	}

}elseif($row['beat'] == $cod_b){

	
		$query = "DELETE FROM publicacion WHERE beat = '$cod_b' ";

		if ($conn->query($query) === TRUE) {

			echo "Quitado de la publicacion";
		}else{

			echo ("Error eliminando publicacion: " . $conn->error);
		}

}











/*
$qry = "INSERT INTO publicacion(cod_b, archivo_p) VALUES (\"$cod_b\", \"$pista\")";
/**
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

?>