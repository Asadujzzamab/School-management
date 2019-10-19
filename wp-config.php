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
define( 'DB_NAME', 'theme44' );

/** MySQL database username */
define( 'DB_USER', 'asad' );

/** MySQL database password */
define( 'DB_PASSWORD', '12345' );

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
define( 'AUTH_KEY',         'R`dj=h3O=5SPwR86PO~aJ8t14vEIwv#WJpI|zsPS+)$d;cWm2W:Jd F*&,nor<HF' );
define( 'SECURE_AUTH_KEY',  '5-H;pHiF^hC|E~C4L ?{u^Qyl^VTrxX6IDd/w?5;P?x~lo}QgAck0$7v>HKxY J/' );
define( 'LOGGED_IN_KEY',    '7*UYP;QuYpzngXaoIBadJ>mF`tN;r/`Z~gPpZjsj,`lYGGWfQ5BaXJU&,[j!=p4c' );
define( 'NONCE_KEY',        '&3S=H EgJF`a|o%l&=Z])DzDQ Wh>Z@jZ,@OsS[ x3^BZ_gK]:gCD*D83paQ|SIs' );
define( 'AUTH_SALT',        '9m12iQvhnL8>bw%>Gh3jAL87}<>!BXLP@21:h,=w;.%434bAfXWoa)y)UjRNUpWe' );
define( 'SECURE_AUTH_SALT', 'tnU1VDy=F:C/[a=m?@7*XL.D}Xssk|Xi*MygLV&x}kOmJ:g_/^&mr`is5M,mmn01' );
define( 'LOGGED_IN_SALT',   'jZSVi4N&+)`iJq4G|mQBX(>8jiwF4|!IIi@Yr>OkGDXa?g&;6hi.UY%M7ra7g~y=' );
define( 'NONCE_SALT',       '+6y/SyW0xc%LUwPT@6Sf2/~e!&D<nje_6Duq%q[jdhGcAOh+9C0AB$looU@%C5s7' );

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
