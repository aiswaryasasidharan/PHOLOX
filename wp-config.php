<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'new_wordpress' );

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
define( 'AUTH_KEY',         'H0%2,-R6`.#DeY1XlUDnYA:{6X8. Gzw/&rZAm(:Z/ AJ u41.;>o_K(jCA@9}o+' );
define( 'SECURE_AUTH_KEY',  '9/]ag/jyfNW25],lNBExJur`O.@G )^ojrg5j95ERLyZPve|+1Bj1<xZBi![*)R5' );
define( 'LOGGED_IN_KEY',    's7-/K=I,O`>~%?L6|(Z~hJG(|B=%5xfpr4{g%pb$O3P`Yl?`Lo(&rg64,+oAK=db' );
define( 'NONCE_KEY',        '}^v|MA~X/$ZO#~bmC*E*sp$.4!#NONLjiY|TeArxBh17xY6K>K:V](X!xHy5.&II' );
define( 'AUTH_SALT',        '5g(US#iaqP[g`HvUKdP,<[{$ON#-.L=TV r8CsS3(s}Z?%WR4B!FQKgpF3-1wG*R' );
define( 'SECURE_AUTH_SALT', '}`sE*j#1]z/uRBly+r.WuUG|x`hFo#PjWL=2$TV2S%j:[tiY81qD3PO/NV[_gwW/' );
define( 'LOGGED_IN_SALT',   'jb:JfkI?5{0vWVSS]MCog6CEpUQ0M]?(P?Rj)c9F[k/A8zyYR8QJ1|<virl+uOqi' );
define( 'NONCE_SALT',       'WwqDHP@u,G3!YL0SC!z79?HZc8) Lps(1Qvam?b+f|^g8B?R1c.SvODNNNeJCw/&' );

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
