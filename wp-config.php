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
define( 'DB_NAME', 'codedesign' );

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
define( 'AUTH_KEY',         ')u@K{f(_Ra.Z1g;alWD#?Vy4S+c:=rsAG_dL~R%[o4yHFZ3_sgjuWx)KNob~Q#JR' );
define( 'SECURE_AUTH_KEY',  'xBisXH32D@aXbG,[UzGqE*Ns@Nt;YWJ#1m=@btG|`NJhEOQj!;w6*Ll=YxFeih)@' );
define( 'LOGGED_IN_KEY',    'cMA5p5tquU|4gxun5E4d.irzk-G*^MG=2^@u[s_+H>k4^~=Ea~P&|]Vt{bXEBD`%' );
define( 'NONCE_KEY',        'Br~_W$%KhcB{uEJ6:3vlm(A0;n1$*HP0r$jEEqH@pB2isBtg{RgxCD>I&zMg8%95' );
define( 'AUTH_SALT',        '+zwBmL;Xr)S5??eM4N<{Kxj[m63#evInn]m%|,*g& bIvu>$.>P#?N]x*Q_ Ood|' );
define( 'SECURE_AUTH_SALT', 'N9U#?eU4x~%S>OV-|*7Pk;%`AJL/YUH$!X?0u-V~HBSx{Z*ihKtBGS:Dr&XNdbrH' );
define( 'LOGGED_IN_SALT',   'Nx8L pzl$m<7Z(lgVe)uK*8OC*wcORB_^=341Cx`lD#T&^1Ej[.)DKuG?n2wvf[*' );
define( 'NONCE_SALT',       '[4:J2,C^%,r3Wv,5BP?$2e0y.<R3u=SreP!jjwok^cqyh^ umB%J@c_Rx,ZMQY?<' );

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
