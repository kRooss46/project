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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '*cv+:3u7plc5wBVk-md%x%W:O<=wP;gol3mu>NE~Nnk/=m}+g#=GvRDndX:*>J,L' );
define( 'SECURE_AUTH_KEY',  '+5m}K3rf1! UGgSrtkeYAA7bI.<&6J)7r#N&H=D-gL#Tr)Ly;5td$y`Dss}C=oLB' );
define( 'LOGGED_IN_KEY',    '!A*)L<+i00mL;i#~IyDySL)@:#B5R&^M{vkRLdI3@)jA=+6=?*|D)=iQH&Z$$,7p' );
define( 'NONCE_KEY',        'UJNi6wxop`do`g(f .PIh]Z_TB:s5x _B:u LP@I&X03{:.Trt~G7WW79=TRV2U%' );
define( 'AUTH_SALT',        'oo:SluCnqAW2!/GlSb>q@ >De;:{gtcp7sH Zb7,rY0VO;aWBxP=Ouo`G%i4[b|V' );
define( 'SECURE_AUTH_SALT', '2u6RgrEE)|M&^sv(A#q6SC)1EoHt$/T@n=^Rhx9<Hi{G(R%PARS)Y|=gi&5bq7[%' );
define( 'LOGGED_IN_SALT',   'Qx!nRE*p37mNln}1w1dZaTDMnIf^@dNEh@7qq{/Nf|nV96gbFL_@NtU?gP9``}]C' );
define( 'NONCE_SALT',       'Bmn&~LY=.@gp$^7`@<>slFzM[kT/L<(=n`[_y#I-r#=GpbtWL)h(qV[_gFG:g.iU' );

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
