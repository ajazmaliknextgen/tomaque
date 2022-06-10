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
define( 'DB_NAME', 'tomaque_db' );

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
define( 'AUTH_KEY',         '@MJo,4E%3RaXm`WQ18(*X;#ah6V/k.wc%xN@ObI^2pUZM_AB$-ov0;.b7-i#J_R ' );
define( 'SECURE_AUTH_KEY',  ']~ZZ^O:ZcCFAfYej?,Z 7GtpwY~.ZfBtXGc$@eFWQ=KT*ecK ^oLCyh[$gg;]eQk' );
define( 'LOGGED_IN_KEY',    '%96?6hMu#SF9aF~y8p@-HvY?94qRwePUC! ~@8C+M8J-bmG+0NQWlc%KDa`&pGab' );
define( 'NONCE_KEY',        'Rpke${|IYl]|V^$O&NPD^@>EmmYN pG}q# $0;h]H!y/7y]gi8BpA& k(59jHP]+' );
define( 'AUTH_SALT',        '?JE/)G3N&QudL*dS8F/,4w%)X-irrb&YgS11&OoTuN-$bvwk@x 9x,3S<1Oc$:Bc' );
define( 'SECURE_AUTH_SALT', 'C454f#=S2*EJb?i_E6v*K9.WlInih)ShRot(Ib7%{UTl1+86@)#AU21-q)D|4?MZ' );
define( 'LOGGED_IN_SALT',   'Pe1J;x9Nta)aEc.z &lQY7xG~jjV5pZMRdt&Uu) Ae(q[w*TQe$/2@_lLGV<.mrB' );
define( 'NONCE_SALT',       '>!O!i4;oxEk.6Tq=OsP*LwYrlBS&)zMa3=z/|C#?Erg!?*<J|VHS<Zk5j24.gva&' );

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
