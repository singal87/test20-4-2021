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
define( 'DB_NAME', 'wp-test' );

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
define( 'AUTH_KEY',         '74X#%K0(|9tTWvx:oVI}c.jHHFoi?jn8jI_(:p[=vD$QXZ@(W[,K=_Wu,0]/sDYz' );
define( 'SECURE_AUTH_KEY',  'h>WpDZ+T#hv_>$Y@2}gA){L&l+PCT[H#h@[prg|&I5 }&tItHZ#{6Un0pN.|M~#]' );
define( 'LOGGED_IN_KEY',    '=-Y*sV;JD`D;-eYAU5^h~mGE{7[Bx]1uGpAS-SNH(M1Z>AF]rvRgNm]l5]B]t<t7' );
define( 'NONCE_KEY',        '~D=V~ny7{.~t~&e3=GbxcAB3AX*w1lh?Oyg!{<ii9D<aH]~~5f5.`$kO~F&dS5!N' );
define( 'AUTH_SALT',        '{HXo/|fbPg6[i^&ov@,ce>Qo?`OJ^0s,)d<ECogT2Zo,2PZAK}JwZCx=r.fCI[#~' );
define( 'SECURE_AUTH_SALT', '_Mn&@MeCeSoWj?&@AjM!J|5z`i3#+D8SkOjlv{PuU__&AHoC;2HyH  GDiw#<%A2' );
define( 'LOGGED_IN_SALT',   'KszkxP%N0V*}0:DAx@;<}zl@hcfE_l*/:}?j7YKpI(2v &(=!1*k`wU9rq<I0t5d' );
define( 'NONCE_SALT',       'w5oZgG0Q<id*a;pacsn`9=-Egq1zk-0cF[7n23&UAx>h{)e?PRUYf8w(+c)$@J_I' );

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
