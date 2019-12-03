
<?php  

session_start();
    /*llamamos al archivo db.php que se encuentra en la carpeta php que contiene la conexion con la base de datos*/
    require_once("../../php/db.php");
    /*guardamos en la variable $tabla el nombre de nuestra tabla*/
	
	$cod = $_POST["cod"];
    $name = $_POST["name"];
	$edad = $_POST["age"];
	$email = $_POST["email"];

	$telefono = $_POST["telef"];
	

	$conn = new mysqli($servername, $username, $password, $dbname);
    
    
    $update = "UPDATE user SET name = '$name', email_u = '$email', edad = '$edad', telef = '$telefono' WHERE cod_user = '$cod'";
    /*$borrar = "DELETE FROM usuario WHERE userna ='$user'";
    /*hacemos un if donde diga que si se cumple nuestra variable $borrar vacie todas las sesiones y nos lleve al index*/

    
    if ($conn->query($update)) {

        header ('Location: ../index.php');

    } else{
        
        echo "Error: " . $insert . "<br>" . $conn->error;
    }
    


?>