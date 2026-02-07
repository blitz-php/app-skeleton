<?php

/*
 |--------------------------------------------------------------------------
 | AFFICHAGE DES ERREURS
 |--------------------------------------------------------------------------
 | En développement, nous voulons montrer le plus d'erreurs possible pour
 | nous assurer qu'elles n'arrivent pas en production. Et nous éviter des
 | heures de débogage pénible.
 |
 | Si vous définissez 'display_errors' à '1', le rapport d'erreur détaillé
 | de CI4 s'affichera.
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
 | changements dans tout le système. Il contrôle si Kint est chargé, et
 | quelques autres éléments. Il peut toujours être utilisé dans votre propre
 | application également.
 */
defined('BLITZ_DEBUG') || define('BLITZ_DEBUG', true);