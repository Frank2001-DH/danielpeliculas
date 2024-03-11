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
define( 'DB_NAME', 'danielpeliculas' );

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
define( 'AUTH_KEY',         'xUd/O1.x~1Sc5P(BoaQ>gD0P0} `^m4tp4siV94KY4w8ilIc/n;i/@k Cs9aBnZ+' );
define( 'SECURE_AUTH_KEY',  'QP)KCJDIj?Ta@*iy-Q,ScC`Gs}@Tr!Bue8;php}>hI]}Jdw&&J@P`Qxr^v)CdpaI' );
define( 'LOGGED_IN_KEY',    'w{-j;x~f(H 1/f5Gm]`vA]]T6d&lN,Tk3yJ(L#<-~Aex#(k &Ci1vgU(]#hCZ(KO' );
define( 'NONCE_KEY',        'Y2 <x,2<voERDdQ~3)e_me<]7]`m^G7Y:Z3l6?26B$Y!VvO9[q~(uMz,Hr!VZb@Y' );
define( 'AUTH_SALT',        'ZK}ppU+`a8}MG 0-;n43Zq&Pf{V{?TgH,0ctwi7so71Y=D6=-p`g#+SG0Xg_R#0k' );
define( 'SECURE_AUTH_SALT', 'w2vaN^M(k+2,|0E|[0YJD]3n~GWWg}wCo&ah8t%Iune@fHoB.+Aaog6.2`RbT#Ju' );
define( 'LOGGED_IN_SALT',   'M5dCE%<h{bt^<O?F(2^|p/b:xw&Qd8KCr;q$AoTtO:)q^=1#afP3.JYbU3^O9IxF' );
define( 'NONCE_SALT',       '7At2:xu=+r(j?Bd5(XwyaiUNUuc5Qh)^Szl!8=<JGg67)6NQ(epXc#q?Yh8Z`]x,' );

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
