<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'simpleblog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U6IgfNwl0atghFMCx8HUYbHPBV8c0oaTAzFYO9HP6N5SY3gqQKhp71Jd4UG3Ejoe' );
define( 'SECURE_AUTH_KEY',  'EVd9dcNQWhmifIwO1yWzM7qt9UY08ujBapWpa32Vwboqe1BmqbXlXmK4X34EhB8d' );
define( 'LOGGED_IN_KEY',    'igHNZFyJyq4xT8z98Lx80noyauunIZr9uMCjl8MFYv0ffFjVc6HQ6DHP9SzTPKFi' );
define( 'NONCE_KEY',        '9zdT02nSuv8laP2cVqrToUSLdSG63HA1j6viTPG8qX3vKVhdA5kdF6MJMiNRvdxa' );
define( 'AUTH_SALT',        'MVHyVt9K7DOAPd4v3D2sLcQQfscjEbIxDsab4UqRRgMkLBZMmX4IMlJvX8j75l6f' );
define( 'SECURE_AUTH_SALT', 'ApSyGb8GZ5tOkIgXpTnRRQKc8ICqwHbG3hRFdH9cjn01R76XP73Bsq84l8Vh46zu' );
define( 'LOGGED_IN_SALT',   'qJpEQxVPW0xCBqI1eyhD8nep07O8QpkzQzKELp2EMP2gmm4fd6FX4ScXZxagJyrl' );
define( 'NONCE_SALT',       'BaGvp12hsrUZlxJWZGhtYwc321Bb0lOqccSjEs4rgdDNs2FQVqqyFjQLlIdVXZz8' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
