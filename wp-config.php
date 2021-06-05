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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'QJgKBP7gWf744=B.;YtC}]EqSu])da)cp7m82ir}SJ.@ls!(AufL-+$o-reiYwJU' );
define( 'SECURE_AUTH_KEY',  ' Ac!|3sA;C/3G<y[J{Pg)-nI4_ia<,:pwqbT@n.mL`zbGs/0-hgz[w.G8{PFFgsP' );
define( 'LOGGED_IN_KEY',    'iLp}ZHZ%#*e`a#sPPt/bKZ~ZW934!s+X,4OOSBBArdZ3vjTqjfn>-fmM*sD.pYuL' );
define( 'NONCE_KEY',        'csA`vFOEUGKAWtK8WbdU0h#Y%0ShDf9o>**BVcG#`+|u,VF3 |Xx}v8VEg_i$A&+' );
define( 'AUTH_SALT',        'I,Ix+Q8y|YPRmcwI{v}M<L8_%$?I3fF)>R+P;TVrpzvLC2cQ4nua6S*?<A=<_3y}' );
define( 'SECURE_AUTH_SALT', 'F{x%c9ICfDbT-PlHCE/qH{E^^9(^mh5w.b[Vi WK407Nh)z|Nf#7U79V{Ax)c(CK' );
define( 'LOGGED_IN_SALT',   '>.s_ K46r2B:AOOyD (1~hs^xl^yI`SBw}gO4[87uX7!^ X[9pE%w*K)%.AU W /' );
define( 'NONCE_SALT',       'c{Q`kUnYDZEzHkdEz@r]2:0=9m5<uM(PHZjHqCpyD`6US@osXOU:S+s+TyzU_5WW' );

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
