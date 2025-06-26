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
define( 'DB_NAME', 'rest_cuisine' );

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
define( 'AUTH_KEY',         'Q5j&Ne_)&*)=05w3i nQt$ j!|w%Rjk+@AlVt4q[3rQS)w_A?HhKkAp_!MMw/)jL' );
define( 'SECURE_AUTH_KEY',  '{MOKq4BsC~~lAHjln==gDxJlI*5(Hb.8Mb~W2*jZ6w8zB^H.oGni)y{|EHZ%u(t7' );
define( 'LOGGED_IN_KEY',    '?$&]is+$dmYuE2`^VaYGU6|Sl^UX!<3S]O1h/NKuz;G/;)(wSFxt Fzr<-Z{Lj3]' );
define( 'NONCE_KEY',        '!L*z{jUDaRaAv5[4G#Gf6BRE~z8[>EyQYo&85z-`J.%n0OPcw0(ZLS]/Xo5wFoUr' );
define( 'AUTH_SALT',        'M[+^Sa^tERo*kE0XR>NfWxW,9=[&Ye&/Qs;ryIY/b%g}WCRwyI~d^Po S0`$x{7W' );
define( 'SECURE_AUTH_SALT', 'mQ4~+eOVh@bLv*f|.>Eho_JkQ)s!5jd,u}%/_phh)@l UspB0eXpfr(7%uEj&dAC' );
define( 'LOGGED_IN_SALT',   '-dG1E*VZn:{PFFtf1e0Y(0jJmYrD^ X[3,d42~%nP8aY]e/O#F0{^`UYkbA~S+?W' );
define( 'NONCE_SALT',       'eJiV.[jHo@aRclJGvfQr@q~E+.tvh5j6^l?FE;P%`vmxtcqI+Zt$lWYYVU*E?Llq' );

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
