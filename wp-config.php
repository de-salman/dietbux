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
define( 'DB_NAME', 'dietbux' );

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
define( 'AUTH_KEY',         '!9T&xi zDXY:{C69(lwG.7!U|g~!-aimnWC%pzLGlNch+~N}@DyRGHaU3RNvo?6t' );
define( 'SECURE_AUTH_KEY',  'vTq4L_x$|m@VTbx&if3~]l)UaJH=0RypHL~~d*L1b?7M7<k%.f9D2@aI#ikM}SLY' );
define( 'LOGGED_IN_KEY',    'MVU&},v4b`O&#YV~Yx>#Xv62r^/^yH!==^/oFM}ZbQ>pgU6#6G-P.8IKP^43gG*^' );
define( 'NONCE_KEY',        'F;w[MWT(vUpnDc]#{T_(0kyF+.-DtDC0M]u^V^7^=5mQqno;)5|;Bxbu^P1#ZTpB' );
define( 'AUTH_SALT',        'q. H&6;!:tAZy/|{`(CvQb N0Lr1}y<-&6wA#kS5!}45Zr~=o+TK6-Qqe~+JIWCy' );
define( 'SECURE_AUTH_SALT', 'R2bH0s0wo{u0?4k&p{T17,}J~0z~+lzXLAP2W@Xu<WINWi0>(PE.MR/u*u:@G4n>' );
define( 'LOGGED_IN_SALT',   '8}4q3MTURIFZ_Y`EaT^L6lE3/F;Hf[qc,OACsMunciV*q.>4IX_1D!iCaGw^`yw2' );
define( 'NONCE_SALT',       '2+4|Fq]KuK`~f_~Y,7;WqXnJ!YU6jL}t+,V@-!n0U(lHq:|!O/:j^~lROS|f=X14' );

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
