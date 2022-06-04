<?php

/*
| -------------------------------------------------- -----------------
| PARAMÈTRES DE BOOTSTRAPPING DE L'APPLICATION
| -------------------------------------------------- -----------------
| Ce fichier contiendra les paramètres de boostrapping de votre application.
|
| Pour des instructions complètes, veuillez consulter la « Configuration de Bootstrap » dans le Guide de l'utilisateur.
|
*/


return [
    /*
    | Specifie le repertoire où sont stockés les fichiers de votre application
    */
    'app_path'     => '../app',

    /*
    | Specifie le repertoire où sont stockés les fichiers statique générés par l'application (cache, log, migrations...)
    */
    'storage_path'     => '../storage',

    /*
    | Specifie le repertoire votre dossier de dependances installées via composer "vendor"
    */
    'composer_autoload_file' => '../vendor'
];
