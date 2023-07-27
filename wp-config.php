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
define( 'DB_NAME', 'dp-ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         ';stnFNxnL0$y!{w%ReQM!2W:2[AD<@=5fMG[0+HcU.M-,XkIyh:&N]|XF3^.QZ@ ' );
define( 'SECURE_AUTH_KEY',  '?XgA~-F$UoAkxy#JX?_88;vLvz]/IGCJ.gO2<DN`qJA2{PB|Myl1Fumc8oo`wW1x' );
define( 'LOGGED_IN_KEY',    'iCU|x0% 4xwV<Do@WJ$-(gLqp(hIV>#}*%ufP*$v8K,; 5!Z^-ru5)*ozBM|v94m' );
define( 'NONCE_KEY',        'vB&9(9U95P@ZbJ?/HT/iZ,uOU+9m3s1KLyh:+{X4(+2R8n7|ity=ew:#;ETIjHAv' );
define( 'AUTH_SALT',        '#!HI,=<oxm!bhzx3t[#3%)>]QZnm,E)0LQ]dhFq8S3m}rXLS>0~)K:@D*v^l>m:(' );
define( 'SECURE_AUTH_SALT', '[f!xV8.Bx#e3%`D({/}DUOtpfN~}V3Bv=dEO}{l1glRCOJi2ie./P3D:sT5aXX!o' );
define( 'LOGGED_IN_SALT',   '?okGG9!bDj255teR(E/4QW4~g_Syz?y3hZ<eN12eVRPQ(EG=1+v-!|pW$ZiGXBB<' );
define( 'NONCE_SALT',       'k#f0/t?MN3yKn@zy:1m^|xeugV:llIF5_ oIbVq4 1n$^7/3-H5m1|=y_<)<i5Bx' );

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
