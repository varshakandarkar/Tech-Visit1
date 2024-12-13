<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'techvisit' );

/** Database username */
define( 'DB_USER', 'techvisit' );

/** Database password */
define( 'DB_PASSWORD', 'hrlBSQG1lbCtDknwnaz1' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'lANTN*-Ty/Y|LX1{/LAPiE$W?T$]M jb$ma$e|^>9.W&1yzMb<[|:/e>U7j|F4w)' );
define( 'SECURE_AUTH_KEY',   'y)4*,LJCqTPvy20U0pkZ#0aZZ*5`/CW72Tid6 }IW,h8qrLOT%W4^+7bK[^*(6yx' );
define( 'LOGGED_IN_KEY',     '-uuTD!#8aQ51Lzva||5:[`e0WpJS0`dPiDTj6R1#s8e.8O>g-.*=X<}]h+BC#Zx<' );
define( 'NONCE_KEY',         'x@)1B,Au-ZJUPFS1UuLgIfa9odn`~#5+oy!:%QLS7)580QF(lO0y_gkEkD6eim5V' );
define( 'AUTH_SALT',         'X2pXZaU>XVal-J!|:}A2Z<L`emM/6,1X-0}Fk4kMlF(F:;+(yat.ru~f>!u7[_ i' );
define( 'SECURE_AUTH_SALT',  'cEq^|E!XF3n*)L:M{*wYU<LA=5BAu@QptH U/V.gQF,h(+BS1-_SI>m`gqiU*ZXZ' );
define( 'LOGGED_IN_SALT',    ';Yf;0,l5W-~e:z|N^sc(gWr<]C~;H@[9X>7 (r,}u!rjhT@u>0LK:A!0aC8?(lez' );
define( 'NONCE_SALT',        ']LKr&bmG,1|a`o2Wr/e2cg4Y,4dl$>r0kmrZ97pYA~4N*Y@ DQT9:+xj@Fw@C9,k' );
define( 'WP_CACHE_KEY_SALT', 'SMC9Tj]Ni1t.jLJ%}c3LN[;I`Vqp`hpv%)T3=F^[YG+k^sa9Bz]`@v1ffIyagXD:' );


/**#@-*/

/**
 * WordPress database table prefix.
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


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );
define( 'WP_DEBUG_LOG', true );
define( 'CONCATENATE_SCRIPTS', false );
define( 'AUTOSAVE_INTERVAL', 600 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 21 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
