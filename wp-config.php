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
define('DB_NAME', 'hellodbwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '1*kv]Xasl[%VLi;tJbs.wH:NM,(e)<B=?;o@!W<4c-ZAS]|1ue;6K<++k5?`Q4tQ');
define('SECURE_AUTH_KEY',  'N:y=gXN!to<~/dWy1%jL#C4fSg@-,+H-$yzKg72!&,M-)dw^I+bi#TH|Z=:O,hDn');
define('LOGGED_IN_KEY',    '-${T]l+s?XBBCBB:897o_Klxorv8WOuh&c%jfcpdTP&IyOV9t^T,N@t.:Aq~?jKn');
define('NONCE_KEY',        '$ca[d,&mQcb{H7f8[T8mOM*(2|xHRR+_SZTGerzKyv;M#[hy8F+=-+A;5=<8^aEF');
define('AUTH_SALT',        '[WVsYy&QfqTcp5OfGC3UVFL0}Fw=^G4lT:@E-%6|P_%S|ezFzMs!d@ENy]7/5Q2W');
define('SECURE_AUTH_SALT', 'L!7L!5fC?ZKjT+Y{Y{&,`[3i;AXv-2ZX@,b+6*bGXRFO[5&%nT`uj=Sw6!bq])|~');
define('LOGGED_IN_SALT',   'GhW<35w$ll4 s(b|{3VG&M@{U1c7MA>NO6QvZx8OJ{#/E];$[l8xph-$NL?m+_<@');
define('NONCE_SALT',       '>|j2a6nU9>Djz%>bT?!-UlNuns7MYqFeWal#/o5KiWY+eC<rYFSQM;2b#nF6`xIC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
