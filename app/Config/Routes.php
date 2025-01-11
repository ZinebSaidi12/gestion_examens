<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */



// Page d'accueil
$routes->get('/', 'Home::index');

// Routes pour la connexion
$routes->get('/login', 'LoginController::index'); // Affiche la page de connexion
$routes->post('/login', 'LoginController::authenticate'); // Traite la connexion
$routes->get('/logout', 'LoginController::logout'); // Déconnecte l'utilisateur

// Routes pour l'inscription
$routes->get('/signup', 'SignupController::index'); // Affiche la page d'inscription
$routes->post('/signup', 'SignupController::register'); // Traite l'inscription

// Route pour le tableau de bord
$routes->get('/dashboard', 'DashboardController::index'); // Protégé par un filtre d'authentification
//profile $routes->get('/profile', 'ProfileController::index');
$routes->post('/profile/update', 'ProfileController::update');
//profile
$routes->get('/profile', 'ProfileController::index');
$routes->post('/profile/update', 'ProfileController::update');
