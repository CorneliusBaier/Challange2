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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'SQ9B<D>?h~P/v1Ik?$&QiqLNaYaM9JD2c{~*&S_M3;p|OEn=V9%L6-+{g,+=m_nO');
define('SECURE_AUTH_KEY',  'j+t36_C{84?2h]yD:.7;tO(w:2Y+oEW.wbKZWf3}ep{](en|)9{s|T8Ei!`(za}N');
define('LOGGED_IN_KEY',    'xj=n:F-.Eo!^W@2rK$^e-LkehI!Yc-!;&[4f[zraK{3A[KY|61tCSoGUAoQp@Bc2');
define('NONCE_KEY',        'Ug;|`wsuo[A*z8J(@mR+sAYNWeEYG~/gB1 #4nFWmq#lWAq^+GiW-tb}ChZrjx2^');
define('AUTH_SALT',        ')+fj[};!h1T%,kzFqCd-nHglMa~fH<M%W|L}nH]Q3mO:7EM*;Cf}xxc{PHmkE7|#');
define('SECURE_AUTH_SALT', ']QqI#[Vh;9Fy=>-K+4-IADF+*t$o Wd-92>|g|1V},|9}3/|f^uvo<8RM=@B+N!>');
define('LOGGED_IN_SALT',   'O/m/81EkXr_bM$_QShcF)|Wkn8`&-UD#Zm+fA8+[0YY8Qv:9Rs2_Tf}5!MQ%>ytQ');
define('NONCE_SALT',       'eYq}FMyiu$,K(Zk<p5!oEBK]0uUvUS2-YK]=LHgf8(PmsK+w6T{(o-EV{4ks]C(c');

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
