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
define( 'DB_NAME', 'clubdemaripossas' );

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
define( 'AUTH_KEY',         ':IEJ>jK9<#WlxU#3^v]m,3ffVX_v_!MMO|%{W`]es8&=`(q a/%~;5>PK7wvu^)]' );
define( 'SECURE_AUTH_KEY',  ' [[14%@uuK#oU5B#Z1nK:g:Ld*|RUXWIVX9Oit}nTsH:6AxZJm((5a)RvX5O*m{)' );
define( 'LOGGED_IN_KEY',    '=^i<)q9>sdfDo^ZT_u7Ud*2r#:.;E9*c2Wul/f:tDICdNRECnp :7-~sY) &mRS{' );
define( 'NONCE_KEY',        '-{Ougkm2SO[#Cc/O]82*uvb0L(pv#VH]]sEzd.9=214qX$;XX01I{~%3uBK!hic<' );
define( 'AUTH_SALT',        'is]0CcR8l|ou5uQQW``-^g8mYz94*M4vlyG?`P2|=CDc+d=>%hvv,D->Tf>x!o!W' );
define( 'SECURE_AUTH_SALT', 'peF4R;lz;Hi+4VCo?.&IHRXFp@i5<{L*Wl0R>Ihnu7X3]RP/Zd=j[#NTa?%w*uS^' );
define( 'LOGGED_IN_SALT',   'TUdf<vM&eXp3V,{_oSh(q,D|7g-5Mg[r=FnF-{=V~dUp<<(CD*&WR:bD0J-kZ^)R' );
define( 'NONCE_SALT',       ';%S$$-G$*R|f1f/h+2&UX(D1wEbiD@?wv+kDSEX$(b- }STMs8Y5XftzX)Zgc@:w' );

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
