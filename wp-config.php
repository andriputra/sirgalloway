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
define('DB_NAME', 'eltaziky_sirgalloway');

/** MySQL database username */
define('DB_USER', 'eltaziky_project');

/** MySQL database password */
define('DB_PASSWORD', 'project1q2w3e4r');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define( 'WP_MEMORY_LIMIT', '256M' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'P7EZ_Q3Pto:?Cd-} j-C@+>>L@ZIumCa/AJGei7dYh)Pt]1=ouvm<feWx-_CF) #');
define('SECURE_AUTH_KEY',  '2m1pCBL X,+fk?mPy0f6eRlwT:D$(I5!t`Nn)xCwH%@LpxY8.2LcBH7+~.q}iJE5');
define('LOGGED_IN_KEY',    '[X81pq(0X_~Ih6ZYis?!_(G;Z`?$^=>~)D,UHQ({~10TXh3#{z]F|!&h,%ya#|7}');
define('NONCE_KEY',        'P.:dxwY?>JQG+SM(;zzOTN. 0Jm31ye|]u0WXLu/rm>CRk!0#m6Z0:](-w tCvrq');
define('AUTH_SALT',        '%11D]G!,_x9dUxlaur5`sz7qViw:05ze<lDWY5e6KcgVCwufT8?CtPYeVc. Bx|t');
define('SECURE_AUTH_SALT', '`B%O?(F2&rr~U*oKip/}&d0dB!)=ab;ga<3|eyZhv~*+..]js|u~&~kQK1?%uXY&');
define('LOGGED_IN_SALT',   'ny$LH4nZRbEm4QctN=;yHW9bgosif4N1]HD5/*pXg9SHv7=mm.qj2&.JHNy-~u!`');
define('NONCE_SALT',       '-xs6iKE1`,aAzl@F:E*];vLb_;d=GE%cF~tL&&,y8^0*bWJPHl8QAU.p*wvgN=.9');

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
