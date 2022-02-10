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
define( 'DB_NAME', 'urbanjoy_new' );

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
define( 'AUTH_KEY',         '(dU,+rAy3G$n3k=S_+%uQ%UCKBvch^t!r<wIpc|&u4N%5 tjQNB@q,BjzZutS+TO' );
define( 'SECURE_AUTH_KEY',  'lp=fZ}@4UD4w;K@wkAMytaT#I/42q{vvuMM.oVa6h/.E_&Z(0%U+057-*l0e&4)H' );
define( 'LOGGED_IN_KEY',    'd3*@krhB?r?w9zosx3nhrtOMlb$0>ylcw0&L;8{.XUiE(7`L:LPX3&jr+iSHB?t@' );
define( 'NONCE_KEY',        'q{2E{JGev$EHcv^b}?*y=?!TBJtL$=vT?v%HW,aE6]+._2%tNadcuy?O)HZV<!@[' );
define( 'AUTH_SALT',        'JPb/oXW`&~SIVr;xC;~]QZ B:#1nT%:w>iJRl@sBWQh6(E 0Q)(+BbW|),k83B8f' );
define( 'SECURE_AUTH_SALT', '1|W<9mNF!KCY+*8zq.TT|}#2iqC4{Fu>WS.V/,D#Ohai&K#!Z&X$>Ozl71jO|kd_' );
define( 'LOGGED_IN_SALT',   'j~Hzy,Ljz[PCpQJY`$^X,FU]8V}+|gPapU_-?~/<183)ljJb+S$hg*]E_i(3[NlA' );
define( 'NONCE_SALT',       'ysItVb]$,OBg#B}y1Jm9`V d4R=s5$/z5Ys5)U|b]O6[-#E-Tj-n@L^wVarjrbm>' );

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
