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
define( 'DB_NAME', 'wp_lab2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_DEBUG', true);

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
define( 'AUTH_KEY',         'tBxPW23z[y1QP.(XR+?zpkoCJnwqK?D nH%^ql6-<(+XVC>%L`qIxxr2etbVE+:S' );
define( 'SECURE_AUTH_KEY',  'R=#n|S#M2>(g1 ~OACx+oq}V (5C5o:wP,39`PZKp1Nue]o+SvsFbt:ABf@-BL5k' );
define( 'LOGGED_IN_KEY',    'Rek;9t.{3bULkr!`<6&Cy *:/QXGMWpq|]TI!F,%y5}O <*e97svB.s821Uf3pZj' );
define( 'NONCE_KEY',        'b;mQKGMZ&dQ0=}98jg{om5- J]Kk0~q+r8]:,{_XVbmWfd)uFo+qva3~FrB84~[=' );
define( 'AUTH_SALT',        'Hhjg`k87r&p?Q%uwz=f-tqQG:= {U|Mv:miA%KE2 ,;Rem,HIgt4wmnOE [PQ|BJ' );
define( 'SECURE_AUTH_SALT', '12|AiWr%vpm-1ds-!3hj~&^&r{A*#q4Swj J4YOZ#TJo:TmVgOS)1H0^C|u7 .H|' );
define( 'LOGGED_IN_SALT',   '@#) ./2G9[nnZm|BZl6w.AT/_.AGC@A}HJ#66Jp]Pn`V#}1qBm(SR{CFWB0M&ZFr' );
define( 'NONCE_SALT',       '_Ai$UEbo1DHx-P.__fMQ`Iaf.9=O}y,I/C`l`4&cb!-sW)]byc>Ps|vnt,g@-BwE' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

define('DISALLOW_FILE_EDIT', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
