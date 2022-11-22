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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dcom4536_wp999' );

/** Database username */
define( 'DB_USER', 'dcom4536_wp999' );

/** Database password */
define( 'DB_PASSWORD', '@5Sf8v@Xp9' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'slh5n6zcd1vywq1gnp9ntzleafkmpghfggqg211wub3gto9dw37h0qvogrxndqrf' );
define( 'SECURE_AUTH_KEY',  '18bdj7fxu03uzbocowydjzggnmwifpt0spxh1emruh9ny8j6fdsyuiev8lcmcdw7' );
define( 'LOGGED_IN_KEY',    'ohmtpyzvtrhbfdkq9smu3x7hw65n03dq12adwkkjytbuqsw7ytmmxxvf64dm5afz' );
define( 'NONCE_KEY',        'h19vcbuhhgwgvnclhuetx57wzyvcwfxyeybxklb1pwb0ymtwfoj1ppfnmaasjlns' );
define( 'AUTH_SALT',        'ypmrx1rtfwxxtimxfom7f4hkb2drrbv5kgs3yyineu9aosqqsgmcdgu5yjjsv17w' );
define( 'SECURE_AUTH_SALT', 'ytkzflybshbmtexpcq7v9v2i98utxtkkxah5fl2icg9aiy6cs2418ufd6mzi7ili' );
define( 'LOGGED_IN_SALT',   'jwgzkdc0bqna1rbp0zlrw7vuyg2hz6jcymy6aughe9wjcpiw2gqtwqmyfznon1vj' );
define( 'NONCE_SALT',       'lafptgnpqpaxsiiaewwprxgasnajo3mo9j1zsu9hlmbxyuliwiknrsqsmmosz0oe' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpmk_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
