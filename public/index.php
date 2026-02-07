<?php

/**
 * This file is part of Blitz PHP framework.
 *
 * (c) 2022 Dimitri Sitchet Tomkeu <devcode.dst@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

// Chemin vers le contrôleur frontal (ce fichier)
define('WEBROOT', __DIR__ . DIRECTORY_SEPARATOR);

// S'assure que le répertoire courant pointe vers le répertoire du contrôleur frontal
if (getcwd() . DIRECTORY_SEPARATOR !== WEBROOT) {
    chdir(WEBROOT);
}

// Charge la configuration de nos chemins de répertoires
// Cette ligne doit être modifiée en fonction de votre structure
$paths_config_file = realpath(WEBROOT . '../app/Config/paths.php');
// ^^^ Modifiez cette ligne si vous déplacez votre dossier d'application

$paths = require_once $paths_config_file;

$boot_path = strtr(rtrim($paths['boot'], '/\\'), '/\\', DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR);
if (false === $setup_file = realpath($boot_path . DIRECTORY_SEPARATOR . 'setup.php')) {
    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo 'Votre fichier de démarrage de l\'application ne semble pas être défini correctement. ';
    echo 'Veuillez ouvrir le fichier "' . $paths_config_file . '" et corriger la clé "boot".';
    exit(3); // EXIT_CONFIG
}

require_once $setup_file;
