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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'qFf%C(O93Wtm@15J[/pi42k(Av i64D#mgvcrkwvEvrSUA7Lf$&H*B<kU<M|7NZl' );
define( 'SECURE_AUTH_KEY',   'rB+<~!4^K]A*`3hRnD_]ALY0K-5u_rd<{TS0O6252S;5Io=U7 S13cR<+t5g1IFA' );
define( 'LOGGED_IN_KEY',     'imf-~j7(dkXZHomReGx7uJOgUmqNw&Tu:rCzwU4@1=jpcch(4^hd@GRD_lH7PDME' );
define( 'NONCE_KEY',         '{&u=t(<4Zk<,uK.E~yHEz$6Q(.XbC@x/wykYWIMtogtjL4tN8A12xFbDkWM1c/cb' );
define( 'AUTH_SALT',         'aashQXu8S<~A^k<RxgQAT~BU`r/<~e^v=%XHjZbZ|(ThV3!clEz4aQ!~:0Gp`P[&' );
define( 'SECURE_AUTH_SALT',  'fN5oP*6xQ4q)`K-y%gF^s69@AG~1x$A?}H[Q*;KC|zblwUrqI=7PX0*Mh0!Vyp(S' );
define( 'LOGGED_IN_SALT',    'X*<XK*;Zn3#_$l}&Th=W+zizdM8zkzZrbkbpWS#]1c+9)~=j6j}bQO9NxLHaHzvS' );
define( 'NONCE_SALT',        'M_[#3sCj$`sn2`x>P1UgW{momZLb/tZNv%7uK=kDh;+jIRw*8% A/409INZR#ZDj' );
define( 'WP_CACHE_KEY_SALT', '],mJ]pfP>!z.bpL0nPqU,E->s Vz^7b>W^*]0[:G7Yx63KahfPoOKu$ax`aaXB1%' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
