<?php
define('FS_METHOD', 'direct');
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
define('DB_NAME', 'silvasa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's,stD9FD]).is1Z@.ZV4r.hKff}:u8>)=zkKuQ1PhK48BOV(3Ar5yB/ama<:5XsJ');
define('SECURE_AUTH_KEY',  'E*+2qPs M?!V9E<#L`JN~/Qdv(>jG%TE8u0(Oetqfe~Cs,Cet0ofuf #,Bjgb[+2');
define('LOGGED_IN_KEY',    'y+:)]lcn6wN(!o;WbzAv7^=wOllt.Hy)W1.QH~]z9HSg)2hT=>.)nQxJ9|K8tr[p');
define('NONCE_KEY',        'Vhr^EgzfYBJM[hs~Mc(2HCCTj=O2p3],!;ihif+YaSu1ojkX0UdBGCT _J?<Ac97');
define('AUTH_SALT',        '_.;fY^.t(:8Cq8pFfAzkr&9m*lY)F0v[`+N^zqw9F;_gA?KRDd*=ncFa3Xx/5=M_');
define('SECURE_AUTH_SALT', 'qW*.!>++`_X?9<?reS#6L|))7!vunKXy{!1 M+rx(t2V]#h=DBj{kkQui;Hg9Vg6');
define('LOGGED_IN_SALT',   'Wu!N4rcc2h?A:V>0v/sEn?$VNe;P  $e#WT]p@gFqIj=te?<(]?}_QR(`tD.Lq){');
define('NONCE_SALT',       'B[cz&w-?f~C+r*eS56 Ye?.m^[`gpk.K#AR7ju)<alD/~DdM v^GL2S]TcT6g4<$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
