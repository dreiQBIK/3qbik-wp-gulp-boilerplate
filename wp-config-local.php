<?php

// Local server settings

// Local Database
define('DB_NAME',     'db_b-wp-gulp');  	// enter database name of client
define('DB_USER',     'root');      		// enter user name
define('DB_PASSWORD', 'root');      		// enter password
define('DB_HOST',     'localhost');

// Overwrites the database to save keep edeting the DB
define('WP_HOME','http://b-wp-gulp/');    	// enter project name
define('WP_SITEURL','http://b-wp-gulp/'); 	// enter project name

// Turn on debug for local environment
define('WP_DEBUG', true);