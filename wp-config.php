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
define( 'DB_NAME', 'midterm1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '->9@c]?3%nxQj*dfp(MxG@73VUD0A/&4=-]+@ZCv~>zSnI_JDs/94l8@HB1VWq)5' );
define( 'SECURE_AUTH_KEY',  'Z6C(~b0xowc 7B2 O;{rz@CE]>*^lx,r2H5t`so^{{.#%cXbO<Z@H+tSW1FT/B+|' );
define( 'LOGGED_IN_KEY',    'xbjcE.2tSTbIUk~H_j1C,aTrCgK(.rvdzUg2~gX!3RSF2.E:`LkbQ|-7!TgB1<{t' );
define( 'NONCE_KEY',        ':vv@D~9xw`z;0&~,*DA?5<v|&j2?TIBt!nJA0er%Zs.O}g*toI@t5d!Ov!%YUf~Y' );
define( 'AUTH_SALT',        'wiyIY@I,$(1_s=OrjuD`=EtcTa3Cz2qL qlujH@//9?/L1ml1-@#v^h?M&S,tRf ' );
define( 'SECURE_AUTH_SALT', 's<#OvI`oQ>*1d0%-nvk]=s7@X|=XJ/rSEa|0MAJh0Og4SB5Nkt`qK{b3B~VGUEy3' );
define( 'LOGGED_IN_SALT',   '}?{>Z0RvJQa>oX^}5<eq2ffBoY~5yZ,-pe|/Z52y~~-?uJf8I-T1}`N_PyG:z`.u' );
define( 'NONCE_SALT',       'NXFO~A|s6Z0l[s2G`h#2f|NnUW EZY6E%>( 7?gllAI-7Dv?JsBDfQOTy|v9YD<U' );

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
