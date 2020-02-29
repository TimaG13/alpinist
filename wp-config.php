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
define( 'DB_NAME', 'artem' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '9(7M?D)b/t<SJjzNrV4MHlvalZ)f8*=mxB<MG_A,u:oFQ6VdFSW%92nKCwdBmHk4' );
define( 'SECURE_AUTH_KEY',  'ri99NKP|>5&0>u*hBQWLY_eaB=nCoUt0V/-AKD{>w?^0NG;cY&)-VkO6>^&Od8Te' );
define( 'LOGGED_IN_KEY',    ':@s}Y%cp[bjI7W`x6e@JkQRl7TX=ahk1lh$JWtv%iB$<!BfkX[X}uvPAcP|/ 2 u' );
define( 'NONCE_KEY',        '1ZYj37N~T%^dn8gv&k.Sd}p>)*+KPt-+21$C0Tu/Oo%XXbV |bST$8#(;.Q[oW)Y' );
define( 'AUTH_SALT',        '`{3;F5m1~%w<QDeF?}siwf5zg)o25.~LA}Pc(-Bwif?CjHcjSjDVf~+;~n0>[ij?' );
define( 'SECURE_AUTH_SALT', 'i( TWLA]<M6^gXfcDwn--i~ z _S`Kjl)`R{LQ g=ozUK2b)`(M!u%{Y(YN&RaeJ' );
define( 'LOGGED_IN_SALT',   '!+cHQ@53%L_o+4-G(]3,N:TZ_8I2IYk(U4OEJMs_<:=f(oht|E&T7xEXbQ6|<,c>' );
define( 'NONCE_SALT',       ')QtS^9%*I~.p8*qxKE-DU^:*ztyFT{eC @%Db`cFP<Gd]o+bH:4)ci97>PC)}qkS' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
