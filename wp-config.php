<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testing' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '-9 Rl+M-zQr$^agoP+LY~fme7}eFue<[vm8&7MN#R4fhRYKR%b=gB&DLoQfD@{xR');
define('SECURE_AUTH_KEY',  'nnpn++L2)rVb,UMAj+g_1@HHwW>SG?qqQ0q09gf`Ur8+Em*5,`lgxrkZfDJXpDtS');
define('LOGGED_IN_KEY',    '$y3j-PJ+jL*D8e7MjDvvcgKU**fge%,trr?tROLk)Ho} GF~l:u&y]]<[!n$gj)1');
define('NONCE_KEY',        '5{7ARhDvrXA-<={|=9uq9=c|T:r |nh-dUWVM/CR_?9<ULKG1]N`{-<_4.*itTs)');
define('AUTH_SALT',        '!riWjI0+O0/}&3xN]OzxZ)[1Q0#@%[(KW5MPzR(1MB3P.})P3?:zzf46,3?E<512');
define('SECURE_AUTH_SALT', 'NfwL-6>b_zRCn+]^X/+~c:0Vt6dMFw2r-fi1($sTL|+<nwowu4hi)H$/@>;qX?ZD');
define('LOGGED_IN_SALT',   'oG*S;sbTp$nJi/r|)d93X[x^9FW=eoT@D!%?~ga16PXS&sr^:P`]|EM.-ZyU[@.7');
define('NONCE_SALT',       '=B|&kOqQlZ!os:sPfK_vwwZ7QKnXL$,C)3F|( PuS4?y!PVVh54m|zFasaAPu@Kf');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
