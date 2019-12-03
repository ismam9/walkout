<?php  


require_once("php/db.php");

    if (!empty($_SESSION["user"])) {
        echo "<div id='alert' class='alert alert-primary' role='alert'>Estas logeado ". $_SESSION["user"] .
            "</div>
            <script type='text/javascript'> 

            $('#alert').fadeIn();     
            setTimeout(function() {
                $('#alert').fadeOut();           
            },2000);

            </script>";

    }elseif (!empty($_SESSION["nick"])) {

        echo "<div id='alert' class='alert alert-primary' role='alert'>Estas logeado ". $_SESSION["nick"] .
            " como productor</div>
            <script type='text/javascript'> 

            $('#alert').fadeIn();     
            setTimeout(function() {
                $('#alert').fadeOut();           
            },2000);


            </script>";

    }elseif (empty($_SESSION[""])) {
        echo "<div id='alert' class='alert alert-warning' role='alert'> No estas logeado </div>

            <script type='text/javascript'> 
                $('alert').fadeIn();     
                setTimeout(function() {
                    $('.alert').fadeOut();           
                },4000);
           
            </script>";
 
        
    }else{
        echo "<div id='alert' class='alert alert-warning' role='alert'> Ocurrio un error al iniciar sesión 
            </div>";
    }

          



?>