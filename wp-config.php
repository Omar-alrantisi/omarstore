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
define( 'DB_NAME', 'omarstore' );

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
define( 'AUTH_KEY',         '#I2!r!^y5c<VZb5)l>9i^&RpGi6z{N-O(4-*apj{[9#X&RN=zi_,y6>3QPxhH>!T' );
define( 'SECURE_AUTH_KEY',  'M!QlDR&?1%vdk^N< zCgo6)8u`vK<zj,Wt@Vr00{#.i;4}K%Nr`Cy>2``4|2=Cxn' );
define( 'LOGGED_IN_KEY',    'q`y26A^VdE)5x0m#lX~ZLI179La *MG~R+ET6:nCoH~DL6tWW[Dp8fc5O98P/U>R' );
define( 'NONCE_KEY',        'cS(O60[udr0Qf+d7/hQJ*9al0ftb1LhLpE8L&O|,>@K_:0L<w#iGHr5QgdpqKt^,' );
define( 'AUTH_SALT',        '>Irx_o2G(P}*6tf!J_3>8t?[[s#Ker7`H0N^(d+]% A3cP0X}>[(x?ZvPmqysu37' );
define( 'SECURE_AUTH_SALT', 'sgda HP6+ {:*=kNcy]{TG~l)|1qpuz<oGi[b+|AD7nh![z;eJZY0)2*W$b$`,Xy' );
define( 'LOGGED_IN_SALT',   'crOkh] 6P1xYl;uRl{-icUl#bFK$sH2+93hA=_g6:ExUsP {_EOUtd|RXE}s>a.V' );
define( 'NONCE_SALT',       '-[C5S7k/@3&x,jzR8s,!75BIo`]vpW$99itN</9?K*Lg3Am`=.,o*a|}g_rSwNko' );

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
