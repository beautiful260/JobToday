<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u439280899_ejXS8' );

/** Database username */
define( 'DB_USER', 'u439280899_rucod' );

/** Database password */
define( 'DB_PASSWORD', 'wF7hREnsL2' );

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
define( 'AUTH_KEY',          '~;v(:@0_ecd/0R3sX-mXY?Dp1]R0V2CMxh%3pW)77mE|~4 ,^O6zWf9hra-SO6,k' );
define( 'SECURE_AUTH_KEY',   'YUg%Sl71P}~sSkmW{B;{(Bb&N; zUo(Whx#b7QNpKjZMMY6Z0m>m&qR*+QmiHm+F' );
define( 'LOGGED_IN_KEY',     'DV3G+@/HiV@*yl5,m^Pks=@FKLN-N=9&D#Iux&O[$}P O%sStOItouZWLHh&E>OS' );
define( 'NONCE_KEY',         '4%K}&ela14V[5soyN &[/b/~sK6oZQ!$to`Hh~i|qubf_7#`=gkyZ|YTV6tSU~UV' );
define( 'AUTH_SALT',         'c7~ K!#@Q9V6Zg8+K%9R6_$40h~xvAFwZ_Qei=oR=U@:fW SYHY k98nx&p9^};l' );
define( 'SECURE_AUTH_SALT',  'jRzYg{bBL~R$wTnp_>8aY9/2i4UbtK+BA2(.,b,PwdA=1)nB9X3IpFk*m2tV>Ep{' );
define( 'LOGGED_IN_SALT',    '6-mv~nD!}ZV:- V$,rC?m%eb?e+@>d8y@fwy46#IS4dBY20*=aZ:;^z;X*?6=:vw' );
define( 'NONCE_SALT',        '{H</5HUjFIz,zyZfr^<hX1muRcaHuMt?|Da2]Q(T.<&KL,i5_Fbx)c:>XNw]AFu`' );
define( 'WP_CACHE_KEY_SALT', 'afw{r1QUcQ)8VIzNuG+d,!@Q{;Vk=>G,rw+dSMtTQ?hnszN`bH%^K/`dGgK%pmHP' );


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
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
