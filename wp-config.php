<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'host' );

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
define( 'AUTH_KEY',         'yyJQICe>=++)]7qy9MTJya{T~#npbbB79W8~(MxY*O5MANiW63@Mq(-EWkZ&(O4s' );
define( 'SECURE_AUTH_KEY',  'JET&&q#~pf.IGWkNzG(<M@&kIKhQlhxg:aQP8#]9:w1[2De3>6lG=Wrn9});rX6P' );
define( 'LOGGED_IN_KEY',    '>-h6>;%I/J8;uU&Cp/1zBO/[e{LXzL<@M9HP%#fXhoAdzz$Z[J^<6k@bFb=.cRA7' );
define( 'NONCE_KEY',        'x{&!v=s.B:QV=~H:-o-_e~prCpC?xX=j2+KbdKUI=<0d;,U4&;9e/M^J7wDXP2_F' );
define( 'AUTH_SALT',        'hA@Oo6::H~=u2f2^pEYq9j3?218Ry6Z. qViA !i%;Xe^C@f[c7jz+uHHPY/q0U9' );
define( 'SECURE_AUTH_SALT', '#4Ua<BjdoND&{NJ|}r|||s3F;b)sjGm;H`<K*Y4A;jZ/LB&x8_b/B$gW-9<&Aozz' );
define( 'LOGGED_IN_SALT',   'n&yneGc^a3;H`]YwSCQ*$isHnt%^[L-;63PZ2@pp(a;#AeoEm0*$!kv%QVsM1.P)' );
define( 'NONCE_SALT',       'dhy=E315Xg/,|[UX>_s_sJekeCX`>k24:aIby8x#(6b>#8%!aCv_?2c@9b&VgTMK' );

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
