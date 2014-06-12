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
define('DB_NAME', 'iskyvideo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '@TWU+E%/|abUR65TedW,y9+u{/cm~FE?WJ|qV,QmM|}4|H|c|NMGfIQQqhKg~A9F');
define('SECURE_AUTH_KEY',  'sS++&lIfAw,?rSlD3QI(2lTdpe>8h^$yhmek e3?|e+ze8[w*{N%=/^l+f`6VJ+|');
define('LOGGED_IN_KEY',    '@+VP9-5Nl*lqY1-&WrM2KNe |u=&3Z,G?_QYb&QN?e&DW2y [G}>d9*Ft,h2|#yB');
define('NONCE_KEY',        'C%Q?9+MfyScvDVD[}!3wZ./eF!.7pD|X *j4+NMiM|O<:3X|g(IF2T{lT5&BAD !');
define('AUTH_SALT',        ' rCkEs1>G-;j1gVP2sQm^[VDs&_oFV`.E9qayKblbdSHtl2]YEFbepCZ}0xx,[B>');
define('SECURE_AUTH_SALT', '5E/U.HTp8~.PI_CB]L)tn,_dVOY@0#2.06oMqtUzV&1dREg+`h6}X-DekB-AA$?W');
define('LOGGED_IN_SALT',   '*;H_T(_Dq|mzPkb5)shD8sj|TF+W|Cvg9g_472{t1Wf--R5k]=?3J2HUd|nVgy/^');
define('NONCE_SALT',       'M^8B&AnZSH^2>@BF;OWcMf-293B+peVoAuWH:s9>}:)2hA9r%pHxOOaM)zt%(poO');

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
