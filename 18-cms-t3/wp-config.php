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
define( 'DB_NAME', 'cms' );

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
define( 'AUTH_KEY',         'IaptF.yO;ml[}~Bq4?cx1Z0:s,cx<%,G%c]Wry{I%!P8 _|mPK!SV8tU?>5 S|Rp' );
define( 'SECURE_AUTH_KEY',  ':#Y]UZ4uCM%SiLM;6z3v6C@6U6Z]tc)PcB+9o`Rre~Y+xs+4Cp7%E82}fYCJA#$G' );
define( 'LOGGED_IN_KEY',    'k8co{zUVJ!Wq)Ds!=;+H7vn-sReQ#@L]sT<N4i&4aJ.OlJAy R~?x;lgHgWVCTh5' );
define( 'NONCE_KEY',        's#gUW:gc*7r4abvEx#M4Sv-Q*;QW(+eoRv v_#mEt;tN}>V;MLB*;8*T0`b(:c#+' );
define( 'AUTH_SALT',        'm;OGkK$c,PD7qkQo95y4c]kL{xJkWt!;=xytrnqXk-,=UL2!wUU>xvFJ{!}m4]iq' );
define( 'SECURE_AUTH_SALT', '*}lA%g1GjD3YW_L{@1J[}F1v2JCnH)`V?eMTk94y]?:3?p{9$#|d[#IhR}:~,B#_' );
define( 'LOGGED_IN_SALT',   'Su?X~I@rPgNA)m7DQ8>-GJZT1{xYOl5KDBki<4IuD#Z)M7{$87Lx *uW5CGG=95,' );
define( 'NONCE_SALT',       '?X{@>CdqAI(x*5w+JYMt%8;/V$-EbZ&PMLvByblPFIr_w7^&X:5^>v:.ZL9ErdH@' );

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
