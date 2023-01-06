<?php
define("_BASE","/DWWM/MVC/formation");
// remplace le path dans le code par _BASE

$action = $_GET['action'];
$tab = explode ('/' , $action);

$arg = NULL;
$controller = $tab[0];
$fonction = $tab [1];
if (isset($tab[2])) {
    $arg = $tab[2] ;
}

require('controller/'.$tab[0].'.php') ;

if (isset($arg)) {
   
    $fonction($arg);
} else {
    $fonction();
}

?>