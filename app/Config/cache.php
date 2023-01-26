<?php

/**
 * ------------------------------------------------- -------------------------
 * Configuration du gestionnaire de cache
 * ------------------------------------------------- -------------------------
 *
 * Ce fichier vous permet de definir les parametres de gestion du cache de votre application
 */

return [
    /**
     * ------------------------------------------------- -------------------------
     * Gestionnaire principal
     * ------------------------------------------------- -------------------------
     *
     * Le nom du gestionnaire préféré qui doit être utilisé. Si pour une raison quelconque
     * il n'est pas disponible, le $backupHandler sera utilisé à sa place.
     *
     * @var string
     */
    'handler' => 'file',

    /**
     * ------------------------------------------------- -------------------------
     * Gestionnaire de relais
     * ------------------------------------------------- -------------------------
     *
     * Le nom du gestionnaire qui sera utilisé si le premier est
     * inaccessible. Souvent, 'fichier' est utilisé ici puisque le système de fichiers est
     * toujours disponible, même si ce n'est pas toujours pratique pour l'application.
     *
     * @var string
     */
    'fallback_handler' => 'dummy',

    /**
     * ------------------------------------------------- -------------------------
     * Gestionnaires de cache disponibles
     * ------------------------------------------------- -------------------------
     *
     * Il s'agit d'un tableau d'alias de moteur de cache et de noms de classe. Seuls les moteurs
     * qui sont répertoriés ici sont autorisés à être utilisés.
     *
     * @var array<string, string>
     */
    'valid_handlers' => [
        'dummy'     => \BlitzPHP\Cache\Handlers\Dummy::class,
        'file'      => \BlitzPHP\Cache\Handlers\File::class,
    ],
];