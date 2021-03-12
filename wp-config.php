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
define( 'DB_NAME', 'advertspot' );

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
define( 'AUTH_KEY',         '?]R4K?P@w/9l-+50Wg3z#e8EiphaQc5?zNDP|AW?Zr8yNA~N;K]U}##AmKr7v[I&' );
define( 'SECURE_AUTH_KEY',  '2MniPvEI@D{@;.BK2|Nr~m_EV;zlu<M<x+,4<JW^Sm[7,:Qrr-c!{C=-m{Gof#F>' );
define( 'LOGGED_IN_KEY',    '0bBkp}pcb>Jr}Wj|Gw*JU[9$6&y):bbyU$RvK-H>)}4]f3pf93|cg_Vq~s69#.=W' );
define( 'NONCE_KEY',        '2z8ZA6HN^}9s+7~?AfJ_7& ]N4OLt4,$[#0je.4p=C`>IL*ZpXU~Km<?W6dN^E|c' );
define( 'AUTH_SALT',        'wE:c30Z.`FOSD&a94KDHRLTc,Z<fHWpyzYLq^qtmkmF|z$]5@*2*H],[$gVLA!!E' );
define( 'SECURE_AUTH_SALT', 'a,s&)N1jsXB][jG7y2=3oid:R-BzLt;zXt tae4f^~#(9|%!6tE&.[Wn5,^?&jtT' );
define( 'LOGGED_IN_SALT',   'O[ig%tWde(O!7ohE*!,?]XI=}%2]JZ) #:;-ql/r2,|^b!Qk y5_{G2=i z|XbQ+' );
define( 'NONCE_SALT',       'lSmF{RaDmBDT3dRbKKd2x^+;zcmHJ)zuXtz7v.hy~|:@WSG8n6I(NfFO8uAH504^' );

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
