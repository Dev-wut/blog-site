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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'blog_site');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'N|I5/Ed#b78M|2N.+qbPjZ2.azeQ(oW%t)24caha>L2EG@9?y9D-IrL=Mer9D{gz');
define('SECURE_AUTH_KEY',  'x^c8Ae3H;qWK1$,v|{rJS~S}^=V{ghD%@,E|uGA~oknCmA&J Fo+utieY`dIg:iD');
define('LOGGED_IN_KEY',    'df:z!+)YNS4GnYW8D/.|Y$KM%xtv2;T$&1|LfJ+`hs@0+H=a>u/bL(GF$~Llo+t5');
define('NONCE_KEY',        '4p=$!J7>wGNR+eiQnV>) @ T~6Dn5<]-a ?JNv#/(qek;7g-YG>yn-&+ w4fd||t');
define('AUTH_SALT',        '(Tg&4%ccE7}`|Zm1rrQ*g>2[7>M]t)WK<S|np}jM0mW7b)+Hyr]-1??8fYTa3H[{');
define('SECURE_AUTH_SALT', 'zPp0}P:rg`,`]Ayq9d1O*=}7xZj]7#%!2Jo.tv+X6+L|nFuxv&.qg{&+,fyc;M||');
define('LOGGED_IN_SALT',   '_+| D!~j6kaYT21-$Lj:X$+I-Qa=@7M;-jN7xpWAcaF>O0`+[H|To~M LAo#|9Rv');
define('NONCE_SALT',       'hA[|szXD-G%0ne0nm-ule}|r_DX|aSS9F(cTns#2)ABHccA^a4b++VGCh&V;S{fh');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
