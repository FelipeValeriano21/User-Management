<?php

include 'Controller/ControllerPessoa.php';

$url = strtok($_SERVER["REQUEST_URI"], '?'); 
$params = $_GET;  

switch($url)
{
    case '/':
        include 'View/Modules/Pessoa/Menu.php';
    break;

    case '/pessoa': 
        ControllerPessoa::index();
    break;

    case '/pessoa/form':
        ControllerPessoa::form();
    break;

    case '/pessoa/form/save':
        ControllerPessoa::save();
    break;

    case '/pessoa/form/delete':
        ControllerPessoa::delete();
    break;

    default:
        echo("Erro 404");
}
