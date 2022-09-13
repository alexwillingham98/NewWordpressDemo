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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newdemo' );

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
define( 'AUTH_KEY',         'RXBdaJTRmJFMC6o.,6Ezg+:J??<25K=p^s-@8ii{&Zl9-F&Zw}X,=Z+i,w[t9!:P' );
define( 'SECURE_AUTH_KEY',  ']y@o/TIZ.&G2B::wCx/0mftWEP*MDC4B3<ze/ :nJ,HAsi<`WY.c8Gw^EEI/+(|Y' );
define( 'LOGGED_IN_KEY',    '8`/R4gOHF6SY0#ezV3l_,kw$!E/aQ]O,.V|!a=7V0P^&%hIAi1_J::n!m<oLt%B2' );
define( 'NONCE_KEY',        '[RK7qmE^2!5>!:*r5ps/nbA:sz^6js>@R^X#jD_`TB3s/@ZiGQ2x,,NpZL>W%G9]' );
define( 'AUTH_SALT',        'GK5M ^@`,z)uPzKCMDRo*?Bo_:P?d*bF+^6Z_fUfy.mz+?yPA(jZXgwaeA&C^%^R' );
define( 'SECURE_AUTH_SALT', '|Athbv.lKFS``,Q(O;?R*A`s8{/R%7H{8J<eTMHBtuMm5rB`ew&Qc-L}G`D4!&b;' );
define( 'LOGGED_IN_SALT',   '/D&v<w(l_J3vr+[b(86,2<nSH-dbv`/QsC3I]{_M[j|OoGIx,,Jv_@l&L4 #mh*V' );
define( 'NONCE_SALT',       'cgbESdQ]}3)WGh-5y)NJu*M?r;xRkYsJFh;=f^Q(bNT?&Ke|_ivV0;:3>s6l#_oU' );

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
