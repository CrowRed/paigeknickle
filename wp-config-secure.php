<?php
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'love');

/** MySQL database username */
define('DB_USER', 'love');

/** MySQL database password */
define('DB_PASSWORD', 'iloveyousomuch');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/* WordPress Database Table prefix. */
$table_prefix  = 'wp_';

// Logging
@ini_set('error_log','/var/log/wordpress/errors.log');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd47q29nt8-W+S$d_b[p7bDmxXlGp5+*Z#-rQWpME(;_pmy[n&A27#kOun8IcC<tD');
define('SECURE_AUTH_KEY',  '?(,D~=T}br49;S+U!r%8|:eB`Q%:J(.t7G[yO61+H:RYrLPoIl|P#7[6&paWq93R');
define('LOGGED_IN_KEY',    'J5Q-Dm3U,%54eC#o:!&Hr}**yAA3UZ#-yHxyEsAz%7~u_A$rh=p)5CyjVqga;gT0');
define('NONCE_KEY',        'c#+$u%WXqKlAn4r0wsw%<FKg(#b>e%_)?MRQnP~@V9ae5c?]_6r,%xJ~ ;S+`OR8');
define('AUTH_SALT',        'J^`Z+_d95;j`xy%Eoh+W1t?r9xMNWV!iZo3D6lu}G%GTc/;ek>QW/7.6f.[<z^0u');
define('SECURE_AUTH_SALT', 'd$TOr1#Yw&GL/nn|U-Z!w<5%6erx 3{-iTp<*7Ix75FR.I4k?!Ffbn&68Rc~K$:-');
define('LOGGED_IN_SALT',   'G@4e-oD3o/OCCq83.[7:NR BC!r+`O@GGGMeNCU,t=bBdJs4rfAS6A4QLOgtRWk#');
define('NONCE_SALT',       '%HSr_d/Uuns:A/~:+|1Q,(T,Gx-=S2Y-xbh],dMT`pa>}1Ec*ppMCOUq6(`l52{O');
/**#@-*/

