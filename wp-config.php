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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RawuGkYJKtRuip;Oib{J<;ZG:.n>7h_hmT7!z;[QYgg1{MCp!gh!g:83j$5{oq<{' );
define( 'SECURE_AUTH_KEY',  '+w4joCIw]+PozK(a7s@X| W6u&r7mF]Nd_?iAs-sA[E~B@U3kNPAseNj`G`|#h+T' );
define( 'LOGGED_IN_KEY',    ';`}UX cKiC}I}eDU1I3)Jvl3G|JfLh<Sr*u5S(iB5;kZRI.S# _ggoj>ClDK{AzV' );
define( 'NONCE_KEY',        'G]iBOcx2VK..|z(fBD^]8sisMHhhz@JJ2HBD/M~v!IG)`M~&=z3|ie4C`TXojZ(Y' );
define( 'AUTH_SALT',        't^Vp3BjIS?p`) h<<Cfk0d(H|% IXR-SImuXVzZ1Zn^cqpP0o%jhJ>/!1Oj2qb{#' );
define( 'SECURE_AUTH_SALT', 'tR)H?`7qBLp^a]5tXK-z*p-w;4Bc]VE{ZRGU?~*N{p)E3s+B|e[O6SC&;9HpZozS' );
define( 'LOGGED_IN_SALT',   '=B(jzWdUq;HXVt*6V&[vI@2`0#Mdu?q73g7$ZIrZ|UZAn,*xcS-iNh57G8V^btZV' );
define( 'NONCE_SALT',       '7B$@?C`C~Ud)uU<z-Xw^N)Bj304x}!uN;`S4n&5LnKjtUQvJ=EViNZoytL;Dd_;L' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
