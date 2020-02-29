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
define( 'DB_USER', 'artem' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '5&:cg  R4=ftXgyPm*>,zik3B3!qY 6`1(=gVZ>$;pb-&--sb+`e[<^dHU.+dzZC');
define('SECURE_AUTH_KEY',  '_-Ve`_W1fhm)FucU1,b53UiI? @?9^OH{fP-AN>C&UuV%kBVo8(r8);8d }uf>$z');
define('LOGGED_IN_KEY',    'TZW^+4o,Wg<+ P6czO*M>a/0^m?,+cb)ExJ=|vd /5`L*T/4LO%^sx>4}.T_8n*W');
define('NONCE_KEY',        ' y|OoV/WB<9rk]N-nXIKgi2n(mbYw5RpmB/`0.DLY-o%oS,BE!$ht i6|H>P[av8');
define('AUTH_SALT',        '$[d.8k=-@Tq/[wSOZ+-KdPJE|nce.BA OJ}TXgx6TfIc&)${4Q`|ykW__@.B>V:~');
define('SECURE_AUTH_SALT', 'jvQNIOM-T=l+RWZw8VC8,!| T_Sl&7F^gH)3G=@R+sprKR[gJ`H]E3YDcedHNhCU');
define('LOGGED_IN_SALT',   '0VtZ06$w+^klC,2MZ|y*/f+QP(z8|Tot_J?VA+o}M]Fx{zaF!]xWk*$ecq*0dwP,');
define('NONCE_SALT',       'S,RMx,4+!oCs7I&{=i|EMCkq& <&:;;kwg{t;)w_8d=oGEes$:M3j?-Al^/B+_Le');

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
