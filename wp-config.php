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
define('DB_NAME', 'mysqldb');

/** MySQL database username */
define('DB_USER', 'mysqluser');

/** MySQL database password */
define('DB_PASSWORD', 'mysqlpassword');

/** MySQL hostname */
define('DB_HOST', '10.1.2.42');

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
define('AUTH_KEY',         '=^lm-3UV3o<->9{,%3cIi#X3SJW/?Ykpv_L?7LA~Oy%j,,4zw=kt$LnGB:bJyd=;');
define('SECURE_AUTH_KEY',  'tV->81qZvfv91iRn JmWB<XkA>w G|<#<V/>I%K2:9ZTGffeG>f1n?XW>f)Y@CpV');
define('LOGGED_IN_KEY',    '$Uv7z?*Sq~M|&Ie&]a/3v7T_1QBl-D]wje`kCtDxK4-:vU?Q(.h>+B!wyC+67+7+');
define('NONCE_KEY',        'x*AtD18MSoy[%@=#i:j6z33_SyzS.&DEglvL4L-)dyQ$wE+:=~~P4mlXS-+3$Gj]');
define('AUTH_SALT',        '>g7]3y};?dn~N%SvrC2S@o+Y5j&GNur(Q?M#Fa8?r5AyQO;ayjRIxs{V?qjfFGXq');
define('SECURE_AUTH_SALT', '3CYbRmB1F|faCb/%-Jr5_`#K]sjo05kkw< ()1+Vz>7t/D| *Odb?jA(UF]qO9s/');
define('LOGGED_IN_SALT',   'ebc.I-*e8j.[<0|3!LCe9D0#M16sy ?7]O5<_| |$F+MvLU6#g7w8;Y>D!i;R()@');
define('NONCE_SALT',       '<Oi^]KV*VgXscwLQ ~*E>[7J0V$A%::&S8U.J`nH@jC3#N$w+7;U[:Nh_~=$.{gu');

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