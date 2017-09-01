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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', 'ZVgotXw5yIVLyToz');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Ote4,yHgxHk^%e)U2X<`U5oA$gD/|J|u$fn])XFYk+#Y. ;4S?bgRm:<K1-~sw`L');
define('SECURE_AUTH_KEY',  ':8`n&dVhL1sT9,C/:&@4:{P9nVh*+9S30:7{Y3|U-QJ`2O=_4/KrqMeC&mGh4!*(');
define('LOGGED_IN_KEY',    'z**}z=<^UK?+h9-|B|-m%sKcAmefx{<r~$@janHM+pS(u,G.w_qXM8t3s3Z%$iKT');
define('NONCE_KEY',        '+B+[q]=Y<DK>f@vKjO_R_I):K1t[Rz{6)a`(>&ip_fmJicv?d/ QI0O$*]<zP(Mg');
define('AUTH_SALT',        '|Q}P58eRCNC|zu>XaDibBkh^Z{R)]@V JV7wyr }][)@,H+ *8Of~NodG&Ox(X?_');
define('SECURE_AUTH_SALT', 'g$-g.#b[|=3#mg<&HUx3-SP 6f-<U>/ .|x[pNT/V2K#$~(vRygSb~3*WbOE!5q[');
define('LOGGED_IN_SALT',   'u&n{e;o_KOb#gyJZ@8( Nw?ATxSI?Y.3as_%I{ft.[)LRjio#+Bs$I.`i5+N$S3(');
define('NONCE_SALT',       '8[XYi~!lRW-zbSTKvGy&S)%?8Ao(kZ!s%o5[dhx_FW![w4[@:M];{,K$[ |MbPwf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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
