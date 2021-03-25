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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'passer' );

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
define( 'AUTH_KEY',         'hTEo0^ ,?i;<^Jgc>sK~0yE-ZQk{TT!URM5P^E.bcz0H+4>{w;bH (W[Y>+t8mGt' );
define( 'SECURE_AUTH_KEY',  'D3#x5kn>6/y6mF>7B1(.Uy0yF.%q%te=vsL?KgGR`Bics7s.OWa%mZK=XEwPxg{!' );
define( 'LOGGED_IN_KEY',    'a]A}&p]M3-ATFG_gXRT6dS6(!+mDG[4{?]&3>?Z$6}4e/U!/j,}7E/>%M<pG;2oj' );
define( 'NONCE_KEY',        '{&[5$RG BmIv6[`HS^ro.vMom4?%)=l6IHrdKTJ0 X(Xa oLH[IhR%:}YY |f%.W' );
define( 'AUTH_SALT',        'fFb$cpF#iZ{T0D6%j,<x)(qfci)!6yYkE0h%x^pN,H%ZM^gj~2Ix%LHni{QivOjY' );
define( 'SECURE_AUTH_SALT', 'Rxy_LsNn:g:mLIu8zb`0n5]w20GNZUGyPI%%lG] o8NV%M=i>!>DbZNjdIbG8Z _' );
define( 'LOGGED_IN_SALT',   'KzBI3sMA)3 CB,GQeX*p?[6F]Pu#2&+%hw3$KZ1Gf<J9>|MN(k&~r&ODBAZ:G%J2' );
define( 'NONCE_SALT',       'm=kNL]1qwjdvS:-V{Z>mo,@a,.O_:}e;Bx+K#cEblx](u[eoTBSWDMnx@QH;+w2,' );

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
