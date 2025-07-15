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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'babybel' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'mariadb:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'gLgoow+j$kSQ855@f9M7EfnxuvJsWw-w(xhb[^#VJ0Ebu(}=yU9W5vzigUaqSt&' );
define( 'SECURE_AUTH_KEY',   ':9-&Hu:nGY&Y,9f#B| j(rZ*aOXW 3J~$qAl+V { 81J?9@.{UclNO$r/9}YP4' );
define( 'LOGGED_IN_KEY',     'o#Aq~0I_Iy^;Z1sDp4ZELLfwKl7X&F7IV<y=5F[%gqssFIX,,j:-lQ7`zr-j 66' );
define( 'NONCE_KEY',         '9ZEt3$7ftaV57q]{IO8{?_k?IPsp&]|I/a[QcwOZ,XA7 Y]#HpOy~np#Cve_p.B(' );
define( 'AUTH_SALT',         '>/hd1&v}HAsduqFRVdCXS!3Gq)/ZwVPg0o+|7*HUrZ7vOaI:PG(3.u5yz,04y3V' );
define( 'SECURE_AUTH_SALT',  'TS{CExI/IsLZahe=]y{(ENU[hNyRzkV<:ROkF7MN-Bc8v;;R;=#qnHVE9eFU-{Y' );
define( 'LOGGED_IN_SALT',    'vm SA5<XF7p.:{d]lV,4mO@Sz}+11H}08*rbT{Z02%QKo sf$r,H],L@V$I2M<1N' );
define( 'NONCE_SALT',        ':G N2KtFli(dTf4?}l{&1 D(#9^eG.0A5X@xGTdYo/~5).rs.C1w,J|#=4TT/E' );
define( 'WP_CACHE_KEY_SALT', 'W+fgcd;daq5 =il3?|BD<}7P_HS&y;7?1Ns-GD*Nkj*$,lAEeYok+)1%/)=!AVS' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
        define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';