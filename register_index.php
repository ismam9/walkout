<?php
include("include/a_config.php"); //pagina principal, HOME.

session_start();

?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <!-- Esto nos conviene para el posicionamiento SEO de nuestra pagina web, colocar palbras clave en el titulo e introducir la etiqueta meta -->
        
        <title>Register</title>
        <script type="text/javascript" src="js/validation.js"></script>

        <?php include("include/head-tag-contents.php"); ?>

    </head>

    <body>

        <div class="container">
            <p>
                <?php include("include/design-top.php"); ?>
            </p>
            <p>
                <form action="registrar.php" method="post" id="myform">  <!-- formulario de registro de usuarios-->

                    <div class="container">
                        <?php include("register_form.php"); ?>

                        <p style="float: right;"> 
                            <button id="register" type="submit" class="btn btn-warning" value="Enviar">Registro</a></button>
                        </p>
                    </div>

                </form>
            </p>
            <p>
                <?php include("include/footer.php"); ?>
            </p>

        </div>
            
     </body>

</html>