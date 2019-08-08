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
define( 'DB_NAME', 'holidayhome' );

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
define( 'AUTH_KEY',         'a.*ZOB|qFzr`R6&O}mo.f<LC*GzI7K2{@45:O^s|]y-6Vl{Fw}hiyiVz5L{S]8`4' );
define( 'SECURE_AUTH_KEY',  '(@zR[5~By@:j|/)+`v*rZ__vGf~E}o88=P/hO*;yIpeN>8A&*UIN0?D/|LovxuAS' );
define( 'LOGGED_IN_KEY',    'WK_^~UE]w%9v&4<VAm0la^<0gGz)_/RI0{%jzT }f<=lX3R{`LhWwG-SCf@J@bqk' );
define( 'NONCE_KEY',        '!72ffo^U.q;ZDXTgswOC*agJG$c[(v22X <fk0yyC16rTHc0l?l_BNvW,p %6sDQ' );
define( 'AUTH_SALT',        '0$B!!a>UgV%;:v&TA8YU_[;r;V`O?yuBUET*n!^sh28w)&0m0eW$DIINd @dJl,J' );
define( 'SECURE_AUTH_SALT', '$x]$5c$7OJ6?q/2oY&XJR3h_+agURdhb_UVU+2$ao;Pkcpwt`rp.}+(AdC?_I5[a' );
define( 'LOGGED_IN_SALT',   '[&0A8?4^:nm}<Z67V!x<%7R?:S634}Q[QTs K7}7FY[$h^OX%Ec:al[fT+ZI]g-R' );
define( 'NONCE_SALT',       'jkXQO+Sivz}3_kbiq7as=,IKoEvCOo3X7nQ2c`h/<^LK7B^6TD2|^^v~v*eY2Uta' );

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
