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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_astra');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD','direct');
// define("FTP_HOST", "localhost");
// define("FTP_USER", “jkl”);
// define("FTP_PASS", “skdgideosus”);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}{[;[a}SH?]y=VP*<;{]|SRead?4O4)~59X_0m<eJh!vVmi=,[t>)_c{:0{k$|51');
define('SECURE_AUTH_KEY',  '0[$*b?`xKB4+_^_H~~~H#|dg8h;f*ia{GzuoolAm>3;|N`z.QnC0IDwq2mNeBN`~');
define('LOGGED_IN_KEY',    'pl;mb<1c^XuWHTe+zF)9~5/JxZBn,XR!vOEfiC4m?OSz|q3d29h&ja9^JISQ %bB');
define('NONCE_KEY',        '8K+o2Vu1# qB`STlAT~Z2jsflWiR,C_yUZVO-f7q3#s8=}.~H7(wZGH+ (6l4}u#');
define('AUTH_SALT',        'Xz.Xk?7] ~/6cKcsoqQ!16GK8h4[+ZU:RZNR#mXm#!Hp(Ex6N6)A=JXCbjl,]-8<');
define('SECURE_AUTH_SALT', 'pq|_BEU?gdc]juD&j_jV hXbJ?gWoaSdSqAai9^<IjhPSt33~5K!VS=-i154Rrad');
define('LOGGED_IN_SALT',   'S2]U*Dje^iJ/i/ZQ9Z22eNWt$$T6!{zHdV{/1g+0p}6 YvcVp0zy]J44i>CwbO{b');
define('NONCE_SALT',       '+f-v[O|q?L(aB4hsVPP6*t3UP8*onY3D22[1D2dl149}pXH;oi?:Wd~Zhf|oG27]');

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
