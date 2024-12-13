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
define( 'DB_NAME', 'techwise' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'UhS?/hb?&nAvQu6NP)C :;&E0SeaS<!VzPcB51pD|HDh9=(Uf [^x7s:2X=C; x}' );
define( 'SECURE_AUTH_KEY',  'zzV~##j9,gSjp~OP91Nk-FT=y+D}SEd?/buf~9++&6=4_;_fTSEE@?z[nO]9h~m`' );
define( 'LOGGED_IN_KEY',    'F@|lDogjH6!^77T#OE`, 77X>]!i ~+{(2cxXv:C3p2,-p02VKB3ckS[q)RRT78U' );
define( 'NONCE_KEY',        'tzRN?)2}mlynJ7n0B2e3~[;7,m)^T^0F<WhEX<SdtS#wK37(.&.dAefK)9ws)m/>' );
define( 'AUTH_SALT',        '80m]F ?VJ6gLO6q(@&u0YB6pj&ls2.t9=B:o]Gj%*cz_`Bi:psS&Q{f|x|(yjGty' );
define( 'SECURE_AUTH_SALT', 'P!@<0D?DV,~0;~tX1I9-nw4?AOJ}yhz*xgM*8vd8XM_VCj:O?G0xxxQR)s6pbi8y' );
define( 'LOGGED_IN_SALT',   'sh&fJSXKXeunQ5w> !_`1XdpQ}EMM 00;SuXfG^Hiz k4IKE?7,-5bsCkev5%f4[' );
define( 'NONCE_SALT',       'OPl+vTsik!Qe:P3|>J>[k3q#T)SVc)Nt-]]XOc[x9u1jFow7Utc?id0r+IaP@um,' );

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
