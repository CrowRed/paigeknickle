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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'a0|i#iY03wq$R`LY%I|a9Xz2+Y)g4DT*0MA59t-JSCIG~5E/PIN5b&gp7!o-I3ip');
define('SECURE_AUTH_KEY',  'JYlKV~d_!D)g9oNxrb!p7M6~cbkv>/YTvZo?;V%]+b:@m:om9XpV0b:|&,rXQ2y.');
define('LOGGED_IN_KEY',    ':8Jto~TvtzG]0.OXfWA{r}Azc3@yf79H[u1211kQntCa6kdu@qhwLqL,n9u?V/wo');
define('NONCE_KEY',        ':6jXMA+juQ7t*-+1]?k|ukYXJCm9aWd;_^GyGPN4M9< N)tL+o[T ^sST|lMt42u');
define('AUTH_SALT',        'V.L2<ha.phza.O!uHy|EK:)}|ILl)!y=rCY/j0xEChFjq!733g#g=ex4.]0XN,yh');
define('SECURE_AUTH_SALT', 'g|mdL[U.z]}-5=$r}K/s3*CC)E&GzCmVd2RFaA<@Ed#1#QoPyw&@(a5.,?D0:n9-');
define('LOGGED_IN_SALT',   '<`B1J4Ak~o#{.eG4-ls#X^e0,Rb55!S-`!|Z3;[;JrSz~zRig?3Fgq&.tHifg$>l');
define('NONCE_SALT',       'B .2q{`&L?P#.0 iqYWzeS00|kr&k~;[(h|T4GNl5g2lQk+6rX4!GH]Yb(<v{<l!');

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
