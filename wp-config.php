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
define( 'DB_NAME', 'ropadeportiva_db' );

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
define( 'AUTH_KEY',         '24 wD0^$piynG9qbw,$8X@U*Zip!HjKcOJe^$nGDqP(IKgxN$zzZ;TU8<gYvCpvb' );
define( 'SECURE_AUTH_KEY',  '{FVIVhqMb<n>:2  P_ZWQ}hnQO<Z^XU*7yV}>;{,,kiB05bo(GjF=BYFE:o@I&/+' );
define( 'LOGGED_IN_KEY',    'H1?L=q]R]@OB#c`)hh^R`V+a:iKyrn1Kg8L2iqE2{K@L4AG$VnE}aHIi$5p]g/s`' );
define( 'NONCE_KEY',        '}/&=?yFZ)@PAI]R#x57ApKco#o7|Tz$toG_[#[Q#]>SiV~10D dB.7x0gO$nl?s.' );
define( 'AUTH_SALT',        'Fv{u=4Du1WS*Bd,su|.CMunUKHo6mBQDD+Yp*I`4m[Zm#W`+JT(+I}j!rgD?].xJ' );
define( 'SECURE_AUTH_SALT', 'R{L9{_Uzb0h/G^!]er.VwY{i=m9=x~YI4*)JSwL%wC<b0m-*QNx[}!up@]d@>$m(' );
define( 'LOGGED_IN_SALT',   'lE$}9j<3e]hu;WzXYH<N(VgVOv+xgwH2ui8%2NkhhL0g}yH{pLQPPRyKcv+MsTS>' );
define( 'NONCE_SALT',       '9H  sLJj[o0ZUoi4MX1bt#GS&nf#rl$7w<L-gEPuMx$jVaX./w8E-<xd`X4;Ad*a' );

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
