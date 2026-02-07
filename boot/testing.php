<?php

/*
 * L'environnement "testing" est réservé aux tests PHPUnit. Il contient des
 * conditions spéciales intégrées au framework à divers endroits pour faciliter cela.
 * Vous ne pouvez pas l'utiliser pour votre développement.
 */

/*
 |--------------------------------------------------------------------------
 | AFFICHAGE DES ERREURS
 |--------------------------------------------------------------------------
 | En développement, nous voulons montrer le plus d'erreurs possible pour
 | nous assurer qu'elles n'arrivent pas en production. Et nous éviter des
 | heures de débogage pénible.
 */
error_reporting(E_ALL);
ini_set('display_errors', '1');

/*
 |--------------------------------------------------------------------------
 | BACKTRACES DE DÉBOGAGE
 |--------------------------------------------------------------------------
 | Si vrai, cette constante indiquera aux écrans d'erreur d'afficher les
 | backtraces de débogage avec les autres informations d'erreur. Si vous
 | préférez ne pas les voir, définissez cette valeur sur false.
 */
defined('SHOW_DEBUG_BACKTRACE') || define('SHOW_DEBUG_BACKTRACE', true);

/*
 |--------------------------------------------------------------------------
 | MODE DÉBOGAGE
 |--------------------------------------------------------------------------
 | Le mode débogage est un drapeau expérimental qui peut permettre des
 | changements dans tout le système. Il n'est pas largement utilisé
 | actuellement, et pourrait ne pas survivre à la sortie du framework.
 */
defined('BLITZ_DEBUG') || define('BLITZ_DEBUG', true);