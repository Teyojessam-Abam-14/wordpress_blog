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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'stackinc' );

/** Database hostname */
define( 'DB_HOST', 'wordpressinstance.cdctvskkaib7.us-east-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         '_z0YL:Q05iS>bkq1y(#@KM[$wW@S/oe7C(Fy<7vmYYLZH-<s?{XzJYzV0?CiXDCn');
define('SECURE_AUTH_KEY',  'u$6*)Yil71F)U5uN/x]EUO4f][=XXm+/!FQwr9MYBSy_;hM%<V]T1} XVk|e;(6N');
define('LOGGED_IN_KEY',    '1jMb^pTKjRg!pD|=e])GR,(^^RmQn3V6YSbH_v9y_O~D3vI3XE`v;*@|b[y,^FuR');
define('NONCE_KEY',        'm#&)f2:P(zvOh Hz),j8#1aykb|K5QFDCcSo|+%q{hvbyk||Z *l9C)5EEzo_x+!');
define('AUTH_SALT',        '*.Uc3t2mX6j|sF=Gh8hg-]NG<Z{P[%[]XGh^GU2d_DeX#B903..Nh~F`%n.J97Z?');
define('SECURE_AUTH_SALT', 'Tmo1/(! X,kg_b&1->V JQkvk$>D3Me8[d+?Q(vw][3ab~8PM5)]pWy`|AQkAU*K');
define('LOGGED_IN_SALT',   ',3[>5;zO-$+Si !E;0G-@$S;[j^_F~bz4!zV};J}4+>}a]&U&=FA+VexYxP*1Xtf');
define('NONCE_SALT',       'x|t92oj~c&,@O`2R^JBqV}5m4?rtx|zs%^2t?4GZUq[PHkm.ZM)QP8Un/sGYj_Dw');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
