<?php 

session_start();
    /*llamamos al archivo db.php que se encuentra en la carpeta php que contiene la conexion con la base de datos*/
    require_once ("../../php/db.php");
    /*guardamos en la variable $tabla el nombre de nuestra tabla*/
    
    /*capturamos el email que ha introducido el usuario y lo guardamos en la variable $correo*/

    $beat = $_POST['deleteb'];
    /*
    $password = $_POST['password'];
    */
    /*creamos una variable que borre toda la fila donde el correo coincida*/
    
    $borrar = "DELETE FROM beat WHERE cod_b ='$beat'";
    $borrarp = "DELETE beat, pistas
                FROM beat
                INNER JOIN pistas ON beat.cod_b = pistas.cod_pista
                WHERE beat.cod_b ='$beat' AND  pistas.cod_b ='$beat'"; 
    /*$borrar = "DELETE FROM usuario WHERE userna ='$user'";
    /*hacemos un if donde diga que si se cumple nuestra variable $borrar vacie todas las sesiones y nos lleve al index*/

    
    if ($conn->query($borrar) === true) {

        header ('Location: ../index.php');

    }elseif ($conn->query($borrarp)) {
        header ('Location: ../index.php');
    }

    else{
        
        echo "Error: " . $insert . "<br>" . $conn->error;
    }

?>