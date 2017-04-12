<?php

define('DB_NAME', 'datenbankname_hier_einfuegen');
define('DB_USER', 'benutzername_hier_einfuegen');
define('DB_PASSWORD', 'passwort_hier_einfuegen');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');

$table_prefix  = 'dqwp_';

define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

/* Debug-Modus */
define('WP_DEBUG', false);

/**#@+
 * Sicherheitsschlüssel
 * @link https://api.wordpress.org/secret-key/1.1/salt/
 * @since 2.6.0
 */
define('AUTH_KEY',         'Füge hier deine Zeichenkette ein');
define('SECURE_AUTH_KEY',  'Füge hier deine Zeichenkette ein');
define('LOGGED_IN_KEY',    'Füge hier deine Zeichenkette ein');
define('NONCE_KEY',        'Füge hier deine Zeichenkette ein');
define('AUTH_SALT',        'Füge hier deine Zeichenkette ein');
define('SECURE_AUTH_SALT', 'Füge hier deine Zeichenkette ein');
define('LOGGED_IN_SALT',   'Füge hier deine Zeichenkette ein');
define('NONCE_SALT',       'Füge hier deine Zeichenkette ein');


/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');

/* Datei-Änderungen im Dashboard vermeiden */
define('DISALLOW_FILE_EDIT', true);
