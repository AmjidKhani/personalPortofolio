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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'amjadkhan' );

/** Database password */
define( 'DB_PASSWORD', 'Seh6-5OAUCf3IcUf' );

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
define( 'AUTH_KEY',         'Amnq(Mga{Yv.QB4mjYv wRuuY~ &$FHW4DUZEep!09QEDsYT*Kp&hQNy2T^<XQ0p' );
define( 'SECURE_AUTH_KEY',  '_=:gc}b,a6:y1_A>W$rqs)lp+sqXgf6~{5rS}*tUVtPKL9-8&le,I%nx?].Amg Q' );
define( 'LOGGED_IN_KEY',    '//o~P@<.E5,?if$)/D*}{J,)N_EPh&xN`{m;;Zo{SYq8loQ2<Gq0@eCRj:>IVyfK' );
define( 'NONCE_KEY',        '<PBl,e+0T2h5}iAVa23qE3=Hq#!q?Cdq(dR(}JN!LnR]Z+B^<(T)v^/D5CEbey7{' );
define( 'AUTH_SALT',        '19(l[ziW)]U.@j<nrqJy03!X+g(FBIpW`[ NH~=N~e#myNWgMvRZ*kei{{_r.qDl' );
define( 'SECURE_AUTH_SALT', '(438rX.?jP|dMeEwx|+M.zC*#C+ScRt._c0:4s3#FJB#u*;h3klZHLQM):<Dre}}' );
define( 'LOGGED_IN_SALT',   'u!]&4c{p+B+}XM=U? *)fmm+)y^Q)8&wLE 7JdlmYe8nn/bT8`ua:2:ka!]zsWG2' );
define( 'NONCE_SALT',       '=1NJE{@b/+z0u3W0*j1%[b1>fj4-Tp!(!5bv{[F`u3/su}Q:Ul)Op7nPTW+5[D:(' );

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
