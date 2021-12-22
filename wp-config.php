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
define( 'AUTH_KEY',         'P!TX[.[f[|@~:1D<R,o^D_Y2|0f|JA9 XW}hE32^@~._K,Dtu7-_A1<__Z{f,7,*' );
define( 'SECURE_AUTH_KEY',  'vM]Ly *T{[2kK2nrVC,;8dDAfk~B|x<k0rRY<C!X&`Q8zw:24/U#Ew!7c CwMnD*' );
define( 'LOGGED_IN_KEY',    '_^.}XfEI^12rm@>Tnn==I$:Cy1Rh<>T;nIw##7sy:J^kkCqmCS*M]+sMVX=ACSH6' );
define( 'NONCE_KEY',        'y)X/G>[Os`fezLw_@Ewog,r,=6D}d_#uBeJytwQ#13m@w2ff-eLmiNjZ00#Yh3Cq' );
define( 'AUTH_SALT',        ']{zTCGbpZfR65siw)qvMh||s,tmQ]ONLcX0,}*viEcbZawlEL^!dL^kq5ug2^;c$' );
define( 'SECURE_AUTH_SALT', 'kwSo+KF6yf[aelgGP;C<S TZB/ey26&Dhf[5`V~mKc6)k%e:L2e7%iI6x YF(neN' );
define( 'LOGGED_IN_SALT',   'AVJm}O,x?zVD5k>+gae_$]_IbCpvWJ8t:88U(U$s$cUFk3e:@QilOe*!,l[Xiezy' );
define( 'NONCE_SALT',       'y]*&>M)I%wKrop,2 5*J{0qpGab5xr3M>30}kJ~LZN8t5@taxT=rkX1{m=`gqbc~' );

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
