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
define( 'DB_NAME', 'restaurantdb' );

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
define( 'AUTH_KEY',         '&|:Fecr{!UVK*mi(ucg-^pIzLm0BlFNRRArO2SmW0^,Gs._o8z/j&sq#_3M4A6a%' );
define( 'SECURE_AUTH_KEY',  '2iN.0IH/w(Up;3-q:oI5^P&k;nWP[1]0]fHa;sUs?2JzsVIv]gMs=AsP9<0}oGb`' );
define( 'LOGGED_IN_KEY',    'f_4jKTal!e`~N?RA#j@(6q4oud^HuU*L&be1]1gqmC|6SnnM+a6aio{%zs|R0t+D' );
define( 'NONCE_KEY',        '[npOKw~{n4Br}c)5rq:D.p#R)O718eH877va<m(eIN<tRSIXz.yyEI>{3+)&vtzU' );
define( 'AUTH_SALT',        '(b)(9qr^me,B8w,KsxtZ<9]2.64^/Re9j}(EiSuccDf|Hq&o<MSeU`^^ PTxEoc=' );
define( 'SECURE_AUTH_SALT', '2P950rZ=H/uf0zQ-($/yu147F3dB*s^ioZ{=i^E$l8Y,vItk}}nJCi5/iaIE=kG#' );
define( 'LOGGED_IN_SALT',   'uWR 0jS[]vvqkqv<Y] ASb)Q52W[@`9.-p~oOGKm6zo4WrOozBb_R5,{^B!B+@Zh' );
define( 'NONCE_SALT',       '8~H.Z};%T&OqVQ/r=mVvXVN<D[H8g4a3?}A|#bv{_,,?T31AYE..HjRR&Koe+@Q%' );

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
