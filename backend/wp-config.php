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
define( 'DB_NAME', 'mslweb' );
/** Database username */
define( 'DB_USER', 'root' );
/** Database password */
define( 'DB_PASSWORD', 'Swirl2020' );
/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_general_ci' );
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
define('AUTH_KEY',         'Ga-~~6?GvI33:~7Gw28+Y-o=P-N#@(sV@iR[N8OR-m+;60Ew)0yTkC|YY85)i{bV');
define('SECURE_AUTH_KEY',  'R4$<-HT8|$_6NO}(t$pM(Z^4*>;/Beg}ga02yxDY7>ji-kN%[N.YK#P?7u,COFuW');
define('LOGGED_IN_KEY',    '@PZ=NnLj&U0USWKp%BwO@xo%a<bz f#x]IW9Y/YA`7ix,~L_;i4?uyTaCZ!.boWD');
define('NONCE_KEY',        'F92P:JsRAX5.Kai#>0c6foC0EZ9:y-Lyu:*p6CGW*[W(@WfS(u0x7tU=<y1!5z<k');
define('AUTH_SALT',        'eF7f1<:++MTs^-iW+OKgbbQ7W<E>Bu1:P.?|/Bebg^Tj:5?[tC6]N+4b]%yjX6)h');
define('SECURE_AUTH_SALT', 'Dk;t!d0_|t}I.dJlt}+Q#p-/C)9+&|J[6FNb88lL-TP5h/5ZA|!YU^n?$GO|l-h6');
define('LOGGED_IN_SALT',   '8>2HRMDr[-g[-M::v0MLNl^bO1/S|{$?iqUtXQ^W|(GA`i$T0rK#&Ja? >PbP-=A');
define('NONCE_SALT',       '!p,JS)rBdV*FS6&;|T1gJZ|%[KxZY_?;VgL+lK~nYe<PiqVVBAG6n6/>nY&&V*-j');

define('JWT_AUTH_SECRET_KEY', 'your-top-secret-key');
define('JWT_AUTH_CORS_ENABLE', true);
define ( 'DISALLOW_FILE_EDIT', TRUE );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'msl_';
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
/*  Theme settings */
define( 'WP_MEMORY_LIMIT', '256M' );
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';