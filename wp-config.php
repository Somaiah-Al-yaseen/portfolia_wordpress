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
define( 'DB_NAME', 'portfolia_wordpress' );

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
define( 'AUTH_KEY',         'qH$A>+e$QnT6W.%lyeTt!G@{nhVHq%.w&h]LUgvr]Tr@^q+$ ^;Mx)i^;zU%Ih38' );
define( 'SECURE_AUTH_KEY',  'g?QKb,J#i$=UBP)a5.I;Bj8x`nI44D^E-Xy{$rKkW,~,[v,-JT{>F}[S8S+aF?WO' );
define( 'LOGGED_IN_KEY',    'IR%!KNjW_( =]2ht`m3G9)<),G~d]3@gobcCi49T@ cK:&2&@KA`~&doFk[kEj W' );
define( 'NONCE_KEY',        '7l+3LQnbJAs9l~8lg6l(l/?AGRMvARFdd8L7C#BcT,),,@2U/=:6bkm[X>hoUW.3' );
define( 'AUTH_SALT',        'Jd.u$N8ZOd;ehOXr_f!,};^=^$NAWJJqu?}1; aR.O9P_hh1.d>.i{r%nN$@jn$|' );
define( 'SECURE_AUTH_SALT', 'N;a}*,<7YOB@!8#A20zfOjf,}J*Ip$un4Dqi,IGsfSl-psyQ%wYxDl/GoD8k+Gj[' );
define( 'LOGGED_IN_SALT',   'VrhfSz#_2@dA.RxF~{eQg aej_/.@+7MOKRM1oQ/tXu0s9L-%e#zF{_ 7k3Q[!cu' );
define( 'NONCE_SALT',       '6(iT !0{,8#_9M};:y#n8zliCH#GuI&d*UqqKWR@73H,0Db@r!bxZYoufS2-chWm' );

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
