<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         '|WiU=XQF1Fk7hl0L4sSK8L(Fc9C0F>dFuPMz3GQ?H4w2#zI4glWzsh0wNNeQv`{?' );
define( 'SECURE_AUTH_KEY',  '1`@1t2KKAl9^T;hmp1C<:[o 2uWKxx~z?L5~YG;O,p..jK[[F*vo,P7!X9B/HqPH' );
define( 'LOGGED_IN_KEY',    'Q5e+b&`g,xRXica >2o<m_j!y1/ikFF~[)FIUs@-uQo:f}yJ:2s2+[gj,FVMm}`#' );
define( 'NONCE_KEY',        'Mi%uZBG?V[N$Ad{`&wFjmNa.:1fDe,TThyD,1t%W1P^.]G)(^ w7|g|<BP[yz4>V' );
define( 'AUTH_SALT',        'inlsh^g#U,:mut!PZV>U[kxV=E5:]^I/Al$4Q+$b~7<0-uPI=|AydwNZ}>@4iA)o' );
define( 'SECURE_AUTH_SALT', '(WQ^mKX9nxjtN6c,~fL%8l6Z$ sX +oLDZ{QAe*J/W8@;}H`nxm#xf:Mey4=F5?}' );
define( 'LOGGED_IN_SALT',   '>%zV`Km)Ei^C4S )ijDfFZWAP;%ReHa?_N!YBj97Y*8=j6eP{V~;Rf[pVbk,c9lA' );
define( 'NONCE_SALT',       '9#-!Ib67c;(??DQi[v]yV;83e!(H(l./D[+/=dH%Q+/0:;.84~-&lW1 f3xM76x.' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
