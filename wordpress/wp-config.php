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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'E?OW#cSZT@Vt`KT|*da&cb#W$|%G*6D7#ic]f L9H^]z(}eH/Eh)Vzj$:KP^:c1s' );
define( 'SECURE_AUTH_KEY',  'D39qjy7U*:nne(At]*Wxw=`o7O~yF~An|x2=VRL>4/}]2a!#eop(bbnbPp+LBt6-' );
define( 'LOGGED_IN_KEY',    'CU^i:USBYYUps(<CHkW:HO0DP=g/]Iv=h%3~41tUCI|CkeI_@0[^$DfLg,a/MVpK' );
define( 'NONCE_KEY',        '^9-|d{8sX )K99Xe~x8o:/>B=ifO>rA.jz A()I1OfJRsA}#j &=<Xbdy%.3F85`' );
define( 'AUTH_SALT',        '4z(|XHaN bN(*5i!ETvT:f(<qUISDA(zP`b2dld|TUTLEk=kS|KB|Z@P6:c`?X1U' );
define( 'SECURE_AUTH_SALT', 'tMMjV3*#^Ga/FX}Y@%b/`0-?8VrJ!jv>J6:^MTok^eR^[iI^-}vP8Xz2n(}8Zl@U' );
define( 'LOGGED_IN_SALT',   'ttdPox@,lr(c0t>^~@Gv&/o/) =@lTV~6@igtJT!cS0))E#F/4>EBYO7OK;ftnNh' );
define( 'NONCE_SALT',       '*a$BS~Jp$&E;Qs#rj5so;lvmH-b{2]AnKe5YzUQZgErG;<{JjymPj$!t_iWucy{?' );

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
