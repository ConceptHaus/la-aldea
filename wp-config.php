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
define( 'DB_NAME', 'laaldeadev_wp' );

/** MySQL database username */
define( 'DB_USER', 'forge' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ipJlBz5ays4ho80oULXY' );

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
define( 'AUTH_KEY',         'J@l;Euap(x{IKq%&%0d<5QO9X,/HOtfFc3{SXuBPvp_:Eb-^wj8=k&hUmy?-,x{s' );
define( 'SECURE_AUTH_KEY',  '*Jq`_RgQBN^W,OoTt^K(^1qkrd}9A}+k{0~hGY}tfwrdb>pMl,x@zkp*ub?uBcH`' );
define( 'LOGGED_IN_KEY',    'Gk-SW+fc@dV_~;hPa7P@Th]@UX&Q9XIP5#yj0vB0Pk:Y:lm?Bke/PrssU|k#/KHx' );
define( 'NONCE_KEY',        'NF%!&2_3l*a]JLflC@`>A>OV:h5.aaV>#L_{L-j<&bCO/k^#-IUMv[kpyZ_&n`UE' );
define( 'AUTH_SALT',        '4/8grsPwe&:>]T&sDU8t9v]4/,r3qvC_B1}eE|3F$<I|uu8iI!mqi`}->^;jxSx/' );
define( 'SECURE_AUTH_SALT', '`O<;[};%N7ghSyEz+e}3,]WZ+Yv5goV*rt7FMF^_7nqE2@fAgN_1oC+Du--j#XOX' );
define( 'LOGGED_IN_SALT',   '{wkeogHrtwUa^APS8%e[K4upd!dsLUIAmy8$Qb,TX</YfSKfFX!}V9=( V$TIY?c' );
define( 'NONCE_SALT',       'a8T=97|^dQ2%{~cTX,2q>zoN%%:+6.sG/N1dkKnh>9K[v5Jd9P]2#=O7)Ra&ip&u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'l4ld_';

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
