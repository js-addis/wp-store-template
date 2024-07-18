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
define( 'AUTH_KEY',          'NDVmWR~e7rT2{U}OL?L3^WC%0l*a3QA B.|pz5zgad%N&{/1}<un!Bnt+f3OzW-c' );
define( 'SECURE_AUTH_KEY',   '$I+^rKz#J{m#BhE6cZtWS=R/*v|4ZOQNdNFP%q{c6kW9l9qOBOj Cs$*<*GF7+A{' );
define( 'LOGGED_IN_KEY',     'V-g{C*7N8{,$=+>a(O_8mrmw?)#V?LMO77 z3iu4oPF [b[X`a+qht{YB!Yf&( %' );
define( 'NONCE_KEY',         '[ssZb%ss@t_[;eR`1P-j&dMKx;upE;{UF9LNL I-imw#A5{qWWrK4<FZ,N9V9GIf' );
define( 'AUTH_SALT',         't Mn$M(bzF&g%G1>f7Y).r[ofk3]T99MQ0Z`)^3bZSnV3+P3>r%gL)PdFJ`PB26P' );
define( 'SECURE_AUTH_SALT',  '{S6~(X h=L3{gHVVyHdK3p;vVZR%,Zt+u-{P0P@}N9l%X$.%/a3dFRGaiVeEU]fc' );
define( 'LOGGED_IN_SALT',    'rcuL37D5t*v.VF_({,Z0o`/v$_#A,{!@ILD2Ci:&G7+x~WA*:`uM7`;,rY:$|ezS' );
define( 'NONCE_SALT',        'z3t_Z4?gDK30H40XhQRDG-`F1So/oDN<AuW$[[zpt@;WMa!,?Bod{4|z-d5@s4kz' );
define( 'WP_CACHE_KEY_SALT', 'X ~S~eA]H]J[Xjc!rr)DED%Guy7ny&z!h``e4=^jJ7BPe{rym2%]&RD0tii={re_' );


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
