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
define('DB_NAME', 'newcame_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         't2DW.#,FLKZ[s/&sbR=smml-m6&QmJ;FaCZ]:EZZrT6+E{f5eU<;XT_S`]&q<`cM');
define('SECURE_AUTH_KEY',  'mUI2Z[W+i@F>]<|fkGgDQo<T{V9U^KJjv?klU5F/>[5[x7Gnjb.=?uZ^ty@}45-l');
define('LOGGED_IN_KEY',    '`okztlE :tZ&_O4n`)Xh(X~bV_0/F$X-OssQV/hP)A+PZ:.!>Au-)$NP;>b[Q0+%');
define('NONCE_KEY',        '2-_ysmjc<Fv3&#gy/Qi1h(HTy)U+np 9PAtR,/?Ika=L%WsmKLaQdd`/w,3R%nz<');
define('AUTH_SALT',        'jE&lD*3Ma26I=ga<dFlf&to.;rX].i<@&N9kD6m c}4{c.3B0)(WHp fzUM~eK)Q');
define('SECURE_AUTH_SALT', 'XZ0vH@b>9@8x,@z~!ua5{T^#<o)%L>urX@l#/KDJ9DhO]/:J}0T~SrZ[TsDm00Qu');
define('LOGGED_IN_SALT',   '`Ks_NSz?4HF3M8zcE@_m=x/^/> Lb<{3@g%A.lzy!.1.b!PbREnE7@8zjsfx:2R;');
define('NONCE_SALT',       'du7_3jCRmc@YP%@WumQM/,z)UM1(5o[C@4!_O+@U6 M-+vM 2v2`)r(l H5}Z8+%');

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
