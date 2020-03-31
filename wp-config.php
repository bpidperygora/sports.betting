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
define( 'DB_NAME', 'sports.betting' );

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
define( 'AUTH_KEY',         'Pf3~M>EkTbFKoMGt-Pf|5s}$q5t(s69|;?te%X3X~[fo+m:vIhq;{AQV%%t|b|eL' );
define( 'SECURE_AUTH_KEY',  '8l#F$GOA4ps{0naInf=d/dh*RW;.~5<?21?6Tj5TzlH;`E.gG~ebxpx@7lr!MZX`' );
define( 'LOGGED_IN_KEY',    '`iM!qWHPA*fq%xpog+)P>lz|M[yG(BPpswI=x:O{auv?ptYB#pM>3[Y@>&Hj,W&E' );
define( 'NONCE_KEY',        'NyiGG:tK?YB;~&Em|tp7m[UsSi&_6>r<V$/B|(On+WV[=)(]knscZ^]px8dE-rO~' );
define( 'AUTH_SALT',        'x%3>e>;5Rrt{m/Ssz%gM*r^~70Pt(P}(zFTD@S=JJtPp9z2&>d]q][!RSG?bIB1$' );
define( 'SECURE_AUTH_SALT', 'LnT)=p=?GdbTa_J1,kViX/4eHPs6_!*A--tgdG9Pj3_Ht(S$s5dcsN:axT#?!]Jg' );
define( 'LOGGED_IN_SALT',   '_F(k1x((#9j$G@UlH}4I|loGnlaa HlQvbIvXYN|/XFt!vz8x_WN{s-<&h}|*4<)' );
define( 'NONCE_SALT',       'l2}`8(p#>$2;3oyMFIlhNr.->onw@SA(z,ew7a1?2jSK]2/ZJ]JWpz(@IY>00UA<' );

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
