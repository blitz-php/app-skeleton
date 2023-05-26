<?php
/**
 * --------------------------------------------------------------------
 * Application Events
 * --------------------------------------------------------------------
 * Les événements vous permettent d'accéder à l'exécution du programme sans modifier ni étendre les fichiers principaux.
 * Ce fichier fournit un emplacement central pour définir vos événements, bien qu'ils puissent toujours être ajoutés au moment de l'exécution, également, si nécessaire.
 *
 * Vous créez du code qui peut s'exécuter en vous abonnant à des événements avec la méthode 'on()'.
 * Cela accepte toute forme de callable, y compris les closure, qui seront exécutées lorsque l'événement est déclenché.
 *
 * Example:
 *      $event->on('create', [$myInstance, 'myMethod']);
 */


/**
 * Créez une nouvelle instance de notre classe EventManager.
 * 
 * @var BlitzPHP\Event\EventManager
 */
$event = \BlitzPHP\Loader\Services::event();


$event->on('pre_system', function () use ($event) {
    if (! on_prod() && ! is_cli()) {
        $event->on('db:result', [\BlitzPHP\Debug\Toolbar\Collectors\DatabaseCollector::class, 'collect']);
    }
});
