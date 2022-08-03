<?php

use App\Controllers\HomeController;
use App\Controllers\UserController;

// Autoloader
spl_autoload_register(function ($className) {
    // On transforme tous les "\" du namespace en "/"
    require str_replace("\\", "/", $className) . ".php";
});

// Opérateur de coalescence null
$page = $_GET['page'] ?? 'home';

// Remplace le switch
// Appelle un contrôleur et sa méthode en fonction de la route dans le fichier routes.php
$routes = require 'routes.php';

// Si la route n'existe pas
if (! isset($routes[$page])) {
    // Affichage d'une page 404
    http_response_code(404);
    echo '404 NOT FOUND';
    exit();
}

// Lignes ci-dessus peuvent être raccourcies comme ceci :
list($controllerName, $method) = $routes[$page];

// Instanciation dynamique du contrôleur et de la méthode
$controller = new $controllerName();
$controller->$method();