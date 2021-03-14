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
define( 'DB_NAME', 'webdevine' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'yR{V /sTeGtI+$ky)ta7qgPn0x8LD(71<MJ9?_y}( )~$BIG>i0N|~i8|P<4WkI+' );
define( 'SECURE_AUTH_KEY',  '4Ri6A^wfE[J9v*4 oc;7b>(8xQ,J(n#^xObMMzc5j,ydmO%<Queo8]0<]%z^Q0iE' );
define( 'LOGGED_IN_KEY',    '=hbMI~Q-ri%=FEs)BAhLJFUlcg*Coq/$#rDf{R ;}j|K.38zV7y+]!>1l*rl?i>s' );
define( 'NONCE_KEY',        '^<;FG;KIWfF8zNB3EOjjj^!uY%?};H~l a+gI zSDnV?=XFH+2BlpT}H6lPw|J97' );
define( 'AUTH_SALT',        '_Eb@X l#Vm&p;qd#AXRv@SV;_N4dvcza`0Q2B#v4#F&Yo/e!Jtt5[H,hJ>=()X3j' );
define( 'SECURE_AUTH_SALT', ']S4?)d34HldI|(*;8pHS93Z8c4$=C<l8E&YLP=t+ZQMHoUUT>%r.x;@K3}KO_iMc' );
define( 'LOGGED_IN_SALT',   '=r`E)_l8qV%^bc.6ES$dW~>zkQElOGW/V{4d2B>+WyLh.aWDuwTR[Vg}=:^BbQ:l' );
define( 'NONCE_SALT',       'x%Wx`S9pN~`6Hx78Ftrii<P35#|oS&/vN[5 ?{)vfYCDu6LgRw.W!;cZ025xf6,G' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'webd_';

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
