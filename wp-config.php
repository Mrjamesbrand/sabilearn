<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'U0p9+zvYJVhyR6wJp+h368VD7qQioU1avMjsa8AfoAOSqG9ax/3gnOqiyf819BaYCnT8kFiK8Uuq/PxlMtZTEA==');
define('SECURE_AUTH_KEY',  'kQWESIZqGFks+yD2bB9TRAl7seaEn41i0V6QcTqtSEMUJB1qW32Zd0Mz2ce92c4RKBz9cM9mGlUi7pjVeT4jAw==');
define('LOGGED_IN_KEY',    'wZxXmwpwdsNtzgv8P9NzwdrMyDgh+UjZNOpG7IHReLUR3saDO3hWiV6u9Wznm5aS3MsAXGh/xp53xnRkeYY8gw==');
define('NONCE_KEY',        '1UjvszgLIC+CiYqBxHomCO13XbELuzpfcedDTPkzVoZ/P8xDnVIfKpvW3f4FwGOHbjQ+bSpSW36I72zvuoQOSg==');
define('AUTH_SALT',        'j7eBwrzRCUz4Jmcul9BNwq1SfMGs3L+7Q6F/+Z9uYWUUQvRgOpeKuKybS56DANhZUZyMmMvrD+P6DPAz2rHQdg==');
define('SECURE_AUTH_SALT', '/yJqBewV+S8wTsX6qhkZguupm225ASz/dfFeXCVSqIIK3aoRvni1H+smNuSfr4ZXD+0bZC96WI4mFSw/az2M8g==');
define('LOGGED_IN_SALT',   '8B8072/0eJA/gPGWVhT7XauuvKKf5Lss0EXZyB5nYH8I4SKQBdGoD67qvyG+CJKbg6NTKX7u5dn6XzuP74OXuA==');
define('NONCE_SALT',       'Iwa2d4lIe7NuoZE7/Oy/n4jR5tdgmwjSnSJd6DAJVCSwOFy1O7xxSgOen/nrKe0ye+YRFCnKMyZUfZAbuLdcqg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
