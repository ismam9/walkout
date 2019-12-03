<?php

/* 
 *Este fichero detecta en que pagina nos encontramos.
 *Si estas usando bases de datos la cadena de conexion tambien irá aqui.
 */
//echo $_SERVER["SCRIPT_NAME"];
switch ($_SERVER["SCRIPT_NAME"]) {

    case "/walkout/indexu.php":
        $CURRENT_PAGE = "IndexU";
        $PAGE_TITLE = "Perfil";

        break;

    case "/walkout/index1.php":
        $CURRENT_PAGE = "Index1";
        $PAGE_TITLE = "Featured";

        break;

    case "/walkout/index2.php":
        $CURRENT_PAGE = "Index2";
        $PAGE_TITLE = "Productores";

        break;


    default:
        $CURRENT_PAGE = "Walkout";
        $PAGE_TITLE = "Welcome to my homepage";
        break;
}

?>