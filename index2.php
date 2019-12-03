<?php
include("include/a_config.php"); //pagina principal, HOME.

session_start();

?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <!-- Esto nos conviene para el posicionamiento SEO de nuestra pagina web, colocar palbras clave en el titulo e introducir la etiqueta meta -->
        
        <title>Productores</title>

        <?php include("include/head-tag-contents.php"); ?>


    </head>

    <body>

        <div class="container">
            <?php include("include/design-top.php"); ?>
        </div>

        <div class="container">
            <?php include("include/navigation.php"); ?>

            <?php include("includep/bodyprod.php"); ?>
        </div>
        
        <div class="container">
        <?php include("include/footer.php"); ?>

        </div>
            
     </body>

</html>