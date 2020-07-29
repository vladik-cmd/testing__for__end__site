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
define( 'DB_NAME', 'timber-wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '*;Z|/32GYbf^neCw97 -1e^:Bk6,4!Tms!`)u={aP=LrbJ#V[=uUP__^:cL|@qLV' );
define( 'SECURE_AUTH_KEY',  '9^-3f`d&vHExZ^=_z9:p7C9c)i3#3+Zl!Ho+)sX.zwSQDL@q.~N/<r/~vBJz*x-F' );
define( 'LOGGED_IN_KEY',    'KFmlp H(~$QWhH#2>c7c187nqV)!}ISs0^k+0T&qXr!o%f4?cTBNn?^+*_>KkeYt' );
define( 'NONCE_KEY',        'Dpr)K`_<g{6[bw`RB&b.!jrt?<Ly#Cc2u#{8Fc[4?#:zL*k~p?DSP|?V<@dDO}(E' );
define( 'AUTH_SALT',        'iK5QPfITKtU{!Mw 2BA+R>~< 1tc1]?Nr/WxPm0Pi!1$U3bdTB2bf.mx?uqoh5VH' );
define( 'SECURE_AUTH_SALT', '6WF./$`jr9>KYK-|e4i,J,T~oPp??P${1+=F|HQ--d&)B$nl#duR~70K2MdWMNlQ' );
define( 'LOGGED_IN_SALT',   'daXM)lvpbc|E2uQ)m&oIVh;!8!ynF}#<4BdE$&3UG~V*BFU~0hgp<1bb5taAS(?~' );
define( 'NONCE_SALT',       'fjoAFH!}Z_lpDs,2/kA|7q;Xw*Bf2wZ1i92x[%6ug`ivgl%dBGW--$s}})4~zE;f' );

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
