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
define( 'DB_NAME', 'lc_waikiki' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '-@9Y.PwGJ@fa{,M*B5wj!u7;<%.}E`AQ?zgfiaLQ&]]GRa9zV>gR&DZvDm8I^EQ-' );
define( 'SECURE_AUTH_KEY',  'r>i=?iIeR%!aS>.5q+DcM(KF Y@Q3^v2RHZzKdVf9:rt@Qsv@;r_ -$G%d&e6p[~' );
define( 'LOGGED_IN_KEY',    'xs]mF*.ryLpi5ywB9:x=h([C{c-7$OO`$r^x+8JEci7RMz$Gh.KG[{7>5{(QGe/c' );
define( 'NONCE_KEY',        ']G0&,iMXx^>V3vdI+T/%YwJCENrt*iA*~p3/}P>zeT~[RyHw`p~LA3dux?++}ba;' );
define( 'AUTH_SALT',        '(0i2rjE5_y*q5kP_cpq-@j8`KW/]cuOmUf7`)j8m<e/<5HYPsg,/`aHg!b[!DbH!' );
define( 'SECURE_AUTH_SALT', 'ZvVfUp3XJAk,WOg#7G}8s!6?q y^z&4h:wzMrE _5g0IcR _:o,>|)v]#)%mvu.#' );
define( 'LOGGED_IN_SALT',   ':AxJ :QkWAMLPQt!#*z/XE2:1A<DpqdB5;Oa`nT,yDL*/=[k&MRfa[l$Rykc-kEw' );
define( 'NONCE_SALT',       '/IsF0DXNmaO5D|_Qc><fZ,UL_{x6yXE@N+@h ;{<q8_iKV57t%o,vgI0UI=VpuWU' );

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
