<?php

require_once '../app/autoload.php'; 


$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');


switch ($uri) {
    case 'Dashbord/public':
        require_once '../app/controllers/login/LoginController.php';
        $controller = new LoginController();
        $controller->index(); 
        break;

    case 'Dashbord/public/register':
    
        require_once '../app/controllers/register/RegisterController.php';
        $controller = new RegisterController();
        $controller->index(); 
        break;

        case 'Dashbord/public/register/store': 
            require_once '../app/controllers/register/RegisterController.php';
            $controller = new RegisterController();
            $controller->store(); 
            break;
        case 'Dashbord/public/login/login': 
            require_once '../app/controllers/login/LoginController.php';
            $controller = new LoginController();
            $controller->login(); 
            break;

        case 'Dashbord/public/graphics';
            require_once 'E:\Downloads\Xamp\htdocs\Dashbord\app\controllers\home\ExchangeRateController.php';
            $controller = new ExchangeRateController();
            $controller->index();
            break;


    default:
        echo "Página não encontrada.";
        break;
    }