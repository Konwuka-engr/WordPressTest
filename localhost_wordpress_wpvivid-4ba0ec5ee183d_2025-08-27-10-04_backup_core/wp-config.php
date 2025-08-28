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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'new_password' );

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
define( 'AUTH_KEY',         'wUd[RFT0rTy _pjL]TL5,-_iSIRCmTt4$+0V85L%P*}pRK43aDR>R.(74X$09o[{' );
define( 'SECURE_AUTH_KEY',  'N(fU Z?!NsfWDU3MEr|8o=,4Z=Ilx7eoF3>PBEqE`@:05[KeY{J;`MSDRjor9SHo' );
define( 'LOGGED_IN_KEY',    '@Y3y*m^z8#$fmaD*mhDFO]GBU&0O}IPm/ngM`m3) cThfw1a5uG!Yembx8K^i@Y%' );
define( 'NONCE_KEY',        '?IANf yF]o)KkZFm1g.=6VlF$dYc}eYO%]?-dV9:&De,=hT@(w6`DpZt7ZjB[-=i' );
define( 'AUTH_SALT',        'CS 3~Ui:>l4C&woxH$YQJdtXNH4wgt@/Vyy-]7(1:6e{.&z>#RG00||[2[.lgt!4' );
define( 'SECURE_AUTH_SALT', 'YgI$T hx)+ghTkIuzB$Poeh<)X1hB.3!,P_*-cDfBLm?<7eq:orIdQl{q2NPBB%Q' );
define( 'LOGGED_IN_SALT',   'xmyBuby~BpJlvN><aLG~xaM/abIXt?IGFu{ExbKPv!L]EMYP#gQI=9xWze-/l rI' );
define( 'NONCE_SALT',       'j5I}7SeH1u`2Gy~+Hg`F-hvFZ:y7%#O;zE-0<?Kfq)PV)%9OVF[GZVF^J!I,|mQZ' );

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
