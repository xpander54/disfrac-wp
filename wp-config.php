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
define('DB_NAME', 'disfraces_db');

/** MySQL database username */
define('DB_USER', 'disfraces_db');

/** MySQL database password */
define('DB_PASSWORD', 'e8J9Y6i5');

/** MySQL hostname */
define('DB_HOST', '192.168.0.103');

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
define('AUTH_KEY',         'HsFZ%$D<CRD>/[JIQ@O[nZzM!h15?MV?0mvXr}LuGV31_edt|!E?y*e5jhCz(Q}+');
define('SECURE_AUTH_KEY',  'f9-*GrGe6]3z{DhuYy0y1uR7?2O!/C|J)k|/8NYuy5fs&y3>)zg+)TqB6S:R=N<o');
define('LOGGED_IN_KEY',    ':P|AG61rq0!LJbT<L?j!j5C,b197IA~I;86qqT.hY-`I5$-_rBo0)*d42.#%nCkP');
define('NONCE_KEY',        '5+Q-,,cvWrQbk,(-v$sjjqS|t a;Ug-$|8c-aNj~8^ {A=KjZ|fZWsSs]s9Kvq#9');
define('AUTH_SALT',        'n0gJ)[khYw|pSO~>ep2%w6KXX4>9vLzm_R~,>%b%.(0baoL-5450uD<P7o[H7qA3');
define('SECURE_AUTH_SALT', '[En-1]CcyT^jk?V)$C;[mkW;(1?>W`Bp`47l@5;/R!boo@hH_N^Z2by*6-f|11F ');
define('LOGGED_IN_SALT',   '@|j2`I^n4>H/&I$u{rt#{u!gu|)l)-ZTqf-f88P-B!@FkWb4T;~I^8(%b;BN$<dU');
define('NONCE_SALT',       '/Y-A0[6u8X9KmYH21hG^2B5yOd3?|->.puUvhW-0,P3XDm*^QT-2z)@(~N2-kP_u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'disfrac_';

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
