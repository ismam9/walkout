<?php  
    header("Content-Type: application/rss+xml; charset=iso-8859-1");

    /*require_once("php/db.php");
    echo "string";
    
    /*
    DEFINE('USUARIO_BD', 'root');  
    DEFINE('CLAVE_BD', 'isma');  
    DEFINE('HOST_BD', 'localhost');  
    DEFINE('NOMBRE_BD', 'walkout');  
  
    $conn = new mysqli(HOST_BD, USUARIO_BD, CLAVE_BD, NOMBRE_BD);
  
    
    $consulta = "SELECT * FROM beat ORDER BY cod_b DESC"; 

    /*
    if ($conn->query($consulta);) {
        echo "consultado";
    } else{
        echo "Error: " . $insert . "<br>" . $conn->error;
    }

    echo '
        <?xml version="1.0" encoding="utf-8"?>  
        <rss version="2.0">  
        <channel>  
            <title>Noticias de mi fantabulenial sitio Web</title>  
            <link>http://localhost/walkout/index.php</link>  
            <description>Las mejores noticias de Internet</description>

            

        </channel>  
        </rss>';

    if($consulta->num_rows >= 1){
        while($fila = $consulta->fetch_assoc()){
             echo '<item> 
                  <title>'.$fila['titulo'].'</title> 
                  <link>'.$fila['enlace'].'</link> 
                  <description>'.$fila['detalle'].'</description> 
             </item>';  
        }
    }*/
?> 