<?php 

session_start();
    /*llamamos al archivo db.php que se encuentra en la carpeta php que contiene la conexion con la base de datos*/
    require_once ("../../php/db.php");
    /*guardamos en la variable $tabla el nombre de nuestra tabla*/
    
    /*capturamos el email que ha introducido el usuario y lo guardamos en la variable $correo*/

    $user = $_POST['deleteu'];
    /*
    $password = $_POST['password'];
    */
    /*creamos una variable que borre toda la fila donde el correo coincida*/
    
    $borrar = "DELETE FROM user WHERE cod_user ='$user'";

    /*$borrar = "DELETE FROM usuario WHERE userna ='$user'";
    /*hacemos un if donde diga que si se cumple nuestra variable $borrar vacie todas las sesiones y nos lleve al index*/

    
    if ($conn->query($borrar)) {

        header ('Location: ../index.php');

    } else{
        
        echo "Error: " . $insert . "<br>" . $conn->error;
    }

?>