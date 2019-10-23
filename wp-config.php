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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_wp_db' );

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
define( 'AUTH_KEY',         'lzZ7</$}ByR8[oHz,2b;C#)Puj ,+mv1E&dM6<m?dMYG$6$U h8:tN!>n+d6t _r' );
define( 'SECURE_AUTH_KEY',  '1(}?.awy%t@^/JqS}*b8Ae:3k+vh%{/m}&PC/(,.hA.eD:4Q(9jar/HdyFOGz,g;' );
define( 'LOGGED_IN_KEY',    'p|b:8YO]$417e1x%|ed+S>(U)f%ayD,#UVL0.;4M=$n:/W[ON-m2M/M`C%g>g45#' );
define( 'NONCE_KEY',        '%l#VQ5%sD{w/<1:)DJ3/FkjroHXUAUwT3j9g~#zH|ksI.O1erZXt}!qU![I_yo]N' );
define( 'AUTH_SALT',        '5;a52)P61>e0dFREwcn8}XI>^n,Ym)+JFXBnXfY,C0Ad6K/QP(-RTmj]/WU`Qi[/' );
define( 'SECURE_AUTH_SALT', '5qu(erzk}=CLo(dsh?=biVQy9zz$uOVpjZFg3:otBe}rO ^zDCxMIbS]U 3M6[^@' );
define( 'LOGGED_IN_SALT',   'bxnl~*3sk{%R$Nm9ZOUMF4v*Msat@B1+]ED1sfsNNPX7JX lU[Q~qj1Ab%PQ8)9s' );
define( 'NONCE_SALT',       'd7H(_;(rm(Y?g#VD-qqn%xGCah,vz)@TcofSqFJFfV?Dt%6ewN%HG#n]ZYy;wYGj' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
