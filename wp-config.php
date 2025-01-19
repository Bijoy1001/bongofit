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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bongofit' );

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
define( 'AUTH_KEY',         'F-ETkfkUVwi$.dw6[IaX?a4w#[}8zIUn ?1WgPHpKd,}g5[`/OqWOJq*q7aHL-mm' );
define( 'SECURE_AUTH_KEY',  '>AZUvHF~a0FX)W-b# uqkJj`Rk<}Kpbds<JR_VN0>exuQUT0;>>msGJmL6|UQf-S' );
define( 'LOGGED_IN_KEY',    '63`7QUW,(%}kge8<&LP[f%$Ov!28`BI4o8EJ[NqVL(LTpnvQ7%|M/[-]`S<)_911' );
define( 'NONCE_KEY',        'Q4!LLr5v,`w0522`/>`w*cWW1wXD0QdIc&3d&lxTei%t~ceNI(ZmU1nU>P3{K7yL' );
define( 'AUTH_SALT',        'yY3`8APJR-jO ^%sHPbM/0pA)U9-2Oo|*yd{LcmC?:@vs9|FU8FI(Lmv;S7zYWfV' );
define( 'SECURE_AUTH_SALT', '~yZ$.)tP^EQI`Hl_B_Q!a-&^BaeSWSckvJC0Y.v`HRu/n?l+O`B3h]/!X0x[#I0S' );
define( 'LOGGED_IN_SALT',   '4>wba,@tkeeoyzuJ4|vpsrd&TdZg;%f[]r~OWms{TRbz]j:A4g3B@*BbJ5/fN/YQ' );
define( 'NONCE_SALT',       '!8a4ssH%w9##4P-X3w`Rxl!e.(kma2lOAGVgQHx2=vED=%j?d7Ez5{^E>ipV}X!u' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
