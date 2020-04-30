<?php
    // Module
    define('MODULE', 'modules/'.$_SESSION["type"].'/');

    // Cargamos la informacion del modulo.
    require MODULE."paths.php";
    require MODULE."autoload.php";

    // Utils
    foreach (glob(MODULE. 'utils/*.inc.php') as $name) 
        require $name;

    if (PRODUCTION) { // estamos en producción
        ini_set('display_errors', '1');
        ini_set('error_reporting', E_ERROR | E_WARNING); // error_reporting(E_ALL) ;
    } else {
        ini_set('display_errors', '0');
        ini_set('error_reporting', '0'); // error_reporting(0); 
    }

    // VIEW MODULO  
    require_once VIEW_PATH_INC . "head.php";
    require_once VIEW_PATH_INC . "menu.php";
    
    require MODULE."router/router.php";
?>