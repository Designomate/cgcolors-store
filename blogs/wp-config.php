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
define('DB_NAME', 'designomate-blogs');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U>&e3j0?F x8VwF6*y)]&B&0*OtVSyP,wtq!Y`@,2R=_L!7$aeW8MFAl}}6(#6n?');
define('SECURE_AUTH_KEY',  '4;={s83p:(9]8F,T`oGnV:W77:G=2|d.Ag9;sT#gF=;MZFWx[{rGu-f-~pi(!nrM');
define('LOGGED_IN_KEY',    '4ZLZt PQgX#ajYJJ+>[ME(s~y0TZ34_*L<@8<>O]|B:,z]W/{P){:P00#o]R@wZk');
define('NONCE_KEY',        'g2Q9lRE,PF}h{-2zo@^`B 1F-x%Vr+<Xeb/>@$|5|d^Dim*]Mf}1IOIV08=X`HGJ');
define('AUTH_SALT',        '4UF[[kTQ|1<tff?/kJ!spSw9:Rp =nd44#`|?,k+kixBba9RB<Q3gf:X:j}U}9_A');
define('SECURE_AUTH_SALT', '(J(E7cD~_A-%z:-mWVaEyY5V2z#CdV>S~X }xnvuJS t7hn(U;WD,4)b|7v7L)1D');
define('LOGGED_IN_SALT',   '!9:o~y0u:E6>M;j>.oi]!A8S&u%]+yn+J:dU#phk{_;.eWUQJC8]LWQDG5Irqx9,');
define('NONCE_SALT',       'YjD1]E-.85C#4nS9x8*Y]hA/K54([Q{/tm4G{S7&7j/NuzDmo87=%.+.Ieisv!g1');

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
