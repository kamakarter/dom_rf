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
define( 'DB_NAME', 'dom_rf' );

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
define( 'AUTH_KEY',         'g@{6kOQ(<VBDL}N=Mo2O`|g Ja1f2h[Ne:qPW`F{|K:&?K?s[H*b9uw^!~!So6h+' );
define( 'SECURE_AUTH_KEY',  'z}5mM4*K`.AL/,60rL`>apPC[,J9AOTy)QvwH([`/@QKwGS:SA<!H[s(43h2^9oY' );
define( 'LOGGED_IN_KEY',    'EpdvU>fh*}N}d+X7l:| (AEs($tnEzUo5|yQO/ePz )UG]H{1^Al{KGt;V#%Q4=R' );
define( 'NONCE_KEY',        'P!km*ij<i2*q4&9pBc#mJ:,U4k{(3GqN XR?;BIU(C4}~XH%YZvU0%/hYpj_0aR(' );
define( 'AUTH_SALT',        '@f*.GDBF `3>E|AKRzBq|rs(gmy`F{p6vhjK:^Sy^FA|?wH[N/mAq4V%kZBH<e|#' );
define( 'SECURE_AUTH_SALT', '){`/$1<9ok*jBymzDP@Et9F(G/!4U<lVc;F[N!S2@U@TqCB3m(w/_>;=L|O[S3Uq' );
define( 'LOGGED_IN_SALT',   '3rTdPFh}}1>.|&]4~R#RmA|r/;su-WCS&l.]]xm>+Lx}}iBUa]wq(M2_ICm+J94(' );
define( 'NONCE_SALT',       'I]@I0FgVY2Hs1-[~:cf9*%%NHnM77p^6zl@d_dF}x]9tHuvL~DV_aJn&^8Nc`(E]' );

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
