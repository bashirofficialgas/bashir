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
define( 'DB_NAME', 'bashir' );

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
define( 'AUTH_KEY',         'QUFuPL+ejKgRX4d,o+28h[^RlxjwfGt?eI3=3SkCX#nnoicco,?Sv:i>V%pSE1kh' );
define( 'SECURE_AUTH_KEY',  '4`V4/nJqhrayBl(Cw*@dXwa,)1<Rn:@4%-WO$oL UgeA6 =+IBP)mO4yS}Xv4RVm' );
define( 'LOGGED_IN_KEY',    '~FW)2{=A4).]a1Ng3y$&kD/_LAElpqD72Wr9]skG}}}+Ak~Yc}NBuLH;?GRxU.gH' );
define( 'NONCE_KEY',        '*k}Sw&cN/G3M,+ZC?B;Aeax~S!=A,`?6x_)Pz+beV6&-)>?~(gl;81FWi@(bl>5`' );
define( 'AUTH_SALT',        'h|cd/*3rse{BXXKi#2[]jYtEpg_fk1Z^n2VkKwkhE=6#tOk]I_kTw=]Tz6sTh*@E' );
define( 'SECURE_AUTH_SALT', 'jEA7lKjh#+L2[Z3L+^PQ57fMpyfh9.Hq]L.-PpYJ~)M$%Y=TNyt.LXkz;>xD2 .a' );
define( 'LOGGED_IN_SALT',   'UHrfyPQvLD6I[)M(t>v#IVq2n##<%bhX<xyT`)7C.:Cf![h@Ar5G~P,(wxGLu6Ik' );
define( 'NONCE_SALT',       ',+0AC3^#z@X2P2Vy=CE`po<[5W15]u99-@VOL_U!4r>H|Mi=d7mH+1:dF_a>/|b,' );

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
