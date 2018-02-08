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
define('DB_NAME', 'advocatus');

/** MySQL database username */
define('DB_USER', 'Nadiya');

/** MySQL database password */
define('DB_PASSWORD', '270183');

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
define('AUTH_KEY',         'ku`pT&0%q81/&8-Ogt*k_9mY.SmvyPm4Sb_<g0((/WwAe4N]iT3M6b3pbb,L=CNX');
define('SECURE_AUTH_KEY',  ';uA)}.,X-|)}.9 ^#P{L.8*G_{QlFxO<rz5v}mEJbd!WtfQ&cziCl<ln$#Z@r-U.');
define('LOGGED_IN_KEY',    'ASX>~^w.($;60flR)rn1l4?7 zuRF; 8&Sc;LCr[<WSg)^f(i^~CY12cc^&5O&~,');
define('NONCE_KEY',        'E/<CxydDAw},g]0Ld^zvkbh~lQO[#9qXX9J1}KHdW.N%#Q0h2t67GDS9DofymU@>');
define('AUTH_SALT',        'A<f<Qegm3NiI<|]HoKQos_{V~lzE)98fY>uy@Bsv`3.,?UWjbVJ]hTS2f~@.M?:t');
define('SECURE_AUTH_SALT', 'El~NuzKr:6=_X$b E/B7[k$DC]&`n{tOcz.imoCu?!g@J&MqHJxhA_Gt<rffMgt-');
define('LOGGED_IN_SALT',   'n{s=tWLeQZA@BqK}DJ|i2}<!$OR#HlJzAQhb[(`mlz,%?YV[_$QXuWWFax6oqP{T');
define('NONCE_SALT',       '>R>,<BGCu4p:GI%-pZ<9rn1:<4b5=oEZ~olM8HPv_EQNOb #>SLqWx}%Zq07}..q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'adv_';

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
