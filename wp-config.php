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
define( 'DB_NAME', 'labb-1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '`15KK4*a7McN2[)_;D*k1wuA4@01=t%+P2V1/usDVqZYc]9y4i/D-R]v{^US*8Fl' );
define( 'SECURE_AUTH_KEY',  '3Lzco&i/adNyG`&vS(g}Ayo:q-9qm|q|*`K0]<l^19kAYS5+RD)pxmMuAw[;hM~,' );
define( 'LOGGED_IN_KEY',    'u:CIj,_c3uaeY/QH{v>`rG>>}2_+$,QK`=Tfq8_>{UO<:eeAF9/;v}SkXJ^=@cH*' );
define( 'NONCE_KEY',        '$od&PW,Vw!;KYbh,v)R&(/|m^{ULHwi27{1RPo?nI. EuJ5~J)*6pd3;|R0a7O/A' );
define( 'AUTH_SALT',        'Yuaw-pPi_nbARSW}0&0/uo, <ylE(?Tvy6_.%JzPQw]c]{5P0{|~D-nNOPICg<dw' );
define( 'SECURE_AUTH_SALT', 'U4G|ai)--:N,IUh?TkvN&U fxrq[X&Fq%3(xJ/nFK?BWupNyl:Vo8P%//Q~HE>G<' );
define( 'LOGGED_IN_SALT',   '(,(hrjn8Pb;@??dLmRDp;NdrXI+/gA8%7VY4,=O1(<o^e&nNT3H`Wra{_&K65r1@' );
define( 'NONCE_SALT',       'K/f6~q@LdONS_hzQX,:@P^iah$%O+jY;;p5bz?E?a@yC[lpYB61`4)2m`rwTrAsi' );

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
