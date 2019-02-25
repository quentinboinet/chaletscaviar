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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'quentinbae371');

/** MySQL database username */
define('DB_USER', 'quentinbae371');

/** MySQL database password */
define('DB_PASSWORD', 'txEtamGZ6zuX');

/** MySQL hostname */
define('DB_HOST', 'quentinbae371.mysql.db:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c5gqdvzrN9S5zPUGwleLVJuJPQYxWWDhs71GtljlxKkcqGyBQ+rOUS+8R2pJ');
define('SECURE_AUTH_KEY',  'fIdxQaxQX0fV4pi+s/HrRiIoGBxR8PGzuHUYp1UG8Wtpij/ZN8XMm7Jknjj5');
define('LOGGED_IN_KEY',    'x0+ihzO+xsw5pVr8NjtUUb6q89V1dwi6oaO2Hos0ElyMaRBaVxgNFXsyH5nl');
define('NONCE_KEY',        'Dcdb5iwndVy0l5sjvo5QbSZhpCF+pzbUTswr4Avl53npZHjQmVQoW23dXlgC');
define('AUTH_SALT',        'c7vMwA6Vo1Fukm41sLwBdggIhvOiBBWP7HfYdhw6ktrSMTaBwsEsBlouIt5+');
define('SECURE_AUTH_SALT', '9nKfrCZBJRN355DVQatwloQmqkTvhwU0XRAX84yDdyqXJsDDR6mrPrlEWtga');
define('LOGGED_IN_SALT',   'kZTPAsEBnksD5ezZFcf0pXOuWlG0CPXpeQ0JMlP4f2jB2JYNf3SGVRESfOaz');
define('NONCE_SALT',       'TecIVxdFfwUZFBjNJPtApZAODArXNkgblUpNoMNKE0plDjzOog/B6gVdE0Fc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod70_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
