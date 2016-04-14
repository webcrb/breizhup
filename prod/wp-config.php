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
define('DB_NAME', '6749_bdd');

/** MySQL database username */
define('DB_USER', '6749_user');

/** MySQL database password */
define('DB_PASSWORD', 'nJw5PGYb');

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
define('AUTH_KEY',         'f=t>V~i1bjW%Gb<!,(y@}T8@0u;|igc0YU_M={>z^>cEJZIYZ&aAApp)jdrep[Vr');
define('SECURE_AUTH_KEY',  'Z:3){~r/+DP?h+gG-=Kp7kNpg6swS|93|#]qbF!GBRjI$)j!?DG_IX9+>Nx+3KX:');
define('LOGGED_IN_KEY',    '>HcAsMDM?n|imrcZB:HM=O0-pDQAVgxm9:@k72,.:Kl-Q~Pfl+iK6q^Qc{qw$n;&');
define('NONCE_KEY',        'B-JLQ00ds}0&teEKn?sG)g1V@R5++i!Za<,e2.}<B^ihB7a;r@C=O3~``NNj[PvG');
define('AUTH_SALT',        'I+^+!B-gVl6kpDY?_Kv+tZZnAVW16k/g.X7>vt0;)T/!Z*zJ{OBYBs[/iZy$;@yk');
define('SECURE_AUTH_SALT', 'D! /l-%~dI<||TVqrFKOt:@`6/IyZ2ZC]6E%|a)mr0RDOWU+5dH~L=n9nfnx-~Mc');
define('LOGGED_IN_SALT',   '(xV!slZC0G^{e|uBkm{N`r.[wWm|Uu Tc_z#%Tw4w8YX.zww#Z}s4va6BH!eQ`Ca');
define('NONCE_SALT',       'luwkTZ{L1Hz*|N3L5A}r78$gUQ3Wm:-R4i?9W{.{rXJTZ%]bF{pu]&L[~4Sk;L[C');

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
