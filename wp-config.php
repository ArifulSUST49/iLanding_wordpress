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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ilanding_wordpress' );

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
define( 'AUTH_KEY',         'b1_?xr?AmzUxa`E1)P_65ipsjx>)}|an/vd!$)A^d6Q|NF5VS7+ef0Dcz|UwI6 Z' );
define( 'SECURE_AUTH_KEY',  'CVDrl%tOlC>g4QC>%*vr&H%tGg2ew:0P?C}#3]{@CVC53eoEuU|}t.nK5^UsAC[X' );
define( 'LOGGED_IN_KEY',    'S^Klgt^Fpwjk5N|Ep=1@!:mjsVj+DK%:j_DT|0qoKaru7l;{)9{[Lz*fl38ZnPk9' );
define( 'NONCE_KEY',        'e|x&8iHkkp#tjZejrX|3I7P kzB1Qs5*n0Mpm>!X!|i]cZy]-x)(69~tuKK`03SO' );
define( 'AUTH_SALT',        '5<u%!i5?UVg^.!]x3nc8nr_gdf>CP%e}h?F?o]Y3RXs!WE#1/|qJpgIRe-|A,BG0' );
define( 'SECURE_AUTH_SALT', 'yB>E(1~>niv~Kx{cO:*p#4,4xq:1nALLgZE4U~O?c=eZ4A5xvKK]RDK1tj4H,Ff-' );
define( 'LOGGED_IN_SALT',   'z)|)l!bI0r|9Li:&FF>U!5G^}]%m9|/|#{>IjfWE#p5n$,qN~NI/|^}UuD~$QuC]' );
define( 'NONCE_SALT',       'fX#BqU0JO&0:37Tzjf>LUPwo9Y74.QsS=)uObnWWokt&9!kN`/ P4N,6d7VU1orn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
