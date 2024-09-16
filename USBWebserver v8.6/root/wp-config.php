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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         '+/KMVh8iie*i0d#(DrNo5ZBN2 &SZl n)ie4dkqz<o2T*j^j3;HCRu:YY1@]n6gt');
define('SECURE_AUTH_KEY',  'gCQ&6@:T3O!hzCOoLy!+rS@hg.*D%VRQold[cAiU@Eg{bDkllp.<4k2dpI`*&{M|');
define('LOGGED_IN_KEY',    'x%&rO[Wsh&PeZOw_w-wMJ;{#v$_Qom.hdktu,*<~-:`jB3;j;r-4zKVUi7WiTujP');
define('NONCE_KEY',        'S$Dvt:qi]$%?b]|HzW6VqZ7B4L:&YM:E;rML9I#BOG`DBr~xP~duVBr(# 3OVZvn');
define('AUTH_SALT',        '(Qu/loS<$y@;0f>G(Vfsf<bl[NA<lemP LKxx{/F|F&&m}+_vq;28if3J:bR*U3?');
define('SECURE_AUTH_SALT', '<ox(1,|;c6PEWgySMaQ#L_kd[%r0[GIjY`,0zM^<*aeq(<zl]TK+*SQs$75IVQtC');
define('LOGGED_IN_SALT',   'U.clz!Ld/{k?vd<_Z=RJ^vF2qcne@c}LxU3K!&IFeDOMt>JgQX(lqPy1/0=UMn<l');
define('NONCE_SALT',       'S Quz~)p))XBB*qy ZcKw>mduE(MQ5zq7gN7)MS;p%=l8kCzEPrWibayA?[DLwD,');

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
