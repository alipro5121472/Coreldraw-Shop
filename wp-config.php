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
define( 'DB_NAME', 'u163419425_LAJc5' );

/** Database username */
define( 'DB_USER', 'u163419425_HD8ey' );

/** Database password */
define( 'DB_PASSWORD', 'dX4o5SKglb' );

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
define( 'AUTH_KEY',          'P43vIqAcdRZ#eNmrR)mZE0|2UnEFlIVA]@?fAeQHZAM-9bH Y;+F#Ba3 T~C,G#&' );
define( 'SECURE_AUTH_KEY',   'zE|Si8}TrpAdvvuGRo&1fi>{z_3B3WJO@a|++7ue;4K(mPl_4vhUxeG.82o`:L6W' );
define( 'LOGGED_IN_KEY',     '~49TcZG^>Eyl9]OP(UqZ,y]0{9bs)jgv@Ut.@npac%%&|7-(PSAwXj0KbS]U5;<U' );
define( 'NONCE_KEY',         'VCu/:q+6c&sVxbA+Pa50UN1^?7V T2]S1.N:K(esgt?7SLAu@H=lRmv(1O%;to%K' );
define( 'AUTH_SALT',         'wW(R%@~u]`/ccl- eFD88 lTQO?gC*4/S9mn`RbH&]RT^ywg8B|)aDJS$.IG`O&K' );
define( 'SECURE_AUTH_SALT',  '9h6#`4,s(:svYi[qtSQ6jC)/r{iSa<zr*>?@3;i0F=-u0!aF*1GN9`+a1jlLyfl<' );
define( 'LOGGED_IN_SALT',    'AP4#tR?wmC`j{i!`l3v@u2`J,yW$h5C+1j{KmS9>qYu^?Wc~)e;XW*U/_4U~$2)*' );
define( 'NONCE_SALT',        '-!XDpz4n`0+}=^/G6<$Ix32.C}?`Xzg&=^ART],CaQkgX,z%`$.mY;5+Y?L}ibNK' );
define( 'WP_CACHE_KEY_SALT', 'f7F4_6QHn$:Atcm5NkRMbJW_UUzWsG_)FXfC7%4d`9 7P]=KfQG4f=(SWR&!@mT`' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '15f42654b9bd7f74b74470be2b81e21a' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
