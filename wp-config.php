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

define( ‘FS_METHOD’, ‘direct’ );
// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '320fad23@R' );

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
define( 'AUTH_KEY',         'f3;KXb<kTS6~+%R @U(2o%WF[N3m,1ycj%Ik;v@V#EzT+*`rLd3~4:ST3!tM~q(E' );
define( 'SECURE_AUTH_KEY',  '$lzgnRZ;R_V&1bWW~?tV&J?f8;5LW^[t+kf^,*1`E!D#A3[WwdP0O:F%O%ao.1v ' );
define( 'LOGGED_IN_KEY',    '-2XRN6l&Cvmh7:W1X$8$a*;@9J[A8D^PKMVJ1$ko6FD=Aqp2)Y5=cXakEaD,}op`' );
define( 'NONCE_KEY',        '0eZBF/n:SHf1@E@!bc+3sry6P/#JZ^$su<i(3=R#q|4t%2Zub[FqW]% /8Pw:Ymi' );
define( 'AUTH_SALT',        'SH?XAgeTLM# MX08<,5^q;1RW /?KAEj|xBmdn3GpXLq4u Z0MU&Z01j~iCC<zR<' );
define( 'SECURE_AUTH_SALT', '>fW+4T@z=cTj$hKzuS<hqC6;.BG/fZzZ]B*N?_yTIb(<.zSfdOc8Q3Nx]TrYaW&O' );
define( 'LOGGED_IN_SALT',   '4$Q9Db_x#8Qa(XV:Nnd#=AdeV`rXyvI,Vt1ec<@g?,pE4,VjXVHrD,l8bVpkIn2H' );
define( 'NONCE_SALT',       '`Ua&jW|N_iH2h<z+hD#OFBGel]hCbxXA8L-n;}?6:p}}BZa=+!vIga#Nv44xL2-I' );

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
