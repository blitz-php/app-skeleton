<?php

/**
 * ------------------------------------------------- -------------------------
 * Configuration des chemins des differents repertoires de l'application
 * ------------------------------------------------- -------------------------
 *
 * Ce fichier vous permet de definir le chemins où se trouveront les élements nécessaires à l'éxecution du programme
 * 
 * Holds the paths that are used by the system to
 * locate the main directories, app, system, etc.
 *
 * Modifying these allows you to restructure your application,
 * share a system folder between multiple applications, and more.
 *
 * All paths are relative to the project's root folder.
 */

return [
    /**
     * ------------------------------------------------- -------------------------
     * NOM DU DOSSIER D'APPLICATION
     * ------------------------------------------------- -------------------------
     *
     * Repertoire où sont stockés les fichiers de votre application
     * 
     * If you want this front controller to use a different "app"
     * folder than the default one you can set its name here. The folder
     * can also be renamed or relocated anywhere on your server. If
     * you do, use a full server path.
     *
    * @var string
     */
    'app' => dirname(__DIR__),
    
    /**
     * ------------------------------------------------- -------------------------
     * NOM DU DOSSIER DE STOCKAGE
     * ---------------------------------------------------------------
     *
     * Repertoire où sont stockés les fichiers statique générés par l'application (cache, log, migrations...)
     * 
     * This variable must contain the name of your "storage" directory.
     * The storage directory allows you to group all directories that
     * need write permission to a single place that can be tucked away
     * for maximum security, keeping it out of the app and/or
     * system directories.
     */
    'storage' => dirname(__DIR__, 2) . '/storage/',
    
    /**
     * ------------------------------------------------- -------------------------
     * NOM DU DOSSIER DES TELECHARGEMENTS
     * ---------------------------------------------------------------
     *
     * Repertoire où sont stockés les fichiers téléchargés par les utilisateurs de l'application (images, videos, pdf...)
     * 
     * This variable must contain the name of your "storage" directory.
     * The storage directory allows you to group all directories that
     * need write permission to a single place that can be tucked away
     * for maximum security, keeping it out of the app and/or
     * system directories.
     */
    'upload' => dirname(__DIR__, 2) . '/uploads/',
    
    /**
     * ------------------------------------------------- -------------------------
     * NOM DU DOSSIER DE COMPOSER
     * ---------------------------------------------------------------
     *
     * Repertoire votre dossier de dependances installées via composer "vendor".
     */
    'composer' => dirname(__DIR__, 2) . '/vendor/',
];
