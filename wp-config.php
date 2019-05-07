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
define('DB_NAME', 'service');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1969');

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
define('AUTH_KEY',         'XHt7;i#yCq~t0WM>8.|=<{p@$@5P0K(-oZ&]hNS(&{eyI;<Ol1Bu}Rt?3(2=SVD ');
define('SECURE_AUTH_KEY',  '1cLlHj${c|4@[GzXtygm@1DM^QWa1W!(sTD.<g.rR+Lc^6mvzbkHUc+3!9hFZ9g_');
define('LOGGED_IN_KEY',    'EV,{V*Yf8PMCw6y]_LL#|MY_ycsRMos 7$[s^3w?3H;81JSP?N,X2tI(8=2N@ZM`');
define('NONCE_KEY',        '~lAGab#^Dlh)>]LE<Bp/ VZ+`cEg6k^O6-v[:7_f9:OEn.7K.[;P0ZKOG)T%*>Gi');
define('AUTH_SALT',        'JZ;=D%!AMT:$,xCgnlGS[_[Wn=MZIem7Jf (}Xyb/P|rqSVaF`q0L(jku UH[pJ=');
define('SECURE_AUTH_SALT', 'TP*&;/_.[y1](BUYWI)y7kfHQmbI(hH#{SnP;</oAsX[[,0)xme445_EnM`bzO#6');
define('LOGGED_IN_SALT',   'E2Xz5Aap&FL0UI4n?XLLh$QN9gj0`Tg u>v0TaK6CgR9q55d<xGN:T%nsLFh##Pw');
define('NONCE_SALT',       'e6BS|x;z7pNe?uhF]alW7N]a&V(+4#CO<[(Sb!_<[Rv?Z-6-|mm@EC4tgJ(5H3H2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'service_';

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

