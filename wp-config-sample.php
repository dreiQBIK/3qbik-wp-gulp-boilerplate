<?php

// Use these settings on the local server
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
    include( dirname( __FILE__ ) . '/wp-config-local.php' );

// Otherwise use the settings below (on live server)
} else {

    // Live Server Database Settings
    define('DB_NAME',     'db_DBCLIENTNAME'); // enter database name of client
    define('DB_USER',     'root');            // enter user name
    define('DB_PASSWORD', '');                // enter password
    define('DB_HOST',     'localhost');

    // Overwrites the database to save keep edeting the DB
    define('WP_HOME','http://yourwebsite.com');
    define('WP_SITEURL','http://yourwebsite.com');

    // Turn Debug off on live server
    define('WP_DEBUG', false);
}

// Never use wp_ always use your own to prevent some hacks
$table_prefix  = 'CLIENTNAME_'; //enter table prefix of client

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// Generate specific Wordpress keys
// @link: https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         'v#%PIbkS)cT0z|)zunjM/yh3N`F)s]Va+u*M;}Bsglp 6t-hnf4vhb,(FBdK#z5N');
define('SECURE_AUTH_KEY',  'K|iPvT4wyU_v&P$O`8XEaE:+kL;rPEDw{6:tQ:|1JB=_+:$EJ|=-TKUdD|Foo@8S');
define('LOGGED_IN_KEY',    ') BIb;F[P6Z`qG)P@|&tbX(>jm>j_6ZSxeX,ux39o=3&P+Dz>^3#R4i,y1>:$*Lc');
define('NONCE_KEY',        'im.Dz1~u4|d2Mw]$1|M|*jQx=]JUzwWV OeykItQ!H>]D9(Kd[58{F~K-}Oz/E;f');
define('AUTH_SALT',        'Vn~cx&iv;;Ki&pUU9Np,DH|aWe$NP#L+3B!6v:m/!?DX!t`n*=Jk+y2?@ 6}f&ma');
define('SECURE_AUTH_SALT', 'F=$$>rBGzqM/{]wVid@Uxd,2HGq[.KYI=LOwxo|E9(T+|Q+,<*$<3at<~7xh|VZg');
define('LOGGED_IN_SALT',   '10W}9J/`F1$g$:%~xD%1Q.3yjz8GG2c?O_-irm..N@ wmE:`RuJ~kDq42TV dqI}');
define('NONCE_SALT',       'J5nuf5c%[~/4!/7,{F!l?V Zu=2+l?OVFzi!2++sMiR;N$.sC}-C2p|K~MshnD[)');
define('WPLANG', '');

if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');