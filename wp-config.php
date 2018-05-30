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
define('DB_NAME', 'New-CAME');

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
define('AUTH_KEY',         'h{zfpg8sd]IAy?Tgr}U:kc0kr 5* 0C^yg_N`DhQ1V8hG5d#b6K.Jr GdHazs3vr');
define('SECURE_AUTH_KEY',  '{sUt#,@yH<faeZbDGJ6#]3}#~_6%^v8@6b WQz aYu[<@Rt9UZ[|4?{gj5`Ot[sH');
define('LOGGED_IN_KEY',    'k<C,7LtcQc0eZ um*HuhYFs_PExxH~Je?6RJIsd^5NWo<QD|vC6R^3pC%lBt8sT)');
define('NONCE_KEY',        '@1EaZ51_bL,creVjxWk9WA~M7EQo$)?3q?N<Iarc2h&bJsUPtTCqe,]#*[SixWCC');
define('AUTH_SALT',        '11JwHZ:yGa2-F`m~~M,h5+V0&;pgUyz,#:Ir8:}dV6636.r7|)4D-.0fb^0nSu9<');
define('SECURE_AUTH_SALT', 'efbV-s!nWYj9]+l|QUD(IVje]X$zp~z8H)T9 `U8Ht;e@b+:;w,*/ctJ8_+W@]_0');
define('LOGGED_IN_SALT',   'f,*qcZsf3DQ{RsKkJe43@R.-A7VZMZ3![1lqjZNKP}s/GC&rL+?Qt~~-?vRtBQ`&');
define('NONCE_SALT',       '0q}Gg{J>4;m4N{4d<&jbe5_g39Gkp,Zg&tnvXhu|/8Bv_@w;nGzHsx:-C_[p[4iX');

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
