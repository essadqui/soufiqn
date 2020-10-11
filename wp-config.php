<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'miel' );

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
define( 'AUTH_KEY',         '[+]!Fw?cyU_lXZ(),Jwa4^-`r/+o UDhnF)O9k gAB{A/UpyM]d/T:wqmj$?,E_%' );
define( 'SECURE_AUTH_KEY',  'E]P*x33JO`siZ?THYQ)HMGP9n@aK2E6AUZFtj@h8f*ln7!GW$!BHLr]o;z$>RAaW' );
define( 'LOGGED_IN_KEY',    ']67^q% BS}h?m;[kyl4|GK?R+{FI3[ed>[tGkdjWvv4jvuzY^-c;UQ+H=4~u=K&h' );
define( 'NONCE_KEY',        '-7eH?2(bjKt{I%pMC!Y}g2QxSS%=_&`A[qI$}01;J0IUwf0u<~/)2lxIsum!KL&Q' );
define( 'AUTH_SALT',        '>LSh9DAE#=YGWO;4k7B$p]B/p>x~Qeu$wJ@BZ=aX`?^psTg{Il4$Z32BE4{D%&@c' );
define( 'SECURE_AUTH_SALT', '`Q2C#FwiqgD_.Bf.0t$<>^wS_QXY5x*(Zi_ejWj{.=uj?&804f^>W`I;BYs,%3Hu' );
define( 'LOGGED_IN_SALT',   '({o6sQjF6z;B9<m{VmpLGZ@p`92sSKzNQ35<if+VSd.-+;J>ogD|=orW5Rgy[7/s' );
define( 'NONCE_SALT',       '?Lw]{bJU)v$9pe&nlB2 uZpbKQ*:A{5*`@%fbkX7S3H/W65k[_)Pc^H4L?)dhByW' );

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
