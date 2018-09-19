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
define('DB_NAME', 'dainp798_wp144');

/** MySQL database username */
define('DB_USER', 'dainp798_wp144');

/** MySQL database password */
define('DB_PASSWORD', '0qMS@p3!n5');

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
define('AUTH_KEY',         'whariiptelqglhzftnqjl6phoohmvqbwuxm3vyb5umpmtdjqwestlicyycbzdkst');
define('SECURE_AUTH_KEY',  'wbeh5oanhthl9xke5ffyfokl9ojfwcevt4zbimobzthfvlj2qxcjpzerl2nacgdd');
define('LOGGED_IN_KEY',    'it6ofitpou84pcwi6s7tqyciuquvqimglzercp1evhld7sn7d7wmmqizi0u9fe4j');
define('NONCE_KEY',        'qtqaqbzbb0kpyrui2v3cbfnzrfpk4pjerttirrurkxdkvfbl2cdgpcxtepmy9fbn');
define('AUTH_SALT',        'ihsp1uyydldaoconakzifu6qvit7i1ntw2kfgwgzk3cbfh3qcknbbtbb9bzha5kd');
define('SECURE_AUTH_SALT', 'i19jjwsu0juyshi4qyrmjaj8jdtew0bbghpfhxoaxo4cz9rct5vmdwwkbqo3eyif');
define('LOGGED_IN_SALT',   'xsv8d6bxu9frwofjphh4qhiyvox1zbiggumyn1pjsufthex5ln8na27ji37ceq7n');
define('NONCE_SALT',       '2wfoc5t786ww4zeh9vpeuykbxmsdedurxmfm4gpvehcgza9nox0p8goxpcul1utf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpxq_';

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
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
