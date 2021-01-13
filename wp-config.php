<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'somecotrad' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nj8eoZZhjPMzRoju5teEyNr0B0Ho0bwSk0FGqNfsw035QyVCOCNZkLisGpeX8dGQ' );
define( 'SECURE_AUTH_KEY',  'NSxLdvSxo7UlFSTJ1gIweGO1UFUNMFFKXEK9bfJc3jsGMZhMcoe4IdxMA4I62IRK' );
define( 'LOGGED_IN_KEY',    'c4FZRGVRHI6t49Lo5CVc5JLCGFm7rtLGW88yTHPYtHGrYaJ1D0gq1H4porL0gniV' );
define( 'NONCE_KEY',        'sVrVVfClNHGdmvHyklUolinNO8G7itcIiFGU2oafTEPUviFKkvHUEJPCe6k3L9bA' );
define( 'AUTH_SALT',        'p4JpL5Qr58V4CIMrv36JP5VOBAcP8VkIISIBQLLcnsqXcgS9ExpQmKJCsfwjnNz5' );
define( 'SECURE_AUTH_SALT', 's8gxXoEnISmujnan7CAMJnFTLw9TTHVnghhqnmNykA6PKA5KSmVWW8eniiUT0IVr' );
define( 'LOGGED_IN_SALT',   '6vegtJr468Qihbt0GXjH7frCrrTtNPz3Rqez6RF6pWiOxVWuUvwg3XRbEoTLVvYR' );
define( 'NONCE_SALT',       'TuOojjs76g8aGinVBCIbQE4modujlgloddfHWwhqSYi105MgyiZPbakqEnZ77yrc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
