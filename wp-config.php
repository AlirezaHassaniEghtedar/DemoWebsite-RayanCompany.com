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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demowebsite-rayancompany.com_db' );

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
define( 'AUTH_KEY',         '>.A4uDzZBh 4]tn!m@S/Rq,zVWOKt@?z1^goW7$R&A[s&nX7z_(b-PQCFc<6#ngu' );
define( 'SECURE_AUTH_KEY',  't]VU7i _*:kbpltpHL51Fo3@J}LHm%0f-o9$}+kRLQwxNNlc@42dwO]cySCC7u&!' );
define( 'LOGGED_IN_KEY',    'N6FR1C||z;YX2*XcUZ%@;EL<X>j>&1D>HyzqEh[U;6[gev?{k){QboHpX]U>>xx:' );
define( 'NONCE_KEY',        'Zp/,BGKwy)/,`*Y{MMmEA:&eMmbHQ!zKrgHlXwA%4cjjI{4oDgS5~Luf3:YZ$jdn' );
define( 'AUTH_SALT',        'aEjvPv2=ml>Pi/ca}Gc0U;j?I3!:@Kn-8}<=^SD4uOcMw(e )0<>7=M13{B@?x}q' );
define( 'SECURE_AUTH_SALT', 'vvvH5_c >+(A10,g#i9U4E/e/hNP<?s}w9t}lKS(AmqJD-9p3O(RDvsC)9wBCo1v' );
define( 'LOGGED_IN_SALT',   'hty%2Z&WE7g]5GGv:~#>wsU^E$)~zZK]X..&dyGw.$W/2}sUs0NpHKRV|$XNW_RU' );
define( 'NONCE_SALT',       'hO#I%0V$@(;8/Fb]HtTxZ-G(?[.tqr?5;s?~pI]zGjL%Jidh3I@@v?eyl3Q6U^E^' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
