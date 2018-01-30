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
define('AUTH_KEY',         'DZSuNYndu9ejH1b7yHZFBAz/hV0qRQKIik0Uoq2WPFDAT7bL8mdcR+UHbonS71g8FwJKD00oM74NFYzW0tCrow==');
define('SECURE_AUTH_KEY',  'uLuq5xAputUQDzm9V+8R65IS89Ytuk0s5yQHH+zOKyOsA6CTFY5V8NEZMygSe//arbIYh6jzKWGXGUyCRDIjeg==');
define('LOGGED_IN_KEY',    'zX7JMJO18In/SggG7gBU2sRxWQHAfVjs5YWagOqrXSAJdfjWVKLVkP+wpzG9rPhdASaBlgCUGh4kKxKt0XrajQ==');
define('NONCE_KEY',        'sVaKSWCzekwyoGibJGBHY74WvhK7FuodYM4EGNRvriZaNYXQ3jLMD2NHep494QoOdSS2l35LAypxF0g3ZPJExg==');
define('AUTH_SALT',        'PME2JmcSa/KCSEMhUdQ7ENo7kdrT97q8uYqjcYX5BLgGnLSM3vwk71Sx+efbQ5dCF7nvjRnFeeMYnLf9jbky/A==');
define('SECURE_AUTH_SALT', 'Shas4Qg+OuKTiLq3K9CkP6ERit86R3PmDKEwMZ18JxP/ROXNr8AnjyLUAUUCqJmzxNwyWAonp+6k/KMof7ISEQ==');
define('LOGGED_IN_SALT',   'RrzzzlbbePq1HJtZJ/gg86CDH57E6gQdJo6hWG/DRCSkaa16y4cFok/BgrqVYcEo/IijV2vBzZGkxek3wDWkoA==');
define('NONCE_SALT',       'KgU1KwXMLLUBbSXJjZIuqakzrprEtnfargzz1tmmVKj2WsFNJYtDoD+fh/HzkQWAqEu0gcCQEky1tVT3jn56eg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
