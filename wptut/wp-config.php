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
define('DB_NAME', 'wptut');

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
define('AUTH_KEY',         '1Ky,MGZQ,yhr!m$evnl[U=h/4gA>wyqoNF=p[NX&ifu9C2O@{{&k!})gDsgK(#:3');
define('SECURE_AUTH_KEY',  '}| <a8j`70ci65[!eMTu#zz51pUQ{uLB[YE!5Y _.,cc.Z$|on8V&|C0_v@%tjYO');
define('LOGGED_IN_KEY',    '6]$lNNN2]#+. ..6FCLpnW9v(d4~Ic*OY9ULR=<5bd,F0qxP3SO4YT`5*a4a&mLS');
define('NONCE_KEY',        'wB,8vJ(.fggKcpaZc+?hW;D2G=X~51xEam,A,i[LriGTGJ qH@L#SCv*.a:5Wm*W');
define('AUTH_SALT',        'G>hee^4xS[/&#%<Sn@Cnt!&O5>>:W~Z(mi5H-q:Yc8vdfe0>1|i;+L|)*AE~6[=u');
define('SECURE_AUTH_SALT', 'X>O=@}4lr^PU2MwT}K]USgZY%)`l=(VKUN46kUr]r7l}E0]E`$k^E3svjI#l<a/ ');
define('LOGGED_IN_SALT',   '*A_F.)oE9y2+m*I{z.6}T +,&#rkBRDv4*9[s;PSRJrf(OFet:54{w~WjID$p?&s');
define('NONCE_SALT',       'Vb#[Pe4&jy=Su}`FMzh9{&w8:qs])s$F2A/UNW{9Ti?x~]r9(udUE}{d1F%{H&F(');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
