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
define( 'DB_NAME', 'db_sublima_hta' );

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
define( 'AUTH_KEY',         'rBQ/& a0GXDwa6Qd{{03=@tpJLoFXMp mDsM(.`$.2@_jTj}COdJM)P;v$F>S7MN' );
define( 'SECURE_AUTH_KEY',  ':zVG>T|#cv)v+9zk*(]g+SS`?.Sb?:]NJqU5 apAyWr-qdyVDDO^$#&U:E7v(ap,' );
define( 'LOGGED_IN_KEY',    'bx0@1w_u3S[pTB}7i@C(zY5pxv_x/Gg8!1Kk),+O}WyK.K}Zn^f>^/@(E8w=*9L]' );
define( 'NONCE_KEY',        'XI(!a&!r_cdLXgp6hn!L)e( z@N-Ymw,#|$+__3u;BKUI,NPj{{A2KvNHp?SagEx' );
define( 'AUTH_SALT',        '>[mkbxMdPl9lpC@;=Q`O7<xF8Gz~>*BpO(_`2J/VR#/rPgQ5e* l>JmgQ $i;5*h' );
define( 'SECURE_AUTH_SALT', 'mi.`#V4C%h4G%7P FQFV20}!M^TxpjN64Q]EbB4Y)l6)Cjk2E{~X<rl5Hk=*9s}0' );
define( 'LOGGED_IN_SALT',   'hQqh&(ekB4[q}kEII<t%v_vgvFnbax77P02%^iE9F(Sw+8=kNw11o{<He;bDB(^~' );
define( 'NONCE_SALT',       '^ZR|IyB{loTLEt%F{}oyKiTh:%bWH9.9gX3:#p:poPz9x&gMr`{7L}sHWzy$S:4{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_db_sublima_hta';

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
