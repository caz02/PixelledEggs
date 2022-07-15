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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pixeledeggs' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ')Vj|`jku~%`AHusYT5=JeM:Dhk^Xv.ikdo03xP15B>We xYa?!`7$}}2X9TuOHOL' );
define( 'SECURE_AUTH_KEY',  'Nn{yS%2o^*f/OQ)r[YJ~Qm%M[{Xsf(ESazJoSUm&Vx%-X>twk1A<T>Q&=.59!/V+' );
define( 'LOGGED_IN_KEY',    'sU25_4GkO9FVsDr{hG#Dvdejxk{cCskIuJXOqu(P*Ux0NR*R%%n5R:YmWuQulMI=' );
define( 'NONCE_KEY',        'eSFIct9VcfUx9n3Y-/?lo@^Oh2P2( 19r*v1~YR,:(6rqQ2_lT:X<,z~w_j{0j!N' );
define( 'AUTH_SALT',        'F7gz2DQBW[^WFJlQU2X>DY4U!U/+_Bl6lu)0ZJ`x[`-*q&Cq)3rHF|)84GgfMz2l' );
define( 'SECURE_AUTH_SALT', '6mOU pwwe4kTf:ws;AP|}rQK{._::480bivllH_ F*R/h$BB+Y3SDoJo8^{tw7VK' );
define( 'LOGGED_IN_SALT',   '/Yp<A5*7*f?@Gieb`lyRY6j&)gj$0e&^GD,snN(dxb#O!)N@dW`3}N07?TV-Xc#e' );
define( 'NONCE_SALT',       'fb*D_JRT,+~F` RZ,.Qm-EVd}Lf3}Yzd*e8Q_!bAUp[=(U)HH)3Gwpk6H~Kv[GJ ' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
