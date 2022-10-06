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
define( 'DB_NAME', 'WP' );

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
define( 'AUTH_KEY',         'j,38w ~u0:^=.>59Hhh+C$d_QZ*54g&ZMP+qfJP9uOC.x`lu/+>]-L~ZMnA;21kD' );
define( 'SECURE_AUTH_KEY',  'Scp+}G=X?i~D[s1mJvQfKn5)[~uf;,spJkR;jZe,fB&%{0DshwAzQZ7.F$L1]L~J' );
define( 'LOGGED_IN_KEY',    '7suRQ!I;*>8b,#k %wc_dlBM(O&]]Dbziz, jHau(8aMohwu39Dgh<9BjR,5H|dY' );
define( 'NONCE_KEY',        'U,JlZ<s(l>4iX-UuRke|Ez_/5I<Zdc_kpMWTI8RJ3/L~,2G8e1m0KJIXA58#>=b8' );
define( 'AUTH_SALT',        'b[|pg-T^0c#) f!VmN}&o)>vcyvW|;P*3=_E5r?Vs]D  f2h-AG##gVj$^Mm50a_' );
define( 'SECURE_AUTH_SALT', '^)}@@mK3`bKo8mf=k2xv1F?}>g|{GrjcPW-4S.!zphAl[J.f5&AyFyIg}v9>^w0b' );
define( 'LOGGED_IN_SALT',   'dxM(ooNv|{aaj$/+Nx].5i4[se[:,`|t*59B-MJ[T_b4w9e$.3iy@$A^+2Bs2RRK' );
define( 'NONCE_SALT',       'WYW8]CPx@~a7rP9@PD^8oZ2S&[<fWV4#jcLikyo`U!L0a|aD}t&ZQl^NG-BGnWhp' );

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
