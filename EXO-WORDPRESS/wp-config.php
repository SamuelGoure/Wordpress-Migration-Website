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
define( 'DB_NAME', 'demo1' );

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
define( 'AUTH_KEY',         'AjUuhVV_MOvT_#in*]1bI/~=lO],zZx(8)1C(ieU^aH/nHon0ilf) 8Gs%+>> J]' );
define( 'SECURE_AUTH_KEY',  'Goqr5s3N9vU9NoDjIB`mhNpy-A=;uEjE Whq@@M.ulJuc=7/L;2?WRQ8:uAc_v{~' );
define( 'LOGGED_IN_KEY',    '(hau7_.1DY`zP?dPpIpCjA*xfh$`G*51P;F&zF,96A(FDa&K.?fYAp`3<pLCU./]' );
define( 'NONCE_KEY',        'xu/FEh`euRt=$jdB?@~ .M<IX&uv#(gOT.vYYb1>-)8kx;lMtC<ZS`B0Sz<o|NRf' );
define( 'AUTH_SALT',        '?t^U(g%iWl9Q&GV-YEb}#pu|B#M$5^hc!|+f}VAJ`6s<zyRMd|l0^ybev];ebd]m' );
define( 'SECURE_AUTH_SALT', 'sRFS}PfTMwGI[Wj/j<aZ4FPF/$q3c:l)&9I8lalCN$!65VE ,UpAK{V<X,[_tn:f' );
define( 'LOGGED_IN_SALT',   'UFRaEc4ajKti:gxDoDx++5BJ:GL6[CpV,4@fksy.MA;^Qe.7C>pvC^lnf1NW.t:O' );
define( 'NONCE_SALT',       '@[cr`8%?U,<9;4_QE~f GrKPh6D[>0w+S?%9=GS{:qT7KCjcNc.jfjsyJ#WE{]Y!' );

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
