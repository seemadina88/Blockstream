<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blockstrem' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         's!IuW[Aoz&rSjf}1|^#[gN4XdDbWt,I--IQ+~o<_y6(:]iq/z#}b_DPEpQUp/1^o' );
define( 'SECURE_AUTH_KEY',  '.?Ks|;[uk[m(GoD4mk)%{PyVEc6YIY=ck!.>-lA-:{9]+@s~~p$CVN(x34)#eg-j' );
define( 'LOGGED_IN_KEY',    'GoizuT(*J+3l2pWtYo6B[`f^D9tt&w@>{xE00`7 7q* yU}iwO@q6a0(uTpR([//' );
define( 'NONCE_KEY',        '~F+`u%3y5}]UF:.ElCBv5Et6/R:lEsxy|oA4_ 9?~I]{PXebk *c5cfnfV9W _MM' );
define( 'AUTH_SALT',        'Rmmy*.0!XXA&fk|OWzBS7cN>zG.|jR!#+vd^D#3FY+m((5q(S1km/Vh$E`oA7Th#' );
define( 'SECURE_AUTH_SALT', 'pCe]n%Uc6I!G}vC0`<8GrG8lii_qDWRujRh8qpJjjN-A@p)udn/BUPYPO(+G^G?o' );
define( 'LOGGED_IN_SALT',   'Iv[Br$gj:xAgW&RwctzJ.7zI~kkYkN=gBuUqKMeOy:LUc(_Xw>n<;G.T[kopZ7SI' );
define( 'NONCE_SALT',       'A+;Qe$PbaN-%#G+=g*c~tBCTt XO%2$LL]3?o{BF *0lY Z`l-s4=y=j5#T_W)MG' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
