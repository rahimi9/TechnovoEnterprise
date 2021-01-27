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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '*-X~)v4P+^@{EOIgnTgcv,u+ripT|H>0|#+TV<iP!uhrZj%^/X!2VC|Ke81KK_25' );
define( 'SECURE_AUTH_KEY',  '2$H]2.J6wCVSm34?#~,LC(=;;454<rulL#qbS)-8x?p|4>7v15elr4pN;uUuGud:' );
define( 'LOGGED_IN_KEY',    'kZmU;Ku/,B/5cNz1wdEPq]gI1:j<Fr?UiOVs{U(O(#yb!vm//zHfb78,oB$}XR&3' );
define( 'NONCE_KEY',        'q%=g2U.f7SGNH,97FWv%]izFgl}EvF`N 36oijG&~{G0foUq.}@ Vke)zCt&N1C{' );
define( 'AUTH_SALT',        'aq-1BrWNf P:tm2%9NvxND?48J#jc030/<S1CEq7?B5G^5S87nszx|&h-VtX{ePm' );
define( 'SECURE_AUTH_SALT', '<R`-qj|5cO{%^uM9T{>QVk2JKBGi.B`NijG>}K.*u5B:(rhH3N*8%7aQm@kfZAo8' );
define( 'LOGGED_IN_SALT',   '_Bmx`3wlmO7FfZx*TS%k`uynpQ=_x(1yF#P@0lo16=A3~xGzqC6@pO?AUw99$t::' );
define( 'NONCE_SALT',       'dGQG!-nkVc0_uqJU|o@c*A#NqVy9J@VZ_dTW&9Y[8zvkK/N(/=H$ME}`2ZMaIf++' );

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
