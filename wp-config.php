<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woocommerce_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Agua8521@' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '74M(Ji GgUuI6fxxQ4>s3(!Q-a}@mP%rc^&`Sol>sAjGBNiDBdq#kOT6a2No/I#F' );
define( 'SECURE_AUTH_KEY',  'CU;<eAvNAkG oHv:a6gG/O*j[dKqPD#K>sabZ4`wdpBbt|EX)5{4>%5;Z@f^P2n!' );
define( 'LOGGED_IN_KEY',    '8Ii-&{Pr,pc9kR.dlSGkR=(T77JwK7-XXZClfWIardkbAg~+b?/OW$<0Y+ F8dT3' );
define( 'NONCE_KEY',        'ju[n):}$C6A+z,!2-|4iZt}Ci,(fjk^mKHia$XfR6f@>55ur!AI&rB$|LUHFnuDO' );
define( 'AUTH_SALT',        'zCAq`f-3FXM5$8fqJ}2:gzWA>!rw7Nlzl#rjjk,BEZWYOW 8:x=x4rU1_tCq0:5n' );
define( 'SECURE_AUTH_SALT', 'w6F42@YL]<BDE$[DqWeBtnaUBz|XpHE>j)c2P~o_d43q!0-F>!GXS]HvZjv!zBF=' );
define( 'LOGGED_IN_SALT',   'Q7PTZP|,,dE__19;&#@US3eG9UK]`]}OLQZ*ENw09x4<kj1.tlB QxXJs3veTN`2' );
define( 'NONCE_SALT',       '^7il@RQQ<25E )7K1XEF_g i2-{lD?fr,rIXRft=9QfMz*pTv,$CY#n :21,=4c8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
