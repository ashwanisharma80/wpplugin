<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'test');

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
define('AUTH_KEY',         '?~%DeeLl`!Bok!0D<#|vlc{4mM,TC_oD!M0Ofq0TNwH3p`$u.fQ%ISP{jf$QqG2L');
define('SECURE_AUTH_KEY',  '3EG^fo-j*gT^Vx5pxEWGBx{^$v C+9c?n+ZwP{5HG)2-N}_ez@LEO]D<~//0gbvT');
define('LOGGED_IN_KEY',    'y28h.&IIE:W~I8~Vh[oA-?=l+2!)0r$R3W@SaFZvc$+5Q8O1J7XmF-/&;^s/,XVf');
define('NONCE_KEY',        'U^TcjAe:FXqvR}^;.z(-]Dm4GORY@M^a-%i?q*oMSuB7$w5^q.=I>mrG{P0LZFz4');
define('AUTH_SALT',        '7B>B$2b4ytFDe#U`1y;g{g}3f>K:]q:hrOp}d&o82@)K;W4zU6Q[0@Vbo_#^G(tc');
define('SECURE_AUTH_SALT', 'L5IluyVj(,0A#GozocfN Z[.`ZK{[C2&%UeYQ8k6lEhmnrmLeJ%xH;K4BztYvTv_');
define('LOGGED_IN_SALT',   'bXqU7T@o{`U3GzuWw~DJ[|cJgs+(RqUbVbWTJBLj=V*cm.[X}7q0f!|#-Z]$Ua/|');
define('NONCE_SALT',       'PdZn}d;}G&U G {}N%zH}<%#k>b2rD>.n&`+Le37x-i1O )T_3zAqh|/6%?J]H*Z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
