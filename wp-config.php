<?php
// ** Database settings - You can get this info from your Lando config ** //
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'wordpress');
define('DB_HOST', 'database');

// ** Authentication Unique Keys and Salts ** //
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

// ** WordPress Database Table prefix ** //
$table_prefix = 'wp_';

// ** Debug mode (set to false in production) ** //
define('WP_DEBUG', false);

// ** Memory limit (optional) ** //
define('WP_MEMORY_LIMIT', '256M');

// ** Absolute path to the WordPress directory ** //
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

// ** Sets up WordPress vars and included files ** //
require_once(ABSPATH . 'wp-settings.php');
