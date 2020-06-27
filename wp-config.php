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
define('AUTH_KEY',         'tQ2QyjUT1292cUm9+T4zuv4+SorMcIbFI4RYe3ysy35NrzsP/jwNC4WI6orkpXzd3kZWhdP9boApcvBx4H5UFg==');
define('SECURE_AUTH_KEY',  'dqwxQ6LM416ZNqgjPIwSp6CaNY1uZIr34at2OZXJGpQsVVeY3ONKPyLYb9cGkrotGTBQ+4XCCiwrS2w/kcuDlg==');
define('LOGGED_IN_KEY',    'SqyYBA9xzFyhITjnHd0mQTVySrDBMbU48tnyzyBQxHGpcbjDRnnkpM2iWYX2Ex37fzmAfZJU2UYg7MksZPYD6w==');
define('NONCE_KEY',        '+BejBSzqRR4VSzrGBehPlx9xZdXjSzIsozRnFzcZNnaNuKlgbXSzbQMrofAAGnrvfgpk9shI71n/u3v8CMzcWQ==');
define('AUTH_SALT',        'SSzs/PRMAvA8/3lYbncEaUbkJjSwnPkKv7PQ9gaOtVRz+EpdUO6Exahg09PSnWT11nnbtm7M4kzL+W0NTeNA7A==');
define('SECURE_AUTH_SALT', 'gB4dsMEmEDuVqsCLJt7jkYM6ZAqNJsmlYeNhGb0+okgDOgV7dyndBHFWT+acF7+8fQRWQzA6H08qz3xadQMnOA==');
define('LOGGED_IN_SALT',   'lKONxhD+W8gdXeUsVXi5jaTMwVgefJ2XyoU/Xn1egE0hz+J5zGBnJQy1fqEvrDh0XnUKouYC6RBQB3gpOrw7Sw==');
define('NONCE_SALT',       'XPlzhTEmEd23BC7C/4TglUlrOkiTQfHyxMOFrevfYnbIuy41x3yVFGY7hFlT1tPh+ISEA0JknWSC3M1th0Z+Xg==');

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
