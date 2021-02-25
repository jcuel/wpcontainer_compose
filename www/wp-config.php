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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdb');

/** MySQL database username */
define( 'DB_USER', 'wpuser');

/** MySQL database password */
define( 'DB_PASSWORD', 'password');

/** MySQL hostname */
define( 'DB_HOST', 'db:3386');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1503f5d772571fa67f62be7087a1f6c1ed83bb19');
define( 'SECURE_AUTH_KEY',  '36fb09a935f0e7d2d8fccfbd078f64190b4c0e13');
define( 'LOGGED_IN_KEY',    '7defb5ee74cffbc0127801d04537f31a2ee3d1b0');
define( 'NONCE_KEY',        '49d7ef2637a967748a50f3bf2f317a28af6f81bc');
define( 'AUTH_SALT',        '5956d5333d2a89d8372dc1bafa8ae9530454374e');
define( 'SECURE_AUTH_SALT', '758ed1e80fffcdfbb374f992736e66d7ced81d47');
define( 'LOGGED_IN_SALT',   '4b0848308b960ca0f85431b42e27a5a0ab95abf0');
define( 'NONCE_SALT',       '57d0ec85b5a54ecc7357290d4415e1ac0b2fbed1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
