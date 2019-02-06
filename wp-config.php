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
define('DB_NAME', 'Gym');

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
define('AUTH_KEY',         'BEAj6N&H]rXSwj7jMc{#eN/ X1~Rwo`QA3VD&YIco`0 X};wYs%E2!#EH?.%tj(=');
define('SECURE_AUTH_KEY',  '<6ey<1VidhYkg1I$&;uQu?_/KJ1|;hJZ19RS[@I09edJ/%%;o ~s2=5A6Jc?LFE|');
define('LOGGED_IN_KEY',    '!eoUFtJdPX,)9+JoKbT%R`:`/%`)Q=M|~oX4Py?%PvCXc`&@/nB}t;`t!q-`dQ8=');
define('NONCE_KEY',        '__&U|Gn45+ENY,,%}BaLOiq~fk]G[wEctii{SR;TBKW&}`a]CbS70#um^d:i}eRy');
define('AUTH_SALT',        'R$wL0i kV 9{_]Oe@Ber~~oL=8oOqN<%/]6;[a4RB4fIP9Y!/#WY:%V$n3_QB:E?');
define('SECURE_AUTH_SALT', 'UN7tW3wNXp^v?w}N899h4hSULA~p4[@xo} [Wh}RyV@?}u.-S9u?{Zg}*d>gwTTs');
define('LOGGED_IN_SALT',   ';[w%:gP}L:c@i|U(}M|5=^(j@4d)P2snA^Om+{|.av;Q|:SO0>(DgY$~S4b?z0=?');
define('NONCE_SALT',       'ca?eF+XW%4]#K4in,f+ul}s9;xycfPuMxAzEojS+<y1is7M;[r`+:T/ET&}Q#X`-');

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
