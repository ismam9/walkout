<?php
include("include/a_config.php"); //pagina principal, HOME.

session_start();

?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <!-- Esto nos conviene para el posicionamiento SEO de nuestra pagina web, colocar palbras clave en el titulo e introducir la etiqueta meta -->
        <?php include("include/head-tag-contents.php"); ?>
        <script type="text/javascript" src="js/coverhead_jquery.js"></script>
        <script type="text/javascript" src="js/index.js"></script>

        <script src="js/busq.js"></script>

        <title>Walkout</title>
        

    </head>

    <body>

        <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">

            
            <?php include("include/sessions.php");?>

            <?php include("include/cover/headercover.php"); ?>
            <?php include("include/cover/graphic-cover.php"); ?>

            <?php

            if (!empty($_SESSION["nick"])) {
                echo '<label>
                    <form action="admincrud/login/logouta.php" method="post">
                        <input class="btn btn-primary" style="float: right;" type="submit" name="logouta" value="Cerrar sesion">
                    </form>
                </label>'; 
            }
              

            ?>
            

        </div>
        <br>
        <br>
        
        <div class="container">
            <?php include("include/cover/navbcover.php"); ?>
            <?php include("include/cover/bodycover.php"); ?>
        </div>
        
        <?php include("include/cover/footercover.php"); ?>

       
            
    </body>

</html>