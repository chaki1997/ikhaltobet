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
define( 'DB_NAME', 'ikhaltobet' );

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
define( 'AUTH_KEY',         'Z+bH4,6~.?(5Ww.@g>;U<Yhdelb-})-O[q[@i`MU9?|8NSMjUd/pw/imK)MKTMPJ' );
define( 'SECURE_AUTH_KEY',  'x0l25voX7OpLs C~G+O1WnbiAQ|l6KAyFz$p<]8 KHcbPRDZ?b?FOuV%VzxXA2MX' );
define( 'LOGGED_IN_KEY',    'Uy8e`S=&*(^u5(Ul]e!,{>E2Q+V<b|fO|R+y]$Od9F_7B+Fi&5/>]Y&&>h M&r+&' );
define( 'NONCE_KEY',        'x09u01}J@?irAaG`@<l D+cP&m}BxRS,FG2vb`4SPz.KR`3<<%Z+Tx #JV%~20-Q' );
define( 'AUTH_SALT',        '{g;llDkRPFq#Uv7ZHBt%l}ImntBoUh,g-kbnP}KgwY;H?OfG0?.m:37^aV=M1qms' );
define( 'SECURE_AUTH_SALT', '_+Eg7aak_Hvdz%wil=WF2@Yt|I^:KC~afvi>vVqTyd>8 =O 1OW*?wa/PnTRGcw~' );
define( 'LOGGED_IN_SALT',   '+OAI^@0UJY%2xR2y&3^k$%ea=Ot%(4Rvgj`xnv^GfTGSu9DU[g9j1Z=b uFhDk2w' );
define( 'NONCE_SALT',       '$Mcl@0!=gk~be,q{2~kmN;6*m9)Pm_tqP:-*E5Ey>ErKcLPuTP55wL1pp;X|8B|_' );

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

define('WP_MEMORY_LIMIT', '256M');
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
