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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'foodaway' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '-8xmBK_thXCEKop1}Yu;b9&LX[&(r%Vjs5K]s&>[U([>djs+)BAui1!7Z7g>a96S' );
define( 'SECURE_AUTH_KEY',  'gB9E|x$FGK9],$fX,%C~kRi[!*!LamyCM}qn~g)C/k@8C;L?zy2rs8&d{9r/<nT ' );
define( 'LOGGED_IN_KEY',    'm+W^*tP$J+{GVJ8X(*;^a@{16D.-.c/wS+pzd(ZteO1Hr,#hh[5mdTL5pfaXO9qQ' );
define( 'NONCE_KEY',        'dy1[Fl!!@r]?gb/c]GZlz7VJhx.v&;$ I5&$eAXa4E/qxWvSCi]@k^W=]^e`$FNh' );
define( 'AUTH_SALT',        'iRToWvOEh.{Yv:7+`>;dUI2;o{`6HZ`1,4V^X))f81QC@OfwLf]nxCE9-*c>M@vo' );
define( 'SECURE_AUTH_SALT', 'I`;Kv0E{5@3#si3n*6,Hlo +_D;duX{Ln%i4_rIm7;twfX~VdShByQ-ckLB)dL^v' );
define( 'LOGGED_IN_SALT',   'CY+iIUo4`x%~6~}bT90p =SJ6H._IXLom.-.,T+%Ng80cUUkxX($.&IK=PFT3AgV' );
define( 'NONCE_SALT',       '?y_Pv*,jb.Ft(^w!+mD%CCNK({<BZt8@Dl,Sg%[8x.H6EKXoIN[l2R#1uV]b`4,4' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
