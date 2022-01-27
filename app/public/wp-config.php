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
define('AUTH_KEY',         'xHArIs28Ynh7SIP5Y8uiPa1WTbuP2M1jLkLICDKL71TtdmM3G+a2PaIuprRNj4fCaDXR1PWrUUsjEoO1UjN6NQ==');
define('SECURE_AUTH_KEY',  'kdfxaJ39Gu1d2nMfNkr6N3JDGi5fMQmLEEn6Ta6cLdevEhXkOwCj0ZbKKGVhKpKp+AtGK0ZZKFiXtEMD1abU3A==');
define('LOGGED_IN_KEY',    'A8msJOqJ4wfZOwrQ6J1JINP932Jbqq77ClZYoy9qLs+qJLWczFDOYsbYCj8Jmgr1cs17zD1ci2RwS3xktkYbwQ==');
define('NONCE_KEY',        'z/qFZ+fqehan8GMar00qUGpTSZ5I1FHQRCqescO2SoDmMRI0/g7XNxVllCRz/6iwmE07dXfBPGpTbSGnPIKp/g==');
define('AUTH_SALT',        '8221S126Vpyhmww7pnFUvBaMyJnbe6g4df+gHlBzFAiG+lTWQMa78mYfoLILR7encsflfwrx8jaAZn1CE+YK3Q==');
define('SECURE_AUTH_SALT', 'xhiOj0mIJWMCKcRyH8Gq+/BceF/P0vqwPdmMdzdx/z+Hi4AorWePZsIFR6A/aQwRoIKnRTYxfEJ/U4UiB0ADAA==');
define('LOGGED_IN_SALT',   'OxJ4sfUOr8t01algor9OeE3GTW8qpaLvq16yuH7GHPmAXK999Ri39aK/3cq5x4EuHlhK7pilRWQlgEQO1xLv6A==');
define('NONCE_SALT',       'LmeJ+Bnk68RvqL4jgZduCTRKYJ4V3KlbQzI/wDuHt2OvZ+Bl7ZI9GijrcZ/c7STJRI6WYAGrq+xyTTikN/EKiw==');

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
