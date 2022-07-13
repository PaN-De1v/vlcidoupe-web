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
define( 'DB_NAME', 'd280781_aluj4l' );

/** MySQL database username */
define( 'DB_USER', 'a280781_aluj4l' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MfSCWDkD' );

/** MySQL hostname */
define( 'DB_HOST', 'md101.wedos.net' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XJM6gfRRlOjMe28kMQD8fYBcerrErQrnLcZqJN1aEBniZ7HsROydcIT99VpJHlan');
define('SECURE_AUTH_KEY',  'MXWeUBRznWCSnLg2f56rAWp3L5zo9tW3MChjwCzjDhVOBAmZjk95PS5Cbfs28xIT');
define('LOGGED_IN_KEY',    'Pl0lWUhFnmfk4PHKnUQynVoDu7oBkaDsmZIbaoqCmx0XWl8pssW3JxKTmxw1NBnu');
define('NONCE_KEY',        'yLKwstHBb205tFolstTdbmKDRJG7krgYdLZZQyfHo6JpZWfUvGXUt70ccbRij5Aa');
define('AUTH_SALT',        'MyFSnt65FemSr7zDZJGrtdIorlpnHCPXjoFHLDAgq9vcKEt3OMwD9orw1jFznP7E');
define('SECURE_AUTH_SALT', '5tdEhHRzH0Pr4p7fN91m4f6bNSCEUFUOZEK8hqx82JU3C0mRVzJpsaZjGOpZcIA1');
define('LOGGED_IN_SALT',   'bpN4kt5ySKbowkjyHy1pZAFFtcH8O0mzoeuYvMDKTF9Eyy4WuMaC3Q1RJBYxf8lX');
define('NONCE_SALT',       'zktb2uRUfop083p22gIuN9e4Qg6Xz358gL4jiBhgB82zyGC1YVQFkusjxdhkP6dF');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wecj_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
