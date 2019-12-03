<?php  //en este php
    //Creamos una sesion o reanudamos la sesion que teniamos*/
    session_start();
    //llamamos al archivo createdb_r.php que se encuentra en la carpeta php que contiene la conexion con la base de datos*/
    require_once ("../../php/db.php");

    $dbtable_prod = "producer";

    /*capturamos los datos que se introducen en el formulario de inicio de sesion y los guardamos en variables*/
    $nick = $_POST['nickname'];
    /*la contrasena la ciframos con md5*/
    $passw = MD5($_POST['passw']);
    /*guardamos en una variable la seleccion de los datos cuando el correo y la contrasena sea igual a los datos de la tabla */

    echo "hola llegamos";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $insert = "SELECT * FROM producer WHERE nickname = '$nick' AND passw = '$passw' ";
    /*
    /*$insert = "SELECT * FROM usuario WHERE password = '4d186321c1a7f0f354b297e8914ab240' AND email = 'ismam_98@hotmail.com' ";
    */

    $consulta = $conn->query($insert);
    /*hacemos un if para cuando se cumpla la condicion creamos las sesiones y nos lleve a inicio*/
    
    if ($consulta->num_rows == 1) {
        echo "consultado";
    } else{
        echo "Error: " . $insert . "<br>" . $conn->error;
    }
    
    
    if($consulta->num_rows == 1){
        while($row = $consulta->fetch_assoc()){
            $_SESSION["codigo"] = $row["cod_p"];
            $_SESSION["nick"] = $row["nickname"];            
            $_SESSION["nombre"] = $row["name"];
            $_SESSION["ape"] = $row["secname"];
            $_SESSION["email_p"] = $row["email_p"];
            $_SESSION["password"] = $row["passw"];
            $_SESSION["ciudad"] = $row["ciudad"];
            $_SESSION["destacado"] = $row["highlight"];
            $_SESSION["telefono"] = $row["telef"];
            $_SESSION["descripción"] = $row["about"];            
            $_SESSION["rol"] = $row["rol"];         	
            
        }
        
        header ('Location: ../index.php');
    }
    
    else{

        header ('Location: ../../admin.php');
    }
    
    




?>