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
define('WP_AUTO_UPDATE_CORE', false);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mySQLpw');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('RELOCATE', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_FG#-5a@(l$3+>]t^gm?T%_|Ohj.pVv7IF~`8*Xu!X<o986sij#Mbr%>M6E8FM1{');
define('SECURE_AUTH_KEY',  '2}r^uuV kS0+FLQBe16H~l3lP48bl$@H][<:Vqa>&-aZxAT(RC@-6(lG5g@;5]@q');
define('LOGGED_IN_KEY',    '@%8%?0uLPU#hCg}1=hD1BkDcZ&z9CA*bF`Z5}7P,`iim[j+:=EOs#7<l#3kT+f[o');
define('NONCE_KEY',        'jQAsHni9aXf:58F8[tV~f9Y2;$Xcsjs/1`CjA&v.G},Ly57>JG#/Xwn722QX/l}3');
define('AUTH_SALT',        'z2Zj5 Fn_3N2 -*O1btVt.$v&UL&>20UnAHnP* cPH8OV6;/9FX5k*QDv|wO!%)<');
define('SECURE_AUTH_SALT', 'ewlA]&x_Wb:WbPhPMMO<q(PHEK&L~ a058jCwkh[Au-ng*X2St}wkHedDG3s@)Bs');
define('LOGGED_IN_SALT',   'G/27[MQ(4:e16ZNtyk%E.KMuj/i]i86g0Ew{2Kjw}a>MMMY:H]q3JU&>&X<X`,;p');
define('NONCE_SALT',       '}?)lVTLmw<+I<F:hThH orI+`+Y]LBttX5Z9O>@1|?K2_*sAb+01$y#Obp4eOlOr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

