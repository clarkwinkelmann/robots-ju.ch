<?php

/**
 * Paramètres de base de donnée
 * Sauvegarder dans database.php
 */
define('DB_SERVER',   'localhost');
define('DB_USERNAME', 'robotsju');
define('DB_PASSWORD', 'robotsju');
define('DB_DATABASE', 'robotsju');

/**
 * URL du site, nécessaire pour que les requêtes AJAX HTTPS fonctionnent derrière un proxy
 * Désactiver la redirection est nécessaire pour empêcher une boucle infinie
 * Commenter en local pour garder une valeur automatique
 */
define('BASE_URL', 'https://robots-ju.ch');
define('REDIRECT_TO_BASE_URL', false);
