<?php

require_once '../vendor/autoload.php'; // Inclure l'autoloader de Composer
require_once '../app/Router.php'; // Inclure le routeur
require_once '../app/controllers/HomeController.php'; // Inclure le contrôleur d'accueil
require_once '../app/controllers/ProduitController.php'; // Inclure le contrôleur de produits

$router = new Router();

// Définir les routes
$router->addRoute('/', 'HomeController', 'index');
$router->addRoute('/produits', 'ProduitController', 'index');

// Récupérer la route actuelle
$path = isset($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : '/';
$router->resolve($path);
