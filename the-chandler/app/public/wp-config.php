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
define( 'AUTH_KEY',          ' eW myYed]!rV:$YU[l(!G&2X?F1M/E%M!0|WG ?]Pq#uH7&E+lAy6x`dLBy3t1b' );
define( 'SECURE_AUTH_KEY',   ')s`.!/zdgb`;>C0OSxiB8q8RS^Bh>=t<t sDCw5])SudDABnFP.=C};|kUrb,Rvm' );
define( 'LOGGED_IN_KEY',     '~0:(=~c6#S/`hq*440jpAwROt<5U8rc##?g<yvkEau82F%3bJk{wD}(f{PFM0N&`' );
define( 'NONCE_KEY',         'dw}dy)W^IC CY2~+n!-0[B)L6G(-W/FjyuZ%EpYGXD?1X[AzgBUv%*4F3501%n(x' );
define( 'AUTH_SALT',         'm{D>WAo3$h:G;B*t!`VGE]DH[C|^*0~!*bZ;@{?)`0N`!9)@C8gZV6Tht-|0*j>8' );
define( 'SECURE_AUTH_SALT',  '-T2Fec,@4Rg&},Hxxn%fq$FXLpRooXN#@sF76,=1-4cWu6@}JGRrY(&rrEm.MSVP' );
define( 'LOGGED_IN_SALT',    'R>j2<Q@:P(ZVar@0<N!L)cLvz5^[h.JMmsD<8u/w(g|mADZr#Hb?bo.B{.kpM]^.' );
define( 'NONCE_SALT',        'qKcMf`21%kCC7R0%v)XBLM3OV*_s+=()0hbf MP6IN1#i95;.uB@9;Bz/lsh8h=G' );
define( 'WP_CACHE_KEY_SALT', '5<!C5dBZTa<)w8<-!_WA0y]E~ 1i^vf!D{d{5AqR%3yxpGwa&+_|yhN>AD>K.5d%' );


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
