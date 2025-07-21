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
define( 'AUTH_KEY',          'mG923=x?*>m~!Q]o.MQhWPUvsMpjORCgt3D.Rd3aN[g5nBnC~-<Lw>~Vt Wq,{1g' );
define( 'SECURE_AUTH_KEY',   'mV{CL`o2x~[dnZsiw?W?<N5Mo^:Oqoz+q=#j.G36B5?]7By(HdAa;Wi0kuMr4[#R' );
define( 'LOGGED_IN_KEY',     'YyT(H(2jB<dd}j4[E5PSHWT.[aH*U<H_0X qa.U;^5cmUIIn+$>j#B13hu,>B~al' );
define( 'NONCE_KEY',         ':a!]@7,%894Bieyy|Ne@Da^rEzhXfO5mAeCU>Y7)`feaT]Ez]1{ys{5[7}@:80)0' );
define( 'AUTH_SALT',         'F=9R=V}r!H:*0-19e^}gFy%QcWS|jR8DB9RN&+MXyM}(?5OeU9a#6Wk:vagaS?EL' );
define( 'SECURE_AUTH_SALT',  '>FvcQD2*u3?QB7,t~e,`nO8BFsMHJN*R0cM&[H[IY-f}:fnlJY @k]hSy_Iy25Pe' );
define( 'LOGGED_IN_SALT',    'ZUSXMU7ItUJ>Ac3&sS6.%%:|Ku=jyPUPgQAZhWGZ@mRRrtm<BkhgDBX(%F)r%1pT' );
define( 'NONCE_SALT',        '_:k3yAG6E=/|l<Kk3^<=3QG]K&:Nrdc29eqVwz+x8~>(lxNw(V){t@is:P7|Xzc]' );
define( 'WP_CACHE_KEY_SALT', '=C/b*>Lt{m14Tk)icAeWKy/36yv2--VUYD)rt=I stS6wVoUQ@1?6HYP$qRKjTW%' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
