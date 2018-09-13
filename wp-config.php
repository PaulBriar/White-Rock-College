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
define('AUTH_KEY',         'pCpAh2mFr2KF2+z1LexJY8a013Bq8uBhg3HQ3EIzN9RvhZ7Yw/+oSJ0RtOTE48NQs6TLQOUfr3aGm7fSIyA8WQ==');
define('SECURE_AUTH_KEY',  'ent5w/9XORqhMd3xXzM8zcdpymgDgKxtDeEcB4iRYB6OfP5ssL7vxReDnZFzFy1U3ETG7s3qP0JldYfZZlDcgQ==');
define('LOGGED_IN_KEY',    'Bb1XhZkOJ/z/3q3zDCtWWGK8fREJPesxvdUUontXlVF097n0ReRPdK1H+gUclOSs0pcbTevRpbbMb5Kib2qaWA==');
define('NONCE_KEY',        'SW3cWbNX/Fhsoa6yHXmGu7A3NWFk7XCenLjPE9NViYKyj7ZxfLJpV3WqFEMHQ31yxOQ1KVfQDqeiK177VRR0lg==');
define('AUTH_SALT',        '8zPRfyiuS7tc/kV79aimItcB+0u3114sZZ43/Apj67VvLI4pLR44YGYhN5TWgo9TmQH36TYq65urGTC9Bw1fMA==');
define('SECURE_AUTH_SALT', 'Vk1qAfsuSlhsPMavIIqwZ+Ro3cZSyWDFo2iUBD5bF8/cYjlIMA4Uzj2JN2xC4vK5wlryKn0F1YpmQ5oikqkeeQ==');
define('LOGGED_IN_SALT',   'I0fW5N0pHD4fjrDDtQigZ73KybgundtKk78egDxGtkFafqO1luc5qn5VFn2rsDxJeEf0LcgO/LH31dNzSS9cVQ==');
define('NONCE_SALT',       '37l12domkdQZPxKeYyOvUC6lFYJJRXEMZPNcAU6LfPDmFSbdh5AxvtuAS3zKGHmZY5zKvySJJeNchZ4EmeriDQ==');

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
