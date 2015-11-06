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
define('DB_NAME', 'sampledb');

/** MySQL database username */
define('DB_USER', 'userGWM');

/** MySQL database password */
define('DB_PASSWORD', 'Cby4guJXOLUTu6Pn');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'f]`10ZObFmn+ctiG0?zIu-M$< p[`GC$*pC<^?S`D%+!h[o[rC[_$Eq~+t[30Yz]');
define('SECURE_AUTH_KEY',  'NT?mKqF)o-dVf-)|?(2MzeS#$W;`(dh)IZ<{ *+=+),73&faf3c,Rf?O%d,&6q:r');
define('LOGGED_IN_KEY',    'n9*|[qo-O.Rs^u8d-b5P=#O2RBUvNI=P^!QTh0xe`^[zU4I}0+1L(nH!dc:P7s>~');
define('NONCE_KEY',        'KC2|B&7*Q=xk30TYeqbK}6(?w)) _fT=FUG0`y.gh]GruJ-IFSp^?FlHy02^H9E-');
define('AUTH_SALT',        'k%5-=3Ot%E+6Xlo3:D|=2-nW-iG>-VbNN-Xs,ldyVn7${+T+u9:cGZ1~y#ns$~9g');
define('SECURE_AUTH_SALT', '.sYuddI/<OXlJ2=GBTD.RnahPd8G!A6ocUZ&qpFl5/!%OOCCS Wu8Q-LPH`/SUwx');
define('LOGGED_IN_SALT',   'iDm9V,)}@sj-Q#I$Ql!jE3&}y{nF6@EGOvW0$I001#8iW7O`f;,A+8,q19{z8vhY');
define('NONCE_SALT',       '88*1Gc1[X%!Stibe|C3XxG{7=I/-0d|)$2i@sQ8g5H%M&b^.-r)ZRqvNi+Nx4[ad');

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
