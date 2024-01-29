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
define( 'DB_NAME', 'primeugandatours_1' );

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
define( 'AUTH_KEY',         '8kD_s?^nw19h<fC_wiWaI5Q@lSA,4jGaQe>Ue;:^j%Ot&,74L2Dw[8>w:7.5/,k_' );
define( 'SECURE_AUTH_KEY',  '$0*,NfY1[Z*8*.`)9ehMgX6I#p{6*:@cxd4-Il&?g#[<X6eo7]l+qvjJ>9!T.qW$' );
define( 'LOGGED_IN_KEY',    'V0DHtH|w[TEw@m1`UvJuuh{;z#C^VyqOAl5}=YX0/[w2KP{h$Mu@9sm@eL@[9<Au' );
define( 'NONCE_KEY',        'kbF&W.b]b-pR`/Q](AcHo^.|zRT@T/S&L,+>2aRRx<Ao!Ud1/4~n&%8:6c[`R#m-' );
define( 'AUTH_SALT',        'q,B]pv~.<Idr;,Y#VO3U6etMH~sxahrvc_Cgl15={inBDqK,h/X-DSNVhqcm+Fz~' );
define( 'SECURE_AUTH_SALT', '9(2F]<*hCm+M$0lE-4LSB8GHA_]W1!2Y8YoU:{P8;dGA!w;Xc1^-zfqU3G[x(oHN' );
define( 'LOGGED_IN_SALT',   '*+K&v 26[ s-8M%u*1<@#^XL)q62]Nq?*eA v_q`|j4SO+I/ s*vXP[bb4:|}z)Y' );
define( 'NONCE_SALT',       '#Y0jhxJ]j=l<c!/|!W|eOPhHc.Z}RZ3;Z/:;BxoIsMd~,V1a0a(,esq]u:q$Hs]_' );

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
