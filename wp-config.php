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
define( 'DB_NAME', 'counseling' );

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
define( 'AUTH_KEY',         '2ZDt?;Z4vY7t{>~UCjT;kA?&z8k<a}sz--I6;sD f0DwQEkn)p;IM3{a5=yu0:GR' );
define( 'SECURE_AUTH_KEY',  ':z-~X9y;6$Y5ck.2pGQII[%}3j`FQVyV@&oZ[xYi^h!|D8FQ50)Npo+,(GhYj%zn' );
define( 'LOGGED_IN_KEY',    'mTw!XC0?IG%8t6RsE##ps`7rnjYD.qe]+c}c:1.*>T(7-r}F4H-wI&;ZRh&ZIt`(' );
define( 'NONCE_KEY',        'W(J{}DqI/K|aLgAtwt6&<I5vc)fW[D-5iS+5x5wK.Mti{U$Nb>$.gk/`dt=2zvV)' );
define( 'AUTH_SALT',        ' A*d0Bs0l)-$*mJ%Y{X&Gm1?d8*(:9jvAWd OHXB{t!84Ql]4;qH8/kB Q}Hl[tB' );
define( 'SECURE_AUTH_SALT', 'aU@y{E]2b`;yrUNg&N7EIiX}ZbuEy0_|t1~nVY*,~0Xv*X,vnhym7Y%RF[TeGBh&' );
define( 'LOGGED_IN_SALT',   '2j9hr8>]Fc=3G?SQWx9T:|`F5W6% ixxf%=q&ev&0^ +$o5?#DcZ|u~8glgBTb(K' );
define( 'NONCE_SALT',       'c6!xR<.y5vumkW#MFj]^|I_urDG;-+`|fITR.DK_C I(E]mVd}?8%$OX+r09fa[Y' );

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
