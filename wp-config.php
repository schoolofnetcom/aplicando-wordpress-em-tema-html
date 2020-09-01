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
define( 'DB_NAME', 'chatschool' );

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
define( 'AUTH_KEY',         's:e>h5m#%I9_Wms(kot} iu=h7^lKJRZn%zIQ,dR/[`eZc-%[S0|35O`(yjv%.nM' );
define( 'SECURE_AUTH_KEY',  '!Zqs@9<2,)9uWJvVSEvHr:A-SN0N.2:GgUGC^R<x{AmP82(hP6T<aOw>}Gb|^d!3' );
define( 'LOGGED_IN_KEY',    '6)5$0><+ySA0px<ZGw^n_z+Nz7zep6IV}M=hM6jAY$OZYjL/w.$0Ia:V}hsHg1%)' );
define( 'NONCE_KEY',        'T}L*MM*6y0Qhp9Y%m}apG79v)DgY#U !._7l;VOW6nt,}+l<bm? ;k33{bc: xim' );
define( 'AUTH_SALT',        'NLu31 piV6S;I3z;fWTZ:5~o:1}[aDT7gZSi7 Q!`lXo bRjK_a6(MES?4ucLc{S' );
define( 'SECURE_AUTH_SALT', '^h+^!$892WA(<]FQ GueIVn]}ohWkObto6D^BVsBiRgK!=BAyhdoA+G-28#S7Hd-' );
define( 'LOGGED_IN_SALT',   'hDbY^cU}Vrv<{_E+;QrH4 %fH.50#}#2b0qvV*<EY!QX:|xg}PNW9A]8b]xko4c}' );
define( 'NONCE_SALT',       '$9iF|,y[0|fvO=*~?a[4y{w1Tnv_xzn^!Dm& g %*[l<,*xj~2ZDp!o6Ef+N(k39' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'son_';

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
