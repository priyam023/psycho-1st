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
define( 'DB_NAME', 'sengupta' );

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
define( 'AUTH_KEY',         'dNg{lAx&QuqL?An/CdFP5AjH9:e<xy5z|aJ5ruCy^I-h{W! F7=6YA_2,dGDA)Q+' );
define( 'SECURE_AUTH_KEY',  'va<{ZvCs+vIn.]8oEaz#cR$rNwHVv#y|R_Eb:Oy:0fxdEcbs4z:)ig3C%oY#&J&8' );
define( 'LOGGED_IN_KEY',    '3h[0GDqq@q=N*9C@;}JrM]&2lz8*uPsQ>/L#Vmytz,DtprT{t`dTR?7RqFm^|X~U' );
define( 'NONCE_KEY',        '?B4bdCrh4hmU7D>jy9[TZtl|^f6>zFRse:MH7h#7IgW<m_AlD5UXrjRgJjK9.P[G' );
define( 'AUTH_SALT',        '8xz]%wrO=&I(F|wXe=sXCY`9X[/opE!9KnwMggcp,f[lpb4L]V$zMk(1T~Mm<8?Q' );
define( 'SECURE_AUTH_SALT', 'YHfn Jn&im6.N*?=NKG_$V[.b]u?3S6<Hdnf^THgDdG?SCc6Rv}g,|vB7)l>h)Su' );
define( 'LOGGED_IN_SALT',   '19.L9JjPpG<r&7S~3-hrI5CP;5Qsm.)+Gfx[CU;*;8hXhnV8>&eBZmXU<g%}qE=u' );
define( 'NONCE_SALT',       '#U7aZ;mFemXzJrl3kbm+nJELkY)y.xd[_WX:tx(!sV;!Zbc0BK*753*pHeNUA(@y' );

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
