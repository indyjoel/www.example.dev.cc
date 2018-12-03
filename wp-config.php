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
define('DB_NAME', 'exampleDBdlx1a');

/** MySQL database username */
define('DB_USER', 'exampleDBdlx1a');

/** MySQL database password */
define('DB_PASSWORD', 'IDF17ciUUZ');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'XEq*HEP<2;XxA6H*x.aTe6;9xp+SeW;92p+tLWO#~]halD5H-x_aph[KDl_~GdZ_C');
define('SECURE_AUTH_KEY',  '7grJUM,0>frnBMF$>^YQb3{7rnyEfX^73byu7UQy{fqmMI$<.Mi<6u*yPIT{6;');
define('LOGGED_IN_KEY',    ',grJUN,0>grnBNF@>^YQc3}7rnzQIU},nfrIUM,>brjAME$<,Xjf{6qm.MIT<.');
define('NONCE_KEY',        '-Wl1C-|_8h!KGR[41Z-C8K!:[Rs4JCz|!Jkjvr3U$y,bnj{Muq$Ib.EmjuMbT*{iu');
define('AUTH_SALT',        'vRz4}Uvo0RJr},Nng>JBj,@FcY}B3czvIUQy}frnBMI$>,Mjf<EB^yQIT{.mfqI');
define('SECURE_AUTH_SALT', 'zQ>30jvrFQI^}>bnj7IBy<3qjuMEQ<^{jbmEPI*{.bmi6IAyq+Te{<2miuHEP.*]');
define('LOGGED_IN_SALT',   'sNvr>RNk}>Fnk!JFc,^7gczB3U$z,YUf3Mvr>QMj{,FnjuMEQ,^{XyA3TMu<Qqj');
define('NONCE_SALT',       'R:Zok:Nz|!JZ0C8kzBc|!0YzB8Nv0cnk}Nv,^Jj0B3r^JYU$7fbrQ$y,Qr3Bn<QM');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
