<?php
   
   	/*archivo que destruye la sesion del usuario logeado, por lo que cierra sesion*/
    
    session_start();

    if(!empty($_SESSION['nick'])){
        $_SESSION['nick']= '';
        session_destroy();
    }

    header("Location: ../../index.php");
    exit();
?>