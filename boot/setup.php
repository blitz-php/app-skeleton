<?php

/**
 * This file is part of Blitz PHP framework.
 *
 * (c) 2022 Dimitri Sitchet Tomkeu <devcode.dst@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use BlitzPHP\Initializer\Boot;

/** 
 * @var array{app: string, storage: string, test: string, boot: string, composer: string, env_directory: string} $paths 
 * @var string $paths_config_file 
 */

// Le chemin d'accès vers composer
if (empty($paths['composer']) || ! is_dir($paths['composer'])) {
    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo 'Votre fichier autoload de Composer ne semble pas être défini correctement. ';
    echo 'Veuillez ouvrir le fichier "' . $paths_config_file . '" et corriger la clé "composer".';
    exit(3); // EXIT_CONFIG
}

$paths['composer'] = strtr(rtrim($paths['composer'], '/\\'), '/\\', DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR);

$autoload_file = $paths['composer'] . DIRECTORY_SEPARATOR . 'autoload.php';
if (!is_file($autoload_file)) {
    $autoload_file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
}

if (!is_file($autoload_file)) {
    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo 'Votre fichier autoload de Composer ne semble pas être défini correctement. ';
    echo 'Veuillez ouvrir le fichier "' . $paths_config_file . '" et corriger la clé "composer".';
    exit(3); // EXIT_CONFIG
}

// Chemin d'accès du dossier "vendor"
define('VENDOR_PATH', realpath(pathinfo($autoload_file, PATHINFO_DIRNAME)) . DIRECTORY_SEPARATOR);

// Chemin vers le framework
define('SYST_PATH', realpath(VENDOR_PATH . 'blitz-php/framework/src') . DIRECTORY_SEPARATOR);
// URL de base
define('BASE_URL', trim(dirname($_SERVER['SCRIPT_NAME'], 2), '\\'));

require_once $autoload_file;
require_once SYST_PATH . 'Initializer' . DIRECTORY_SEPARATOR. 'Boot.php';

$bootMode = defined('KLINGED') ? 'klinge' : 'web';
exit(Boot::$bootMode($paths, $paths_config_file));
