<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'LoginController::index');// Affiche la page de connexion
$routes->get('/signup', 'SignupController::index'); // Affiche la page d'inscription
$routes->post('/signup', 'SignupController::register'); // Traite l'inscription

