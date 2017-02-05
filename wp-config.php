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
define('DB_NAME', 'starmer_wordpress');

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
define('AUTH_KEY',         'mdKx!;X0r{ `%xO+y;bmKvmM<w[N&TXJ]H;cn# SE<]GS~0Sp@Lfgo^[0=0k5BFX');
define('SECURE_AUTH_KEY',  '0&D6!Dx-h#1%/5x60O/.@nto^?7Q.;/?6,s^{!Z~0@pGM|gp3*|zR^~KVImG;]})');
define('LOGGED_IN_KEY',    '^DSqQp[Fd&z!mAk.)6Hsy#!)gkXBE4~Dk6]ktbt{bth}Zhm1ys/t[^e+d-c|*XYx');
define('NONCE_KEY',        'dgU4[#gXRDNt,#+!HA0@/A2D;2w@b<oo$%UEPAXY1|*n?rl!d)S}:* `DJ:8OSNJ');
define('AUTH_SALT',        'v;DLj_vVxvX?2xRzJblG)kc[L:(5I[ZGnx]n_@a0<hc7|^R/L5T^y,mydDW),].k');
define('SECURE_AUTH_SALT', 'll:1x3U~<Vsq r]Bue<{6X%[4ULh-yAuj{?#k&_#Z0bs^%u:vS0#V@~h|hLm}sB`');
define('LOGGED_IN_SALT',   ',0: >:Y=y_e8!2`y yH/`rnU&_2@&?I@`11&KtfX915K)I},&:>ds[:e4.p)N@y!');
define('NONCE_SALT',       'U)bk}4lkH,BYgJ*hQdndp|pJdi#<I(+^}PG+cUKf!{-TFlX[~F]dGz$ +m>X|h?*');

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
