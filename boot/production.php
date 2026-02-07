<?php

/*
 |--------------------------------------------------------------------------
 | AFFICHAGE DES ERREURS
 |--------------------------------------------------------------------------
 | Ne montrez AUCUNE erreur dans les environnements de production.
 | À la place, laissez le système l'intercepter et afficher un message
 | d'erreur générique.
 |
 | Si vous définissez 'display_errors' à '1', le rapport d'erreur détaillé
 | de CI4 s'affichera.
 */
error_reporting(E_ALL & ~E_DEPRECATED);
// Si vous voulez supprimer plus de types d'erreurs.
// error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
ini_set('display_errors', '0');

/*
 |--------------------------------------------------------------------------
 | MODE DÉBOGAGE
 |--------------------------------------------------------------------------
 | Le mode débogage est un drapeau expérimental qui peut permettre des
 | changements dans tout le système. Il n'est pas largement utilisé
 | actuellement, et pourrait ne pas survivre à la sortie du framework.
 */
defined('BLITZ_DEBUG') || define('BLITZ_DEBUG', false);