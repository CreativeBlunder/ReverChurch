<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'reverchu_reverchurch_com');

/** MySQL database username */
define('DB_USER', 'reverchu_church');

/** MySQL database password */
define('DB_PASSWORD', 'w7YucuCufeje');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '6;+xz!#%kbx{;|{<OHl,8|`nzfp(yG7ES+t^]$#G5%H2mH,+@X8aDGj ~D.a32ks');
define('SECURE_AUTH_KEY',  'So:^0XL-Vz{E5,zi3}A{w{*U:/l+YkQK0Y$>z}LW6e1.ol|7uf;glwWjOQc*cf@D');
define('LOGGED_IN_KEY',    ';_T:|e3Lg+i|)g_i!f7M)xn%+p`}#+e}LYsDZx)Bba_vC?R4z+`)z{EY<m(+h{2l');
define('NONCE_KEY',        'u;SH:TWs-$uf(v6YJ=q)PKy|<CXvLznia+pVTG(o>z{nvNLXsx?J8PujqMSZ)Z9>');
define('AUTH_SALT',        'Ja%_#%@J/OIISlPAYPZdvt*(xzc6AvggAX)d#eT>[[</Hbwj<f;J=%r2Nb]GG1T9');
define('SECURE_AUTH_SALT', '@9l;<H`%B1&GRc,bX7LGBE&Iya#5.N|L8>`}0XUb>s;sN}#* LOTV|n|?bP-j=Te');
define('LOGGED_IN_SALT',   'QH>9(5$F%1Jm3e#h/N3d/8zBQE?%71n-!!tdpz6(8ky{[]ly<4;s0#=.D3rH%09~');
define('NONCE_SALT',       'j]zSP1Yc1G+NVBRoHO;q&8PvK;+2S4m+Y_oYFg(_3l*PSNa Sn,r4(,v4<twus3E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
