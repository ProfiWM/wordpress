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
define( 'DB_NAME', 'cms_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'mariadb-11.2' );

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
define( 'AUTH_KEY',         '`w1Fru.For_8BC_jD=Xr;$;iw[jW`))<.>?MJE?evCKgWtE-6iE);GLu.,xioHY0' );
define( 'SECURE_AUTH_KEY',  '^&Dh#S~_n8jllk/AbvKTW;n0Y001i!0M~w#m/b,$HbGO|e&G4Y[uYg3.(|w,F8X#' );
define( 'LOGGED_IN_KEY',    '_a03X75(QA!5b:tBx4Fg9{svTna.]E/XzUTd?E~j/+TV_/|/1z_Qov9K%LI>S2PJ' );
define( 'NONCE_KEY',        'y N.)RKSgJ2aTD/Zdz5=$Oi])j=`(3W?WC}*XN}dIn_%Pw_h-&+:PDu]Ll*]J^Bt' );
define( 'AUTH_SALT',        '`NQ}CfI*?~Y@5mb=ZVV}lT8E=^#I&.~FpVH:!`-9}3 ~x?yQBAl&[i5T~D[:tcX~' );
define( 'SECURE_AUTH_SALT', '#ZU9?3v$5=BOn&?8ejA~lH/V%iu!.v(Zr?s0B4zf5:/(Orz,}%zf3L]TGQ1ls(#8' );
define( 'LOGGED_IN_SALT',   'O6$S:iH{8W@3?B7?2l!IX_qS5336}cR>8z5hl1$C]tP^RtPDTh$T/W^|)?-5kpSP' );
define( 'NONCE_SALT',       '>>a>0w%A=u(8<%ZT{:F8DIYt1@bj[ule=EwuR}kXqv0>~sj$!xv{;txu@lS>fk&N' );

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
