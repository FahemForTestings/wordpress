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
// This lets me install plugins locally
define('FS_METHOD', 'direct');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Y.avgGtocf$&r*^-rM]+ROd4b5q[SH).kG!&sQU}@! R]5;_p_kw@ybJ>g}@eKO{' );
define( 'SECURE_AUTH_KEY',  'K:a+%<eM[j7s<u)!WR]Z>2fM$34N?]h:3j0PJ7)d3zq=4c B-aGQ|GahVYt{o/]%' );
define( 'LOGGED_IN_KEY',    'SAoggRPt*z%imG /!k],d?QB!Ma9r*)Gy]9a{KJ<u+H}8}1CXtL,bZ1x^1iP8V5o' );
define( 'NONCE_KEY',        '.{5|U(c}N9i$ Gx_Tt>qd!Q3@EDHH!6qR[Y GOq`tfcJ4=-0+Y EB3RCO HBgBxU' );
define( 'AUTH_SALT',        'qp*`VqsJ9G:Upj%6@9+*JYOH wS;l=MXR1qQ}Q&/1cZCCtJ4M^`&v{$tFv+uO7:k' );
define( 'SECURE_AUTH_SALT', '+G2tgAw]KxvttjIiBfi.ymQMfq&JnAnvN?cjs5^bsO>$..@oUn?v*Y.FZ)4MxO#(' );
define( 'LOGGED_IN_SALT',   'P2C^q[^X_+k/VM Pc;g*;T+9pxsEVdo3%;7P>z9s0^%w8/M!gLPS6d_t 8$@Ki!F' );
define( 'NONCE_SALT',       '.S#kD_dEOZ*M|)F|9:J{p|:#dDQ!g3DUsD?#](*>.vE,F =7z5j?A%>%C*_CZHtL' );

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
