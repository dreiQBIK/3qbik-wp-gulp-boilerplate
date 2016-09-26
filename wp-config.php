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
$table_prefix  = 'bwpg_';

define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

// Generate specific Wordpress keys
// @link: https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         ')2OR<Lr#jx~CFV+BhUR4CMLNG}uG[7Z/|X0BY$#TX8Q<Ilgh?1q5UEPS<Jz)oH%x');
define('SECURE_AUTH_KEY',  'hi^*inj;OMR`/b}m!lZuI3tdC]Z([A;gE jXy-e/6](EJm+oso^i#67-[5&1= ,d');
define('LOGGED_IN_KEY',    'WV#I;^Bt0L,Y7f?YwTz-v7_0oYml2K>+QCf$@zmF}lfEV*&KT,*Ei}F+PZ%@@_#p');
define('NONCE_KEY',        'hq<3CRX]5f;O:2<#L!>]v^4$8WKM:{SxlRQ}(j]}[;bF/1k8]H6I>Ujdj^q{`2d_');
define('AUTH_SALT',        '#;YsKCoL2{5!^QzO8AT=s8q44c&h,pc.#TVCD{q-_%T2u/R$(=4_<R9{)}WKU}`0');
define('SECURE_AUTH_SALT', 'yO3i`24h6BHAQ1||@cr.ex3bVj&|^p:z,gctEzh3v?sZ!HH[-FC5j)PL.ULwsTRZ');
define('LOGGED_IN_SALT',   'vYb-~_OxnOM>_gLW~gsUr>Z6MU%-kJMA/Dz{`h91EV2@qi=U:g>$.Se]JIK`2nrp');
define('NONCE_SALT',       '=k)m;{?_D`peXmsz(!$,{{HUIl@W8DgYT-JihxzcijSkw=oG!N6JuY,fj@klT!VE');
define('WPLANG', '');

if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');