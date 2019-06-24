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
define( 'DB_NAME', 'robincareer_db' );

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
define( 'AUTH_KEY',         '[F%.f!/xJru$ wB*.(dD 6e)#8*b;DkHkB{#]?6vk9{v<<CL;QDPV$P@nm%d!9)h' );
define( 'SECURE_AUTH_KEY',  'r.O-XZ4S{aZoJ*t#&5W@]75l<8jz,apUdgu8sGtU:;Z8Uw^.ZAO;|NR5tsTo>.g0' );
define( 'LOGGED_IN_KEY',    '!b,C/_.,*MV95DoK=*f5;TzQPtB/KoF@TZfo20f^cNyl4F;%qv_)NmgkI+1y_}}m' );
define( 'NONCE_KEY',        'UIFA%Kw=*dD)8A/?y e}v6E/`ExY&y8j;]4$mH35`YLd7tlFhWDa(jdqNw&JT6l|' );
define( 'AUTH_SALT',        ']VXkuH2~3Pu)O:95Y)YzH1< <NI<2T!*Tv-lW}}:?,97Y|~05Gpn]2|Xjo; Pno,' );
define( 'SECURE_AUTH_SALT', 'tcF{Bl80V|STv$v{34l3!g#QgP6{QvfFfdsp=?@BT|/t1m[X|f2%.3p&]N2QfRhY' );
define( 'LOGGED_IN_SALT',   'vX{kzi0wZ~QZ-e~];(](4k9ea.1Mf6Sxvh*y~9_`?vjTehFXQ}dTfTOH@6%t >rZ' );
define( 'NONCE_SALT',       'UZr]4t}/*4k.}OmAd>^LI.75~UK~)h:xX-1!C`u_4b NN,)7Ni~mg8uS)-u2B}_^' );

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
