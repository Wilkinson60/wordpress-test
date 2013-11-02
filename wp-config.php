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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'AUTJGWUN- sm+TuVZ>5)|.qDERV!Eawie+5jV#BixW 5*X$m/SJ].wf;Y/`#zw`{');
define('SECURE_AUTH_KEY',  'KD%Y/!N>N+UfVP|_<_W(|STHc)24o7-j%|`x+Y(7-BS7b`htN:-aR`s~/;nB(J7R');
define('LOGGED_IN_KEY',    'c-VfNn&c&KcDDGS #Qxxt-y<R+y]wa) /bB*<Cs8/5/?fwO4TLbOHhw4m<IE|ZA~');
define('NONCE_KEY',        ',r/Iin[PRtg&7H$M/Sc]bOLCc_>{e| a4dg~1.e} |9EJKJZ-BOcvzp;1R.,a)W[');
define('AUTH_SALT',        'XL1sZX[r!wAAR+{@dl}sR]<]z/cQL3d8~v|DT_LVdJP ^X_}|DRcT`7S+q&y!)=A');
define('SECURE_AUTH_SALT', '`W;]YE+bE.wV0Wsoh:1Z$(I<us*2|jRRq!&{Otix(BvuIbrg=&/0:7B-c[kb<h$f');
define('LOGGED_IN_SALT',   'SYub=|+FxP)B;g7.Qu;FP-c!%+J&Q}|W-]v]t*14S7^$GGGt.!#/&Y->j]75wjsb');
define('NONCE_SALT',       '_:7=Bl4:%bGe1*|A,-2B?~[i J}?QH.J;:]&$m4H_v!&;+R~1eyT+M%u|#A*ha|c');

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

