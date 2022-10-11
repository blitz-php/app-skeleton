<?php

define('DS', DIRECTORY_SEPARATOR);

$config = require_once __DIR__ . DS . '.bootstrap.config.php';

foreach ($config As $key => $value) {
    $config[$key] = __DIR__ . DS . trim($value, '/');
}

$app_path               = $config['app_path'] ?? '';
$storage_path           = $config['storage_path'] ?? '';
$composer_autoload_file = $config['composer_autoload_file'] ?? '';

// Le chemin d'accès vers le dossier de l'application
if (is_dir($app_path)) {
    if (($_temp = realpath($app_path)) !== false) {
        $app_path = $_temp;
    }
    else {
        $app_path = strtr(rtrim($app_path, '/\\'), '/\\', DS.DS);
    }
}
else {
    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo 'Your application folder path does not appear to be set correctly. ';
    echo 'Please open the following file and correct this: "'.__DIR__.DS.'.bootstrap.config.php"';
    exit(3); // EXIT_CONFIG
}

// Le chemin d'accès vers le dossier de stockage des fichiers
if (is_dir($storage_path)) {
    if (($_temp = realpath($storage_path)) !== false) {
        $storage_path = $_temp;
    }
    else {
        $storage_path = strtr(rtrim($storage_path, '/\\'), '/\\', DS.DS);
    }
}
elseif (is_dir($app_path.$storage_path.DS)) {
    $storage_path = $app_path.strtr(trim($storage_path, '/\\'), '/\\', DS.DS);
}
else {
    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo 'Your storage folder path does not appear to be set correctly. ';
    echo 'Please open the following file and correct this: "'.__DIR__.DS.'.bootstrap.config.php"';
    exit(3); // EXIT_CONFIG
}

// Le chemin d'accès vers composer
if (empty($composer_autoload_file) || (!is_dir($composer_autoload_file) && !is_file($composer_autoload_file))) {
    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo 'Your composer autoload file does not appear to be set correctly. ';
    echo 'Please open the following file and correct this: "'.__DIR__.DS.'.bootstrap.config.php"';
    exit(3); // EXIT_CONFIG
}

$composer_autoload_file = strtr(rtrim($composer_autoload_file, '/\\'), '/\\', DS.DS);
if (is_dir($composer_autoload_file)) {
    $composer_autoload_file .= DS.'autoload.php';
}
if (!is_file($composer_autoload_file)) {
    $composer_autoload_file = dirname(__DIR__).DS.'vendor'.DS.'auoload.php';
}
if (!is_file($composer_autoload_file)) {
    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo 'Your composer autoload file does not appear to be set correctly. ';
    echo 'Please open the following file and correct this: "'.__DIR__.DS.'.bootstrap.config.php"';
    exit(3); // EXIT_CONFIG
}

require_once $composer_autoload_file;


/**
 * Chemin d'acces du dossier "composer"
 */
define('COMPOSER_PATH', realpath(pathinfo($composer_autoload_file, PATHINFO_DIRNAME)) . DS);

/**
 * Chemin vers le framework
 */
define('SYST_PATH', COMPOSER_PATH . 'blitz-php' . DS . 'framework' . DS . 'src' . DS);

/**
 * Chemin vers l'application
 */
define('APP_PATH', realpath($app_path) . DS);

/**
 * Chemin vers le dossier de stockage
 */
define('STORAGE_PATH', realpath($storage_path) . DS);

/**
 * Chemin vers le repertoire publique
 */
define('WEBROOT', __DIR__ . DS);

/**
 * URL de base
 */
define('BASE_URL', trim(dirname($_SERVER['SCRIPT_NAME'], 2), '\\'));


if (file_exists(APP_PATH . 'Config' . DS . 'constants.php')) {
	require_once APP_PATH . 'Config' . DS . 'constants.php';
}
require_once SYST_PATH . 'Constants'.DS.'constants.php';


return (new \BlitzPHP\Core\Application)->init();
