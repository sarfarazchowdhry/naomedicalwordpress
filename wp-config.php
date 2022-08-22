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
define( 'DB_NAME', 'naomedicalwp_db' );

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
define( 'AUTH_KEY',         ':T6V0AA_ _/=vz!`1-RR1a/L|27r;<n>Jns$%GK.fCrG{r|M4:;aa{bgF^DO<X+%' );
define( 'SECURE_AUTH_KEY',  'I(I#NRoG+!c^[jHA[8T0s,?Glg*w6[]u4TU]&BljaN oQc,Y%>L&22Y[Tl#k7 ^y' );
define( 'LOGGED_IN_KEY',    'f#yqRIv+;B#J|sAMMpk ?CU4?GQB{;E JqfJql6+ET6CK5,]} %t*&@[omq=$ceb' );
define( 'NONCE_KEY',        'phP7,^BIA2E[98<7!z2g]%`WC}I? o ,|>SmR94`*$X.w3+!hsP [%D8!_yycKf`' );
define( 'AUTH_SALT',        '}sPcR`yxNteeXGV`2q_N.W`Ce:yF!vcMs*Z3:|eo5zeC[6MA3 M@%),?BOGZ&y,d' );
define( 'SECURE_AUTH_SALT', 'cGjSvAyDQR]RE)ypZ<=p9yXA?<0VFvh9U`-cIzkIlU&FC)T-Pf fkb{dQ^RKQ3#.' );
define( 'LOGGED_IN_SALT',   'MeSl:N5lgfI/f%BGhg3V-DPZur;x-_fk~E{f,O;6`_}nnAXkp5X<u-s}0%Ng7mK,' );
define( 'NONCE_SALT',       'Mc(K)!*?^!aY+}%mv5jlydvzRG $t-kfc:N$Tx,ZAQP!EgvM;kLq.KDH{j>aw<Wg' );

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
