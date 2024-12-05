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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         '#`wLn.P:,,;j0+w,3-5:LUThM&9)y;avGjJ99?X`}@g}!sY`DOs5cpyy*{q1&-s0' );
define( 'SECURE_AUTH_KEY',  ';ct2t3 8?dG4g7&@SxM<Gck-_f.,x$YXe3moM2sly,=Egxj]hMQ!6B+qgG1Pg.Uf' );
define( 'LOGGED_IN_KEY',    'w!vU<qyk~]-$AM0=9(`.W[Yx5ma/krSsyI]YJ7kT.+E$p=EQ)FZ)CEgS n0x3`zE' );
define( 'NONCE_KEY',        'phci_J5^LR}7cOg7(v{0#Qa+Uj|v74J0OUyvoJ|/<X7z!B7l[OmolbrpUdC>h3ho' );
define( 'AUTH_SALT',        'J9g&9j$^yA M*iu(m?7*cQPywcJ&5C{.xlXM3xbdYR{Uk5[@Ou`Lup)]=ld*,^`O' );
define( 'SECURE_AUTH_SALT', 'F~?M~nia}5uX01)^I0%GP/ZsJ@TH@k={%TKStK`8FX14C7DG_~i<e0i?Cw3e=3O^' );
define( 'LOGGED_IN_SALT',   'F>;U[,0XdM6*sp]HcI?(>B=<#q6Ukpucp~tHE]=A5A[(Y`{z}CL]_<}0+{t}qtk)' );
define( 'NONCE_SALT',       '$`txwc5;YO{-==7mpOouvFP@Vd9$ooy,lEt.cM<I0c#^q2T~49uYHX>%e{%4d)t:' );

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
