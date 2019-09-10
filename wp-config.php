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
define( 'DB_NAME', 'cms-v1-20190910' );

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
define( 'AUTH_KEY',         'qQy %@VN`y46VYLyg tzt%Jfnp@:{w4Hx`sM^J+(>vRZWHZ_2fK3^qi#,__Mfu$,' );
define( 'SECURE_AUTH_KEY',  'W^)0xV-$ug$<x(}ZI-yvXo $5B|&LQe.Dauw Cs6A$#_~b2M%;V3pu`/_eMP|@P(' );
define( 'LOGGED_IN_KEY',    'TA:ylA{U7Rtx*jw*Uwo((z1Y[H@l(CUr$bY-^^4|mD%-JSTd/pyKXhSJtNw6MEOv' );
define( 'NONCE_KEY',        '$:7iM!=af7iub~]JZeCgp&+9P/|pZi@Bb0S+{=t*l)4CQ,XKE=()?w8kY[qf=Sy7' );
define( 'AUTH_SALT',        '$DoH/.Q^+$!6myCY1^.Mx5OIOny5&G-haFCzEe;2gNRFT% qbL[ ~X6=ipPP]jaC' );
define( 'SECURE_AUTH_SALT', '|rOfUX$}NY+OHd$wUOi{cQ4~u#u*r]:&cmy8g|==LW(m>Ew6HsU#z#TW%c`@#r??' );
define( 'LOGGED_IN_SALT',   '#59HT}8 *Q[1Ase.Fy$$j >Pw|1aeY%`XqE<*tqF4^{&0yQXG4Iz4Q_-6#!_EzvA' );
define( 'NONCE_SALT',       '3U#X[FloZ3K= ?jaOdt;?@Hx9 -hts#aM2iFs45s.n7`|<#{4D5r,S@z,}x8%1T3' );

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
