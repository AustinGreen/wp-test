<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jd_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?b~QpBc*9eL,Np^G-1zp=;IG7Q-l. XSWs|U3|:3d$#RblB<C_`n6T9~|X2:x-;R');
define('SECURE_AUTH_KEY',  '&:A>&elko-o.#J=b(H5R5j5qJ~]*KkT/wX33LG4FT%tNe-N6-kyu<zodwys+68wA');
define('LOGGED_IN_KEY',    '_kO!yYgrM5+iOq!&f3ABdg}!`D$+]cH8usGn:Y)>=`>h=D-5Pb46`XeaYY-+.7aM');
define('NONCE_KEY',        'vn;P8qW-O.*f.+;RxOB8Fg5hry-zgwg0EEg*Ts{#-,W6$T|VKw@w/b3H1UTq#2t ');
define('AUTH_SALT',        'op,ak|5h6{(+{*]w*9Ui>|6X3Kp7V`q_rzQk8OqEz;|19,Zv@b+<Pui]JLz||1z%');
define('SECURE_AUTH_SALT', 'Y*b-I(Ffrw2|;#`+|+qNCWvD7N3yA/k/gU9X-$K7Hv/NR{Sy Wga+p24|JL/Q.G ');
define('LOGGED_IN_SALT',   'e(-+CX@K%`{3qNZ]JFu4mz+|XCaaVy(W~V$.%8/Lf4.xZq-H2!Dr#]e>3L6D,}1D');
define('NONCE_SALT',       'K}eTA}78 _T*o+L5Rf_}*5t3S;M:lp-6!fCD6Y@Fpwa?9.SM{[$;*Q^<?<L839_|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
