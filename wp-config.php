<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'dacamon');

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
define('AUTH_KEY',         'u$|%Taz/L=Y&/PCd{5^5~6}?+!$N,HJJTpp5~ 7u]{QF1u7gfq%EA-)#Z@`kHk35');
define('SECURE_AUTH_KEY',  'atSa]JAwCnlKUj<VfErK9kRNNa,GFhUbod^A.+opCcMevAWv^M@`ZXaie4Ij+Ux4');
define('LOGGED_IN_KEY',    'agFVxtIVRu ;HNYwTP->b1!1w8_~ul6Ds*mvaY=.0LRUn{beWuP6{,ZXltu,InM_');
define('NONCE_KEY',        '04{+Tq0{P<9h]s14CFWaze  ^nhW9M ]d^-#I+f#_FO9=Dftg:|gC}~c.>y3r4FF');
define('AUTH_SALT',        '|H$Us|arfNoEFfrdh-qZE`Ms>`T([S!<CYkt3A!{DpGN2vE!eMT@DppiKJl*&dMp');
define('SECURE_AUTH_SALT', '89Mri/vmK*7U |Jp/2$s`s<^ta]j:!6uQrv,d3>-judWKl9EM_R=mS+)Dk{md9 7');
define('LOGGED_IN_SALT',   'Y:Qok-ctAgSohZU<=wn:q;=53fEtIpg$jcYt:EG-0JFa]|6fx|Jag?ah~|*c P`}');
define('NONCE_SALT',       'D:{X-BQh>%:1crJR*j.D(em[Dgt+,Jmr#xxOJ( ++P#79C1[3:}lxo),!y6NmQ9H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
