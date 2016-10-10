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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'blog');

/** MySQL database password */
define('DB_PASSWORD', 'Pirlagun4_b00000');

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
define('AUTH_KEY',         'nuxURB[$+NowII@QGj8Ks}!J&pCRt|$/o/fM1yUyqP@#1ng,N`QX5g$3j@//;gH^');
define('SECURE_AUTH_KEY',  'IT)6H^~f%LB=qj/ZCGvJx&1gEt!R/ScdJ>|XmK;L)CDJvWnW4l>50d?U .=?<Bas');
define('LOGGED_IN_KEY',    'jAR#OMEBefLjw7hqx@e^yN(sSRJ&}6<iQT?lVRU5~MiIkNS5PzuC*Bb<yO{]nlO(');
define('NONCE_KEY',        'ML!z}E&q@ZQ#f0P..AA^PORxjc#a?jR)nsK4OEzj:iky%`%3y}`BUtw9Td,eA2|q');
define('AUTH_SALT',        'Sv7nS=qhA>&C5ZLHM%!-!9TBGviN_9que.M-$h i0)M@Q{.ZE1EI}IymEsiy P;[');
define('SECURE_AUTH_SALT', 'A/9|7_#ZZ>y!P9|jYt>ZPx8;;JB(=6]r?>eS9!=R;)1e#baMaK=7i]g}`T!X3tFy');
define('LOGGED_IN_SALT',   '+}XIz/6B{4(gE+@y2BrK;7F>WzbiW(L$:~awPd,OZxJ!~o00[J/KA&@w0t:(_dEV');
define('NONCE_SALT',       '0FhhB.&m+ BK46^e|d#at<Upb<NR2}pyn.RrapN4>da,M#2xV?,Vg#F=3#.|.j)r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'blog_';

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
