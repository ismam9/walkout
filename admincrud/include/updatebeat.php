
<?php  

session_start();
    /*llamamos al archivo db.php que se encuentra en la carpeta php que contiene la conexion con la base de datos*/
    require_once("../../php/db.php");
    /*guardamos en la variable $tabla el nombre de nuestra tabla*/
	
	$cod = $_POST["cod_b"];
    $name = $_POST["titulo"];
	$genero = $_POST["genero"];
	$precio = $_POST["precio"];
	$type = $_POST["tipo"];
    $prod = $_POST["productor"];

    $file = $_FILES["archivito"]["tmp_name"]; 
    $tamanio = $_FILES["archivito"]["size"];
    $tipo    = $_FILES["archivito"]["type"];
    $nombre  = $_FILES["archivito"]["name"];


	

	$conn = new mysqli($servername, $username, $password, $dbname);
    
    
    $update = "UPDATE beat SET titulo = '$name', genero = '$genero', precio = '$precio', tipo = '$type', producer = '$prod', archivo = '$file' WHERE cod_b = '$cod'";
    /*$borrar = "DELETE FROM usuario WHERE userna ='$user'";
    /*hacemos un if donde diga que si se cumple nuestra variable $borrar vacie todas las sesiones y nos lleve al index*/

    
    if ($conn->query($update)) {

        header ('Location: ../index.php');

    } else{
        
        echo "Error: " . $update . "<br>" . $conn->error;
    }
    


?>