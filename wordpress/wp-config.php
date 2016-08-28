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
define('DB_NAME', 'vrroom.nl');

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
define('AUTH_KEY',         'C:Ok~?$yH,.bgm1.EE[7<uO6Nflj`/p/ZZ?DPsY/&ckYJ0bz|PHD-Ax2W^Z;/g&y');
define('SECURE_AUTH_KEY',  'W;fV@g6qN*-$^`,Y)`X8kJkCO<-wN5<W<PqP(n/Hzd6=^+0LeB.IAw`jxYeANCL%');
define('LOGGED_IN_KEY',    'Kc`:7xOS>~.A|zYo*(21fH0$,ng$<6giV%kGJo#^=Z^H*r,}@/eUf8L1;DIgD54m');
define('NONCE_KEY',        'W}`[j),L.zm{]B(x63iB`s#FuSw+3=>h*.xe%e|0s|Lje>:>3lkEgl]v,S!&`Hki');
define('AUTH_SALT',        '2*gFPeNceAZv03B?XV<KX_;Z4`A,@KY if0)/=V7AsO(^^_{%#KuE&UiC OSbJ5L');
define('SECURE_AUTH_SALT', '[/t.ERDsiD|1J;#8&l?Kz3sD+xdaF*k)=!FKiFH%vp6ZBq^zRdHCHPiW<$X$MKgu');
define('LOGGED_IN_SALT',   'b6MFZzQdUA9Tqwltf{~3E-Se^s;0x<uWKDaFZerT@It#rKyIg]U7w5!sV,`T`ibS');
define('NONCE_SALT',       '=Y*)P(|e{*#_$^5-az.yQD i<4r!n>y~KAf43s4cA@$KqQ+lHCX<3,On4`9(dF7;');

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
