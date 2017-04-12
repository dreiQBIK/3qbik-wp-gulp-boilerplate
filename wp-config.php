<?php

// Use these settings on the local server
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
    include( dirname( __FILE__ ) . '/wp-config-local.php' );

// Otherwise use the settings below (on live server)
} else {

    // Live Server Database Settings
    define('DB_NAME',     'db_DBCLIENTNAME'); // enter database name of client
    define('DB_USER',     'root');            // enter user name
    define('DB_PASSWORD', 'root');                // enter password
    define('DB_HOST',     'localhost');

    // Overwrites the database to save keep edeting the DB
    define('WP_HOME','http://yourwebsite.com');
    define('WP_SITEURL','http://yourwebsite.com');

    // Turn Debug off on live server
    define('WP_DEBUG', false);
}

// Never use wp_ always use your own to prevent some hacks
$table_prefix  = 'bwpg_';

define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

// Generate specific Wordpress keys
// @link: https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         'D2><!chMk [QlJ~A|PnC, VPt`ST,Yd8J(vRM;c_QD:lWw{um$o:+3VO0Lov=)2h');
define('SECURE_AUTH_KEY',  '0bcoe%bfV)CK[0YYZt`]T5ymYzF<Lj{0?Htk%Yi^^3Z,*%Ezws>u_>LJyTaOJYM%');
define('LOGGED_IN_KEY',    'j/}gO=l+Y&&:vDFe_sm&<;J5cd5;iMyUp4C@SuiVn-PjI2?TNi`I^9$O^Rpp.@c?');
define('NONCE_KEY',        'w`J+<ISpq0wBouCe`-Nh>:ZOPgchFhtHhKt?Eg>}D H5~)}e]wCVQS!f~*lX(kfs');
define('AUTH_SALT',        'bgLQ)sQ%zu=>h$T~uY69[(^dhuH#Bd9tP;@P(i;[>z;GHojJ~VECep[<,kF8`pa+');
define('SECURE_AUTH_SALT', ' Udbq}]]Y$Pg~NI?^u;:tT/mca4,kV9{1Q7O`/wg#>c*6}d$?Lp}y%K0ZF&Q[!!n');
define('LOGGED_IN_SALT',   'I4]n!iK*tF&{~;>g2}WmA5G;a@_juQuA]WQ9!2_:KE.g3e+usg^Tbv`X $~c[vu%');
define('NONCE_SALT',       'FxZPs^Qm0~gGBME(qi?F}t3K1] 6V7!>n8+u!;|{?%,Um<u% QG@+BlpiEe~dd,l');
define('WPLANG', '');

if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');

## Disable Editing in Dashboard
define('DISALLOW_FILE_EDIT', true);