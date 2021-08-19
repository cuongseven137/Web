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
define( 'DB_NAME', 'lion' );

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
define( 'AUTH_KEY',         ',CZ3y5|974tw~J2s ,!Z`ZcA4^->Zv-Jrm4BeW&ui]$BwU%sx|G=RD[qhS)5yQ(!' );
define( 'SECURE_AUTH_KEY',  '8!z,p^  v^uC3&>^W=[pUqKii<l2)FTR;,hGq0}$F{9A5<h(r,~R,$QBVY.m&.m@' );
define( 'LOGGED_IN_KEY',    '-Wz0F]^jU#o<nD[G|O6*x:&[vWo5v>T5*:+1lZDhG6}).L#)/cqY)!kOal<Jr]JD' );
define( 'NONCE_KEY',        ']@:fA$6Fjh; ]Wsgl29i`u[9I*$3Q-6[+cL:{fL/=-b~;FS(;LQ`HrF+s~v9U=N$' );
define( 'AUTH_SALT',        '~oY+tos4k@Op$S(T2g+:q#V^!@{OXO*-H#kHjVV|hAV+X9E}9%oY?E_,`1$qyQY3' );
define( 'SECURE_AUTH_SALT', 'HFsAE$mW5u+Zc_|M60n:j[&Us+tj]%Nz)Fx<]tR:.Mua0+WJSi(6V?Y@>(KV1bg6' );
define( 'LOGGED_IN_SALT',   'Q3j0xw$G:}J=b=2?u-1&|l&9#H/V2Bs7jgPe4T7g[+k0,PO6CQRw] UU]zN9p==9' );
define( 'NONCE_SALT',       'pA MBnz%ueq`axWIHArOV{(c]n6r:}(~dUY?$d1C&NzLdb}CZ>D;qy6V+j63|o*i' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lion_';

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
