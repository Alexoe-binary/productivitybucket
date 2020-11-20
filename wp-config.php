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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'productivity_bucket' );

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
define( 'AUTH_KEY',         'TwVk-;Qj%ZQI^WB# +dr]cC9JmerJm0^-xy<$^RDszB:[AK0d7B/,N;3uW,ysW0B' );
define( 'SECURE_AUTH_KEY',  'LrP=Bq4 ?$.Asj}0qMs4+VQySL;K:?8*X_z5FjI%2<1#0pq+&zNz|Jk4_L`TgXRy' );
define( 'LOGGED_IN_KEY',    'v6Kw7ll:5D4?8DKW#% k$K Ux~^T#t9qI1n03=2sjX(T_)Lm!T#$W4]2Y|GmN~H%' );
define( 'NONCE_KEY',        '7[ !&YFU<H/^c:UYI(g(v:*~Rb#z`KLfMZ!Hcp*;OsCQsE!|;;:4&848dkmc=wee' );
define( 'AUTH_SALT',        'b&Q:~P:^k}<5mj&2Bm)qixHt<[gP8Na5W3XV]<X!V~gD#FlUTRrlT<oxMFp!t/0n' );
define( 'SECURE_AUTH_SALT', '.DJam*SWwih)%)~s^1..iU]iUd,j&bZ[3F@=Z.23{TFSzi8 JV;doMpK;+WWQAZp' );
define( 'LOGGED_IN_SALT',   'R$5ZRxATEh$-OhEh[#<tE[p(^*7(fl8{JGicV@oja0Ygaf[A[[leA89v.WSDAkvd' );
define( 'NONCE_SALT',       '_]n^Qu|MXvSv?{g`V`LHs?iYQ?N*6%yW5wsWTh ?w/W9Zaw)o]8tH$/`ZIlUMN(<' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
