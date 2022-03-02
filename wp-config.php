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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'CTgH2Hy0GIaoQOTg' );

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
define( 'AUTH_KEY',         'w) 2L$9eO4b^ZFnTF!k,lZYy4?yRPNh}vFg]MPagX{^7b@BRs)5:@~.*Xeu}Y4;o' );
define( 'SECURE_AUTH_KEY',  '0t([/ih72jg|B5sj?)~=kAjPe*=1{7:oqR9;8GP-hw`>_35!G3mfvne.( s)mUc)' );
define( 'LOGGED_IN_KEY',    '0DO3KA60&+qo0}QwS>mj-um>-dz[IGNU54;0:)u`VYQ9L[S>U`l_fj4SL2a_3-(m' );
define( 'NONCE_KEY',        '04Wy$]x9;D?+[<wSY+C~2^9WIDWBfLFdY>F::/8Y&3|jo$Z(ug^,Gu{3Qe@3&E5p' );
define( 'AUTH_SALT',        '.(9$vmwmTOr~P+N_9lR/agg$Pl&pRy4YP9Q0>2:e8Y*x`6*.cM*Q=M7?RQq V Av' );
define( 'SECURE_AUTH_SALT', 'W@O>3l)Fjjya?Yb{*ZbeHu?SU6B0JS}+|s0w],VFUn(#g j9;~J1#;> 0J<~e4K>' );
define( 'LOGGED_IN_SALT',   'J4ntj%1@T{4>8M*3H7hu#YYKO|oJ1h/^3i;h$#sVIqwN:,V4#K4^NXq}:.]Bfz3>' );
define( 'NONCE_SALT',       'dPk,0g,{D@4FKHuc>y8}|y%Dmp0Hj$YYhbvlPl`4UsGZ[W$zkNcjeOCARWxuZ**t' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'port_';

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
