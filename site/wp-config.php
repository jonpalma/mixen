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
define('DB_NAME', 'wp_mixen');

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
define('AUTH_KEY',         'YQQtN9nonVLm`O:U+!DS.-Xs3MQw/zk.?&|E*a7n!A7,Q/u%4j:LhQ# m3t4nNV.');
define('SECURE_AUTH_KEY',  '-_L G^PX+&PDADo6y{3,HJ!umM8Gm:R )*;p,!.qxdctGM22p&a?xIxg#LLMAMiS');
define('LOGGED_IN_KEY',    'C]/xD&jaC-&Nk<+5+E4R1|+|5&!jq,n` 6gy;|1Wimw&;=t=;=+-s#j6to|h.cv]');
define('NONCE_KEY',        'L0Lj`bpSiH9zvrZO`]dnq=/-tklt_Q%OCt5qZ+WFsYif9xX;y9T8|&kWpB/Q!(?P');
define('AUTH_SALT',        '~NR>1h#Yj} ZcEK+Ff4uxE SgPLC3+=:bgE]z!JtSA8#D**ig^?+rgL0D+lZUo42');
define('SECURE_AUTH_SALT', 'L86~(X2{q%0=O,TTxY8+#(`tp`_!?F(jlLRx7D[(Z](LS|]pMUseM/wii;&a|5{d');
define('LOGGED_IN_SALT',   'J`e5S!n8*uMP;RD#EeZ((1mrScpZ/0-6,l?7lAEl+g8t%(+BZC)%D27bV]y59Otd');
define('NONCE_SALT',       '4Xu)P0|.~-FwDoZZg-?ywHiC,NX/`_C3$9oW;2)_k`X57n!R.mGY+,+5oky|gGU8');

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
