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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'VMuyalbny1RH2Um2buhaZBKJfpsb6x3hbKtd3xAGMUnvn8na8WWJ5gV0ZcmTMGvg9qOYmddxGl7S1X3zPAVacg==');
define('SECURE_AUTH_KEY',  'TcDAtfgOzIwYIK8orkJVtsmGq3oJ1OC4jAA7SR0d686VfE7j4hU/J6g6hjbPlYJJEJv044Ws84+OdgYJxA55KQ==');
define('LOGGED_IN_KEY',    'nJyF5zt/+kZLVylRlJh0yRhhpvIqmEI20/TmiFxjzjmxpt00bnPGJC3Ql3t8uIVrMcPRIHHuNVt+kMzGrleMFA==');
define('NONCE_KEY',        'ef/xgfSLsd0+49++N96GZWIZwNAPmOtWcA70fmTsstZ46t0AOadf/99C6PjXbfVlymtLqSMtMd5C/lfIA/9+WA==');
define('AUTH_SALT',        'RSqOqcpaqpu2X63UNXZ9pjasaWfIjDW6BQoILQ1+mDbU4VAc5J67nva6c/6wHYEdCnstm7b5GXA6VKuDo8uY/A==');
define('SECURE_AUTH_SALT', 'FTh2OPTiYpInLaqZNj0XkHVNsw8BTA/A+CwSbBC09LHs3+Zdt7hb+9meFXWfBU9h98gSwbeflLdS4nSRHdnJGQ==');
define('LOGGED_IN_SALT',   '1H7k5g4wLFQivYB+WuIy5vK+vxxGRQqmvfjZooEh+k/CrRr2a8tyohF12Ckb4pgAlxHA+d6ICydXt1b9HXpC5g==');
define('NONCE_SALT',       'rj8jUcAxmWtOHiVVOrreZhaSdAwH02jyNn2xmalGOUTN4B++MFtvun55ddajjAHHfbk9m3ikzuUcskgNKgNXdg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
