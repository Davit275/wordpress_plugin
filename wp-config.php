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
define( 'DB_NAME', 'test_task' );

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
define( 'AUTH_KEY',         'v>ntHX]:Kob?OANu7>P9ajR~)H;.-J%E@)Q, Zp0]j6x2Oslc4/%R~o]CXs(,>K{' );
define( 'SECURE_AUTH_KEY',  'a!6:=kTB#2c)acdI<TDwvQK/ vY9/dN Th=MM@HNv(LEMTlS:A[qBdGpxaFsC`_:' );
define( 'LOGGED_IN_KEY',    'J#%i!%7)L:J-_s%+bd>4?YdU8n<x#|uDh)nv: c~LIlNIbbJXDDp_a2>)_?KWW4B' );
define( 'NONCE_KEY',        '=^0/<`fP| z>wn75>Ni;b7f<,Uz=J ^UDRV`0[DWPLI1hqIy%75RSy{q.LDUrX]`' );
define( 'AUTH_SALT',        'sWnpG7q26^y<)M{uL{tB#h Ykd<fHS](xrRp}lWbcIH{sG2(muqS@CC8^R3Y(-gu' );
define( 'SECURE_AUTH_SALT', '_-15G:v?Vq6#.;U3Gvn1L(})-IFrO;^3=F.^3<KDR c@5E}M,.JXYV/D@2$e#}J ' );
define( 'LOGGED_IN_SALT',   'dc?n,pC5BImphQL9}=J8kZ.>_y/2H+oyu(b oDz#<U*HG.c3;L#6_9U|DUEM0(Q^' );
define( 'NONCE_SALT',       'Yh4-yY.Md:N#M=}$g1Tbe+,2SY}onjk(MUFgLUB#?aBauR6HH)~aJ9#m+,-@ewbr' );

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
