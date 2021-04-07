<?php
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
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

 * @link https://codex.wordpress.org/Editing_wp-config.php

 *

 * @package WordPress

 */


// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', "brokerbackup" );


/** MySQL database username */

define( 'DB_USER', "root" );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


/** MySQL hostname */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         '[S,}6<>EnEba1fTJA[,wwxI <XXbAe6FxEmOGWn9AZbg; Bp8x9,kw:o#d|HB/y0' );

define( 'SECURE_AUTH_KEY',  '-ZEZWyTegseif%*gOk?m4%a|K~5 =Zn=QNi ^|W#V-5~4XS`QL3.}I~nePHPEi=P' );

define( 'LOGGED_IN_KEY',    'dP:C ,B)$ 7<afIYIz)+KF-f,! +u4_shR!?gVxXSeJ]=uWgl=ViqQwFCs;M/u{a' );

define( 'NONCE_KEY',        '.~dP-%]Hc&nfG~^+*&=tBW(RC9mvm25u.OZmDY=s~)v.?:#}ypz~sQ_4F<$]vhfh' );

define( 'AUTH_SALT',        'Qv,e&MP[ZZ$6/1>h-X<?W$eAqN^E%vn%/85g9:40+OC.,8,FXv{,P^Mj6EISjt`U' );

define( 'SECURE_AUTH_SALT', 'Cc8[P..Fx(up ~<1V{}DW06AtJ$iv[n$I(_ZchWU&B&pI}]G+|)O7g;lUn5gN^$w' );

define( 'LOGGED_IN_SALT',   '7Vx?DQvJZom:!u[%;M*sArkBt/p:rrPOaC&#r;Uy#-0OH}c6Rq?G~Lr2;5a(`@TA' );

define( 'NONCE_SALT',       '0|:}@s%@JQ>Zv]W</w#b,CU`#.bfUM:)I.L-m{+qs(.2h+!;m6Muv>jdON.J :K`' );


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

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

define( 'WP_DEBUG', false );


define( 'WP_SITEURL', 'https://brokerservices.netlify.app' );


define( 'WP_HOME', 'https://brokerservices.netlify.app' );


/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Sets up WordPress vars and included files. */

require_once( ABSPATH . 'wp-settings.php' );

