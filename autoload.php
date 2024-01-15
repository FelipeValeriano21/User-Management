<?php 

spl_autoload_register(function ($class_name) {

    echo"TENTOU DA INCLUDE DE " .  $class_name ;

});