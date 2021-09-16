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
define('AUTH_KEY',         'EGl2kwHC76/OlwX0Mk7UZOvk+f5/xSZ2oh9A+I191wsb42OhU45a1b9bSKlSPI2lez2o4iN9tHGSHuTeZiQxpA==');
define('SECURE_AUTH_KEY',  'pVi9R4FOE7ZYzFClQHKD/m0RDiZC5mcUVv6AJiww/KpSxP3kxYYLPas5U5AS/FVjAujB+Pu4v2KtkAkdG+UqDQ==');
define('LOGGED_IN_KEY',    'TJkZltGdrm3cnRdqcgPwpiC3WJ7kRSSfKptwbbRvo3h642mh6kPuSbyX6YNXrB0i1LMJEJYCnLxyAcqyD69waA==');
define('NONCE_KEY',        'gzsw9jmoGovV6x+JS2FSkEXoMTlr8VZqT33WwjeupEaSNQQWAYMDQnTmpXMojd/izsaUGVjjQU+0tLtdBZ1sTQ==');
define('AUTH_SALT',        '8Hp9wv7yAow+jEXgtmlkdxPIrsxFIrwDb0UdU0Ub98cfWOWprAoq356RGAOeUB5DLeF3/cUhiTGAnTXaQpXVtg==');
define('SECURE_AUTH_SALT', 'g5j4+RrgeIJOS8HvE2bGIJfZrmhMjehDUppdqDZxsY44F+bXPogdn+6311rU0eZkJ2pwals2Yv9GyHvAxv8A+Q==');
define('LOGGED_IN_SALT',   'oKDeTrWM0LxPj9wdSqTGQdKlEaxrjNluetjKvCz4NiR628brLRLUnutWpT8GZcA4/C9qBqqfwuLDx/BRKLmJjA==');
define('NONCE_SALT',       'nZ5IfZ4ljYCzBgWySvG5umou7OLZffkpcduIP5QmjdinPCzWrSIBVbOUUwWSGf39K6M+30OJgVKA0TmGt21l4A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
