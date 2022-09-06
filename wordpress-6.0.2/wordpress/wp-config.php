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
define( 'AUTH_KEY',         'j[-Zuj^@ RPX#n[1if^{C_|Cqtot;USNp0s+K$f*(<`^%rwi1}>X=gAdJUS%iQtp' );
define( 'SECURE_AUTH_KEY',  'uPz(m,tN?:PC)j?!NuxZ$Y:0cLlk8Rb(N8Ji$|u7 WP]#9ul*-]CGR+zm!m>V6s:' );
define( 'LOGGED_IN_KEY',    'sQ`F._mf,b*7xBGsp{!#;>-yK/hO~>pX35D$o}tIPbls{/;&2SXQ1knqWd[{1My9' );
define( 'NONCE_KEY',        'Ap;^0L3Ricr005iSo<m(@s|kTsZk56$PZGl&L6S[c/H-nq@qrSu/~w[mD(;^Y 7`' );
define( 'AUTH_SALT',        '7-mg{,cvx>gi`$^Y9Jl-wg5%E#2qt1kc0}XMwV-0:-EjIKQ!]@RYJew(o1E ]lVK' );
define( 'SECURE_AUTH_SALT', '3P:IY<pO/m}5G>5I*D3%LQs1`9R^D/9_]pfn<>7-/2+%5sUU>65`0tI1(Fy$  Pp' );
define( 'LOGGED_IN_SALT',   'W+P}) [gCWu@i_]o8NAmm6GHJlc@8k0,(a^OG4@bbU!&6M/mc7lwEy([g@?dKBf?' );
define( 'NONCE_SALT',       't6PZFt{SX~sVIUrFi$!Pb#-+j2}9SJGEgzCRNmk%Z|(8WSbk0GqPc:LBa:a8->0)' );

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
