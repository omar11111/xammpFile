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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '(zRIzL`D>=RRjpBwx6HL2E<pO>G8~4 !X!y6Lyhp89G*c ,Hnnn{oOiq|5}T>RbC' );
define( 'SECURE_AUTH_KEY',  'Yg!}NBrB(?-+`hTAOb~>r]*B:$Ep*4jccX&-iseU3RO mZdbD&=`yHtm7t^>!,^c' );
define( 'LOGGED_IN_KEY',    'Iu2qY[^oCnj9mTZ_vouF>(Qs}yqQT~|1nJplb#{^}q!]UuGc/%MjT1V^g=EnxH.B' );
define( 'NONCE_KEY',        '|f$&e5/x4HJFaMDCzY&M3m,,oF=[^x-wCz[7s1e;85gpo cSv?m*)e0+_;(Fl-gx' );
define( 'AUTH_SALT',        'o*$QmS)0FuH.oN<6 `eTtWzhB+_RT~<!*Q;O]EiSJ:e[Z,TT+[8gt%Nn@R+75C?;' );
define( 'SECURE_AUTH_SALT', '#Xe{tIMJEVCD<lIRQ]7k|:f7R0cw+UipgYLPNOF7YBJH$_czocl5sma=eF/YVw[G' );
define( 'LOGGED_IN_SALT',   'm~6}r [)(<a!S+k)M:iwXF~F7{(Sn+*<9pFYB$.)s}$~zx K|anqL!_Fp<vZC~><' );
define( 'NONCE_SALT',       'T~-;9NKWK33 b+4h~896}1h%v|eK|]ua@a>*_RZy#7Ed-79s)+nqZ:zi0~.cTS+?' );

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
