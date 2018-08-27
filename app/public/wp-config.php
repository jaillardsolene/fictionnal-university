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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nYDmVi1bzhzRH5xikm9kE0Xq8+919C2+abE29dLG6dB70PXTmI+dKJf9CcGxDqNzUuglJirRsQTOEtQbc8Q/vQ==');
define('SECURE_AUTH_KEY',  '1Al0OuRM+ZoAoqvROVuw4eJ21gdvxlT/w4yS8WlaC8mqQJOIfw90ADqdVwvO/6FM4NatKOiAZ2F00c/h3pEtvA==');
define('LOGGED_IN_KEY',    '9CVbTg2IRjLhhAdVA0S4bpV8B+Obv/O6QDXHVyWjPV6xvitJ3EgbHLnRKNLzANcmdF6rsFlJRl67z3O7eoulcg==');
define('NONCE_KEY',        'jwGpkWYA25ntIZc45FhVwYuEM5+8SGTNtdmtilSR2VViz4QJtPGtBv4LPi6Nhg83tygENQikTZbD/xFxDVjW2Q==');
define('AUTH_SALT',        'qIhSy/SmEk292C55AzgolFKQVL8fZXe7GrhwOBYxiv2ZhDuSqMtiwKgWigUdSpx6g3ecg3GSXmGV21VfZ54ePw==');
define('SECURE_AUTH_SALT', 'O+5Xrthz4FWsMf3XsF2habg83Tx/h0H3bZGsHh7M0Wdi3VZC9iQURIEP9vp6b5b5c0ctZ9Q2+0bvk7OgiNd1Cg==');
define('LOGGED_IN_SALT',   'fQrKgCraPXMNigj+z1zhMImHRfoPDBSn5HH+Btq1mohN0ciBV6QgFeGbhikin23mi0KyWg3ABX2kCbzQZA7x1Q==');
define('NONCE_SALT',       'VoP7lOXqyVNUwh3TJKv9ZFDrSul0xKp8IIbV8eDzetyCsIXbGCCtzqEgmxzRvEtXd4XA6rmzBnW7wYwmysmqCg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
