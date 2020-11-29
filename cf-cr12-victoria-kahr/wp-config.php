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
define( 'DB_NAME', 'wp_cf-cr12-victoria-kahr' );

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
define( 'AUTH_KEY',         'S]T93u/-mOPL`uo_Qk!?#l{=q<er+*l&ZYAhrTlIFWv8v[R1>Ee{-TJVkqM,6pJx' );
define( 'SECURE_AUTH_KEY',  'K<~>Exm3(n.t;McO[e/fbe&s/pY{-/,3=/~~449R6rA8}5nGNw0[%Xm>afH-bwfW' );
define( 'LOGGED_IN_KEY',    '8:}=!~$j,XEY1jE4WEjGVc5~jw8Gq4jf329}CHuS,o[t0gWzzQ<Y0}3w)WN)=g%h' );
define( 'NONCE_KEY',        'k:3FrjOY$#VSp: 9rim>GT<`ly1F,$0j]<h-S[O<)sF/Mpz#6f`Bl^LVoy5{b%|6' );
define( 'AUTH_SALT',        '`]R+:`3,wmy(cL~i&%.:k~7njCeN~D`NWmiXtPQp1D/hdOJdz#;PJH :6zq(ypgX' );
define( 'SECURE_AUTH_SALT', 'U^Pt9zdIk7$7/G(Ypg>K%h<+y1&6|GW1*WrIo9~XTXD2e,]B^WpLXF)z)4+]pF@y' );
define( 'LOGGED_IN_SALT',   '0&:8[YY.6TRHwn]-xigE$e2^L!n_PGu$V!GM^~Xh?C<Q8,[XYLFB1}ktY5->.3lj' );
define( 'NONCE_SALT',       'S!8C{ARF.#=wV1a-(] 2 cCOA7RYC7@D_1VlC* #bUHe.f,&%S%Lz6uYnM6h2P(q' );

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
