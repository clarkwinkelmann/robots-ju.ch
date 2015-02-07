<?php

/**
 * Paramètres de base de donnée
 */
require('database.php');

/**
 * Titre de la page [Site - Page]
 * @link http://www.concrete5.org/community/forums/documentation_efforts/useful-site.php-settings/
 */
define('PAGE_TITLE_FORMAT', '%1$s - %2$s');

/**
 * Applique le même format partout
 * @link http://www.concrete5.org/community/forums/customizing_c5/non-us-dateformat-jquery-datepicker-and-core-c5/#195014
 */
define('DATE_APP_GENERIC_MDY',       'd-m-Y');
define('DATE_APP_GENERIC_MDYT_FULL', 'd-m-Y H:i:s');
define('DATE_APP_GENERIC_MDYT',      'd-m-Y H:i:s');
define('DATE_APP_DATE_PICKER',       'dd-mm-yy');

/**
 * Configuration email
 * @link http://www.concrete5.org/community/forums/installation/default-email-from-address/
 */
define('EMAIL_DEFAULT_FROM_ADDRESS',    'noreply@robots-ju.ch');
define('EMAIL_DEFAULT_FROM_NAME',       'Robots-JU');
define('FORM_BLOCK_SENDER_EMAIL',       EMAIL_DEFAULT_FROM_ADDRESS);
define('EMAIL_ADDRESS_FORGOT_PASSWORD', EMAIL_DEFAULT_FROM_ADDRESS);
