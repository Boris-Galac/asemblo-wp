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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'M+N-6Gf_hDWd/qUkv}A%|T~a-d?Q&AWwC$PdUv2xp0$*)O (C|ajSR <Z{H&=?p3' );
define( 'SECURE_AUTH_KEY',   'JK(e%:}@sl]j)6Yk ^Qp-]a](m_$mjdjB:?/|?^pS8(zn3K$_`Jw+XrTaiDx~Wld' );
define( 'LOGGED_IN_KEY',     'Q/8}/Nk50Ibn}(;!!3QTYYq%9xd2zg?$)`Y85VP^9J kLU(o##v=~}hwMM=oJovH' );
define( 'NONCE_KEY',         '2)G~8|e%,t.H/>?[*EB]cio9ZWxMyD%k#)SybyW}?E]rcs3~nXz;D0bjt&H<<VT~' );
define( 'AUTH_SALT',         'NCWW!*}/!f.arEeYiHMjm}aJT7FBCd`h5^pF#C`%4]7^Nf{OJ80%Kwc[M,t}%nRZ' );
define( 'SECURE_AUTH_SALT',  'ICy0t}Q@?qZ[,]|dXQr{|Ra#)1f.AVsV5`CuCCr?L[]%98s%Ej0dVujM[XgL!ff@' );
define( 'LOGGED_IN_SALT',    '`pG91Q8*]67`WvrM_@H}rahb:hqbhH2EL2! ~zr@)bIgdC+U9ud?`S8|H709CMo-' );
define( 'NONCE_SALT',        'VKm}MNm*BY{mnWXMQ5:hC7d+g+^q@Z**J)[6_8nH5]9~5?lLa%vk6X) o>`Scrwe' );
define( 'WP_CACHE_KEY_SALT', '^S]>i;-%Rk(]]+lI8?U3@xaF0[+*Ue8wxuL))V}7SU6gRM~Lq$p[XJ|O:$e/C?)X' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
