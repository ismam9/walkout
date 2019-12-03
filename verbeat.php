<?php
include("include/a_config.php"); //pagina principal, HOME.

session_start();

?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <!-- Esto nos conviene para el posicionamiento SEO de nuestra pagina web, colocar palbras clave en el titulo e introducir la etiqueta meta -->
        
        <title>View Beat</title>

        <?php include("include/head-tag-contents.php"); ?>


    </head>

    <body>

        <div class="container">
            <?php include("include/design-top.php"); ?>
        </div>

        <div class="container">
            <?php
                require_once("php/db.php");

                $cod_b = $_POST['beatc'];
                echo $cod_b;
                
                $consulta = "SELECT * FROM producer p, beat b, publicacion c
                            WHERE p.cod_p = b.producer AND c.prod = p.cod_p AND c.beat = b.cod_b 
                                ";
                $result = $conn->query($consulta);


                
                if($result->num_rows >= 0){
                    while($row = $result->fetch_assoc()){
                    
                    if ($row['cod_b'] == $cod_b) {
                        
                        echo '<div class="container">
            
                                <div class="card-body">

                                    <div class="card-header">
                                        Producer
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <h4 class="card-title">
                                                <i> NAME BEAT
                                                    <strong style="float: right;">
                                                        PRECIO
                                                    </strong>
                                                    <br>
                                                    <p>
                                                        DESCRIPCION
                                                    </p>
                                                </i>
                                                <p>
                                                    <img class="img-fluid" src="include/images/iwasaura.jpg" alt="card image" style="width: 5em; float: right;" >
                                                </p>
                                            
                                            </h4>

                                        </li>
                                        <li class="list-group-item">
                                            TIPO
                                        </li>
                                        <li class="list-group-item">
                                            <div class="card-text">GENERO
                                                <i>
                                                    ARCHIVO + PISTA
                                                </i>
                                            </div>
                                        </li>
                                    </ul>

                                        

                                </div>
                            </div>
                            ';
                        }
                    }
                }

            ?>
        </div>
        
        <div class="container">
        <?php include("include/footer.php"); ?>

        </div>
            
     </body>

</html>