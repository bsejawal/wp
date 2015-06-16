<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'demowp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'FceK1mvrfpNX#hDiFLOk4{bO&%#$y,~;~qW6bz_l@vIh~]bH&5`Ni:7GUm] UWq5');
define('SECURE_AUTH_KEY',  'YL-,^rc=!`/HS#-1k-F4Oa@;=4FBz% #}Yq]{jF|%Ti[<&UT#r~[{mx dwB~V|/O');
define('LOGGED_IN_KEY',    '!YgjlT!zmGtc!2/T8>j7(,9+2Ija>RiUk (^f]S=Iga!rOdCQMp0]4X}<M HFaXL');
define('NONCE_KEY',        'DJ2Khz:oG|(1){(-?8>^F{%5P>k> kU,%~P&Xj^PFAvPa-,:J&?pXVB)ak)}_Yl?');
define('AUTH_SALT',        'qIt7D#(3lQFu$B8mdzcff32a>FcrG<rZS #Oe4/KfihhP1I&K^k|5):CBBh#:cEZ');
define('SECURE_AUTH_SALT', 'WC&HY.wG +K38(:XK_rh^?0!$PT?4N@9^S1i=cw+m,dy$]>tlw.G/IfA`6?6HFiR');
define('LOGGED_IN_SALT',   'I%7ek]0)!!MbvpmZxWgZ@/*&2$#qexDqn+Y),J4k/1:]Wf B`w86rrik$7iN(qYb');
define('NONCE_SALT',       '60y]:2-/9+jrZ{$iITz g(2yg)6x}[fKX2}5@P5ti#&cIFpw+m5(79|d5~w9ovAm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
