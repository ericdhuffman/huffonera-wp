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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define('AUTH_KEY',         '$@=B,f|1=g#{b/^ZNR;:6TwqsJiYXj8+KlQ$39-pT/<pfLNP3+:b:eR03I!87e**');
define('SECURE_AUTH_KEY',  '0l@|&,n06OcInSh|eCbk76p@?i1JaU?|LyyL+X0BE8&m,G#&:703t$6Op`U3nQ[*');
define('LOGGED_IN_KEY',    '[;&Bx0WN0g28mb@hIAbm=?H9v|LJH$;bnC7>)k-/,E$Dayu::}l;w}3r]DAa|l|>');
define('NONCE_KEY',        't-).CB>kg_zV2|?gLJEaSWB~JFK{7Go0>LD)GxU*sKY@cLQ[cF8T;c]*1QGqUhul');
define('AUTH_SALT',        'fFsbbkXJ<:M_xc5+/;gA0MX9v/BAy)e3Bk/1-Fg g._?WalT-{ieFwNo=7u|0-R>');
define('SECURE_AUTH_SALT', '6 liF&2wRRIGfn/A*pum+HL!|lvojIUk6%J5BL2|jJpUc;n?Z?Xi>v071E:>+CYV');
define('LOGGED_IN_SALT',   'h9P@.N}x^a0>DeH+(+n}V.SlY%Ocm`]sC<B?5 B;9q-gDd>3fH-!3_FGXj)+.Zv)');
define('NONCE_SALT',       'LF[VO(Uq~6cAhcFB+-hS)G=_D+n1ighgc(TA?kpXlJg/UD%6B]|9Z]Z: uVwwEH^');

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
