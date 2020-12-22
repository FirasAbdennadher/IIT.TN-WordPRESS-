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
define( 'DB_NAME', 'firas' );

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
define( 'AUTH_KEY',         'uoB=WkdD%42e2SX<v[O[Vjbw*iz5]Zu#nk>O,i@2|LGlLL)8_BO;=ee7[:lSfb`w' );
define( 'SECURE_AUTH_KEY',  '>i %`uF^-w pb2@!{sBl5X}G[bmp(L?dnSaxs<>V1YdDB!ekjmd^9 WvtYTfc:=m' );
define( 'LOGGED_IN_KEY',    '+;w;`}njM9YrP(|p7-Oz4&#ev&^Hz-q4Tb<u|)^fLLHrGh}Qct1Zv9pk:K)fU=s2' );
define( 'NONCE_KEY',        'Hc0^[lO<.aFx5kD`ZdVKv }mI9@T9O1g`?Od}bY| *Am*zuQQF<i$&rCQTx:F)?w' );
define( 'AUTH_SALT',        '5WD;f4T~#%B+o5vEl+P& &Efzg^gj3&y7Sl(AN//SK6sR3F?2c&J-uI+GJ2i`Eob' );
define( 'SECURE_AUTH_SALT', '+4WIvl)*rN13dzb!(W{F2j~*<m!f5V.}U}SpYLa;80jAfOp0{;P)Viy0b&1nuhFb' );
define( 'LOGGED_IN_SALT',   'KmwPV`26b)GZ1+FkDpwzc!,:YS<16+PvRK~s]=hufYi,]Y:V8!$QLs<5FBiRR8bj' );
define( 'NONCE_SALT',       '`]%O;c37eaeHGg^TgD<q|yY_T=_W%[prws3Hl5hXet$Y^*tu_kB$-IGXGjJ^1z6b' );

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

define( 'WP_DEBUG', false );
define( 'WP_HOME', 'localhost' );
define( 'WP_SITEURL', 'localhost' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
