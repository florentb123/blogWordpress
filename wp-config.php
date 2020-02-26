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
define( 'DB_NAME', 'blogpromo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '_Rvm{j*zQ3iQ7ibneHnc&:BbX*{{Tuyf4Ru`]kNPn!~>u,.peb_ZI#a{1fd2pu~s' );
define( 'SECURE_AUTH_KEY',   '*98nMpSqlLm:#kM[l5f}6_nL(?DyS@].$d<#lkkl]7O=P zx:F|&GbA~0E<}h2>{' );
define( 'LOGGED_IN_KEY',     ' fl4X.g[nw)U)-aERqrXYr8*5?|kS-  Ig=n, ATbg/ePGdKlRmZ$pg{KvJ&WB!V' );
define( 'NONCE_KEY',         'V|l6IkB,d0Dy+s2S7tdlBa,Q@m3.4S6EW_T`K|&I-w8l1OG{/][Lj:1K{*C/HHaM' );
define( 'AUTH_SALT',         '6C3jXq(adL]a]3!]~#xnGNwS_W}=6v5AQhV3-DG#GKOz.{<9cJ+3q.a{uiMc;*TH' );
define( 'SECURE_AUTH_SALT',  'U0i7Q2qL?;IY)]0vglNggwmchJ`qHgl<Q2BhbaA]_N{D*0K9 *4X`O,*|+U>]`j1' );
define( 'LOGGED_IN_SALT',    '@+d_8q.BAeQ:GZ?{x/]yVgN!/MB%:HJkdn}~1Wb%{wV.iwUB:DY3Nq$b_Q 0&iCX' );
define( 'NONCE_SALT',        ':)6uS0vf+?ZZ951S[OR}sGNb+*uhamY6ig9]2<7a4BX_5!*^x^B)PZu[j[GG17Xs' );
define( 'WP_CACHE_KEY_SALT', '!^KF2k>.6fG{Ad+/e.$M,^/J6@Vc!.J^Kr~bTDIX]EmH31vioEFs,w~7Cjsxy1+-' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
