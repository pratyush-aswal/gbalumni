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
define( 'DB_NAME', 'galumni' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'BenLGPoN2A=O8:9o|+gn-dR|x O(BN8AFx{O${h}Ira [^GqrP~;cxO%vJK(NUi`' );
define( 'SECURE_AUTH_KEY',  'g{q^ jM8Ai1$Imf|)[0o,fKk[/)+Ko+dYG!s#h*}c{#ee!> *VoYu/arFq<img%w' );
define( 'LOGGED_IN_KEY',    ':>>9Z2F,ds2>4)H</IGq>JS}j2b%0-47TPSABOw-D=*JFNS`e]pML`Z]<EqSOPC]' );
define( 'NONCE_KEY',        'px<[wlA~:lk]Rj38pu`Fyf,!KCkZCYuK{%2Fig/Azx ZhM>Hwe)j=h[bLUpBk&mC' );
define( 'AUTH_SALT',        '&g;_od^PBH+jt9rX`[%$sSK^Az{O~p @Xv@4zu}C&22JLr{>_AFO7[JT[Zl=OX8>' );
define( 'SECURE_AUTH_SALT', 'hSCYk&vv-W}XwDLB[M>~Q,Fo>(h::xJ<-bBy3guYBT1{<z.g7}!mBH8(|Je7$Np9' );
define( 'LOGGED_IN_SALT',   '?&vY%3dm.x#XZ0j/cc?$S,JV}aJwcKlqRS:PDlgr1VT7Tp*#Qq ^|Ug:2mD`R7 5' );
define( 'NONCE_SALT',       'rj&N;&}q>C%ZS$x>pYizjRSe>}Uptl&q3t3/ 5Q@/}PE=r,FK)ny|!mOfQlUWakh' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpa_';

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
