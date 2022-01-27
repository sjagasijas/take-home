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
define( 'DB_NAME', 'take-home' );

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
define( 'AUTH_KEY',         'ti}op/$`$CcK9zx5>&D]V?X;tB7qa~dNWF0eO@@~#j9s*gZDgU)49g57/FLiUT>1' );
define( 'SECURE_AUTH_KEY',  'xvz#Jo7<Ci,fGs5<ZEU)XsNh/4%uX](%}TeeSIdJ@!S-w04Ee^jglk)ga5%;8PNs' );
define( 'LOGGED_IN_KEY',    'W:<JMD^6yfjszkN2TN)7^|:Kf#mzIoxWTb #.q-k%d-t$ `UP*vl#|,,56& I0:e' );
define( 'NONCE_KEY',        '~baTb[tNnERAYwGt@L5lg4q{(HtWstb}bL3TR5^$4m/MhE#sH*/88BjL.z.`/0Gq' );
define( 'AUTH_SALT',        '=O6{<M*;x*k<]F-aPrAu*9wf(>_fZ]UlQJx#Z)tGD(Py}K  Y/v*eK)j7H,CpZC-' );
define( 'SECURE_AUTH_SALT', 'jUxB>kG+-2.@@)Ko%c9`J:phkTe&Nb<dRVNzjhGo,xY2Lq[?[?P`71(1P*(Ag!TI' );
define( 'LOGGED_IN_SALT',   'WFJ(fTitG)AkapES3tab7*V0b>N6Er|>M6pp.4&JDgRpYkWW/WBx_%NG2%VG3)mQ' );
define( 'NONCE_SALT',       'ok%Wcj4K9[gZ;G.At1/cENlR(LwADTG]yK5Ar]Ipaj1<k/^>Ta8De>:%*b=dA]:@' );

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
