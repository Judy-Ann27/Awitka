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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'T=SOxetEr78[@mg!|-N*ViTJ#/_bL+?t UrW{T0_MZXs@r=0faEzq6:dQ-^x1md[' );
define( 'SECURE_AUTH_KEY',  'mSIO%|6hUxH%^!ax^H*h{i[N]KMb:ROcmtuyDQtg]4&5X)|y(^G{DnG^`G$]#RUc' );
define( 'LOGGED_IN_KEY',    'bd]H(t<N;1BUHS;#j<Yn#b!I9hw7t^$w{cezM@W ~p}H.[apc/v;tAz(gn7!/Y@s' );
define( 'NONCE_KEY',        'H^t?w+1OZ.<:sRoISjFEVl)DI5lh%1EA$lG{l;P=sYs&R1P=xLcsF8n2*{{R]q1f' );
define( 'AUTH_SALT',        'zX&-a99IF5 .UEXC.;N9ReGTVke)$b6~lwk6#<vlX`Mj2U_.59L@Wa#0P5VtfN1:' );
define( 'SECURE_AUTH_SALT', '08U/RsIPLMedOXoEqp,/umUOwe8VqVbaY_{o60G.P*c7(W[Z|?Rr(K@kiR)BfGTa' );
define( 'LOGGED_IN_SALT',   'm/R:pB{|Shssp!M(`okk8V#FbQET3~V~WZCr=l!Y:m>sq=/ritDonE~E3;(aj@)f' );
define( 'NONCE_SALT',       '1YHw@^0-&iGy@E|@w^{!!$} 8/BTN78hdfV1J75W>nS_&S~{y+-KzUAVd%x;s%{O' );

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
