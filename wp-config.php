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
define('DB_NAME', 'alisodental');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'gQ4{~uH*x{H) H`t3<Ncgh`<2^d;Y3.[]xB_U-^g=hH. UFUjm?O{hUD5dC2L8`4');
define('SECURE_AUTH_KEY',  '|U EFAHPo37x0Q*^(X>%FN3KYK7.{j3EVV@)xKEjeD{C%M,_2vd5+{w<XFUD=&]l');
define('LOGGED_IN_KEY',    '7l`F~kwiycYqO`AjBe?#[6eO1:=_{c_~3?H<fej1$-JjSXX*[L(E&La$+ Mo]8x;');
define('NONCE_KEY',        ']6`vH@a8hCV?33VULW99|)997os$X5r:2.6B!egXpYiLIvp($%L|~<U?n2;}}(gL');
define('AUTH_SALT',        'MLTsU1hEXWh8ey{s:,z=/EfBkF0euG0$$?`RnT9|}=W&{*x+TCnuK45b)d@#&y@1');
define('SECURE_AUTH_SALT', 'mr1r,Q,BF ukea-2RJj1Q~70:=/_r,F4(U%,a(HL3l-<}W_76*SJY[Ac!l#lB4)o');
define('LOGGED_IN_SALT',   '8OrBuM7S-5K<sA,n:<.u<-{98F>Cq}.dL/JjBu^7|VDG8naF6e|3RYqO@8]9}C|1');
define('NONCE_SALT',       'h@c38$HIZXq<8SDTO0]>E55r_r OxDu^)`87v<]^w`-tH&d04Z?~<Vv&2=B%GF&A');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
