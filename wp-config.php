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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'MEd:Jt/m--z B$faSbi_D^N#(++dvH%k.3hTL:+;JIx ) e^HQ?<QAez waL2Fs8' );
define( 'SECURE_AUTH_KEY',  'V5d%qqnKH]=V={Rv-ITPSR[Ci!%|M-il^.bpF;quJJG6Etk*-wa7U}b[#i3*.+@]' );
define( 'LOGGED_IN_KEY',    'F__,C}^X:nOm|*u3m3bAT0IW[HnE3f7U#ak^@m]?Zp?7Lg@C^SckNf|b*c2:cRUV' );
define( 'NONCE_KEY',        '4J=e:sbly/qW90CWDqPng/I}R`+GnMCS,gpgwN>rLNac)hF2|BvgXe^yE(q8$[f>' );
define( 'AUTH_SALT',        '!Bn>n/,a9lJ^R7ZntY9`Yk Q#l1KB}j?L1Do<TmahdkWq6Rgn1&=Y#:KJ/)#L3S:' );
define( 'SECURE_AUTH_SALT', '#q>Y0HiamH},Ga?ier=eJPr`h6hxfniEE;zYugbHnUjb~Ut^8F~*K#MW*qqARDy=' );
define( 'LOGGED_IN_SALT',   '-[_gzvB;IdAVcnxiK K~N~!ub:q+Q;<sMf1DP3loJ*8HUyu]MwQ|rB*deZ(`^Ti%' );
define( 'NONCE_SALT',       'C+gTs Mx%u]tv`,5y*4n.Y]MCxb[*XT5i9H#=QTPla_OT{$:yA^^Vm@*Wys=bW!a' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
