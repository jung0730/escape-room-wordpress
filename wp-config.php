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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'm$-?;_)v>?<AVprtuOY eL0:D^304@kw[a RB%lw31@n@axyToT3gFBdj?/-A_Kg' );
define( 'SECURE_AUTH_KEY',  'vK=[ZM3Q~$y^m; ]o_ca2mAfPfJA[`)B 5|y#dTDO)9fFUcFlYVQJlswLng1CU.F' );
define( 'LOGGED_IN_KEY',    ';xp!+i-Il/UO&@},nK2kp;sR.I7e0HA,KD}z]u48DE+p*qw0.ifY,;4:AoG}8ncM' );
define( 'NONCE_KEY',        'NtFg}pyGQFSJb9R:bURt.Vw<h<H4{68=j73/Pa-;(h~FR}jbp7B NDZ7VbY/KM*v' );
define( 'AUTH_SALT',        '}u=&Dk]kj=9OR/7c1M%t[z&zhQAz_C+0s!$c?ZwD2@)0eo[aVmQ!BD+P#CRur3lm' );
define( 'SECURE_AUTH_SALT', 'EWC*Iv|mdyUlN-.l{bx7gZ%8F#^`)qZp7/RAl96}|e8]BHmc4G?%$K)R+x1@j~)T' );
define( 'LOGGED_IN_SALT',   'H,?_[$XoC692.rh0RK$X9EMdVwaF[vwyP 5/]ZRfh. @X52{Y7gM(Vb;HR(#t@VH' );
define( 'NONCE_SALT',       '<ICjH%z6gO^`Gw7H8_kb8PD5Irl!a$eH[4HF/b8RXaf*F^Nh3O?/WH+VDShGd7~5' );

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
