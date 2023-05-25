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
define( 'DB_NAME', 'saleh' );

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
define( 'AUTH_KEY',         '7 R79:`KVvv[}KgbQB<^n2=Nm9J+FR{K>cSL?RP`HB(2><0VL7VCVfI|B.85I2y+' );
define( 'SECURE_AUTH_KEY',  'p>qC)v$?Q?KUg`|wr]+^!$}1+hjW4+l6T3{~j#*-s!<G1h,dn)B{GLpJ7gS&p*7U' );
define( 'LOGGED_IN_KEY',    'e47wx9 iw;s}XX}#i77Y0H|.@]0_R/,;j-}5n+Vt_UD+LRn5-S@XvS`FXR50mH?&' );
define( 'NONCE_KEY',        ' _hZjYvM^UIq1q*tz[#d?kl6`_:x>e/zu|uQ%bas0VH>;bSFSEX`j/zu)F#JL7*f' );
define( 'AUTH_SALT',        '70[}U/O[d<FL;:BBk{O0Scb%X:P&s[w9Brd-b&86>^#btEy=g.(c_ dH>DGF>Kjc' );
define( 'SECURE_AUTH_SALT', '[Mc[${M#I2aU.#xE(4S%*9_D G2c>)N^J3(K:dQ*KONB:;{pQ2?Oi%`$TG|>ivW<' );
define( 'LOGGED_IN_SALT',   '/?AM<P5U8I>QaEwlB>qqo^Paw:7siclUXmZ6mKb31J3!W=gxw_,fGaa1#pRN!at8' );
define( 'NONCE_SALT',       'I]P8P,{w>b0{A+k5@rw@5x~@rV3oIuQ,>hPBWu5ig14*x;u9@rcl!kM)Lbzu#14K' );

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
