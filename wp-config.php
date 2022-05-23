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
define( 'DB_NAME', '01cw9_d8433ew4' );

/** MySQL database username */
define( 'DB_USER', '01cw9_35wmya4x' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Bnde7@smgV6$' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql52.conoha.ne.jp' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'pXFnDi_~l/hdwy.BAU[n0`*^cCHuOr&&_YE Z8?;UM$n hF;c))AM@dPD!7Z&Q(|' );
define( 'SECURE_AUTH_KEY',   ':dCoP6X8#U|[L7DfV{.$AQG9`g*y!}`1`/|k)cI!xC,~^VTdBRjXffkvzs.0||rI' );
define( 'LOGGED_IN_KEY',     'E`B@ ^`O2_cY%wE-oJ`-r$m>{:m~/Zq*pIMewRSL]s~J^?H|`jeL%uB$iI *Y(t)' );
define( 'NONCE_KEY',         'E:R.gS1YTv)<Lo2Vci~bsz9a{9[T:`jKePu/pDW/wA3kXn/C:Y}n*)?*7?Q(?^Z/' );
define( 'AUTH_SALT',         '1Q!;b9L>4v`gvS>mpLoD4(ZDNUZ0!l:0LS4i%sPDn5c?-7k+gfB/XH^A)wvm/)/b' );
define( 'SECURE_AUTH_SALT',  '5%P:U|5T1M;n8j-9-XSuBnZ*X~D70q(~=lZCEk%zi$/,|$R|`h5mUjdsfyt{lIlj' );
define( 'LOGGED_IN_SALT',    '1*iX uSP%_J1W>Z]5uN$kNtKA[slB5aMa1l9;&v]Rw@A1(3,N Z3|j`!*~Nj;CB:' );
define( 'NONCE_SALT',        'SYiz.kbgbFj51hsE>el~BV*0]0Us=]:v3I6`x3Bqt( Zv`t/U_)~~dvdkXnft1,2' );
define( 'WP_CACHE_KEY_SALT', '&O;qnX3Q[x!.u2pjZ/O#CpR-!:%{!+FmhKDwJFya2M{TXtM^N?Ojj&}A(gD=2?vk' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {
    $_SERVER['HTTPS'] = 'on';
    define('FORCE_SSL_LOGIN', true);
    define('FORCE_SSL_ADMIN', true);
}




define( 'CW_DASHBOARD_PLUGIN_DID', 'yBFzpnwxucF26nh2SVNe_Z_79RhCaoix9K-ov-F-ptEjtK-YkdY71x26VnEwVgwL-b44RJPnGEKpPekNiIrDRrd5t9KDkgcyeTrIS6h-EXE.' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
