<?php
/*
| -------------------------------------------------- -----------------
| PARAMÈTRES D'ITINÉRAIRE DE L'APPLICATION
| -------------------------------------------------- -----------------
| Ce fichier contiendra les paramètres de routage de votre application.
|
| Pour des instructions complètes, veuillez consulter la « Configuration de l'itinéraire » dans le guide de l'utilisateur.
*/

/**
 * Créez une nouvelle instance de notre classe RouteCollection.
 *
 * NE PAS CHANGER CETTE VARIABLE CAR ELLE EST UTILISEE POUR  L'AMORCAGE DE VOTRE APPLICATION
 *
 * @var BlitzPHP\Router\RouteCollection
 */
$routes = \BlitzPHP\Loader\Services::routes();


/**
 * --------------------------------------------------------------------
 * Parametrage du router
 * --------------------------------------------------------------------
 */

/**
 * Namespace par défaut des contrôleurs
 */
$routes->setDefaultNamespace('App\\Controllers\\');

/**
 * Contrôleur par défaut
 */
$routes->setDefaultController('Home');

/**
 * Méthode par défaut
 */
$routes->setDefaultMethod('index');

/**
 * Active le routage automatique
 */
$routes->setAutoRoute(true);


/**
 * --------------------------------------------------------------------
 * Définition des routes
 * --------------------------------------------------------------------
 */
