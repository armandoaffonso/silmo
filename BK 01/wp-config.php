<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'silmobonomi_com');

/** MySQL database username */
define('DB_USER', 'silmobonomicom');

/** MySQL database password */
define('DB_PASSWORD', 'BUWJ!Nzu');

/** MySQL hostname */
define('DB_HOST', 'mysql.silmobonomi.com');

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
define('AUTH_KEY',         'dH|9fc4J/8iug24YkwLPj(idQ$Pi2^ZcTOFKy4V6qOve3g2wC%|MK!"ez:##Pehq');
define('SECURE_AUTH_KEY',  '0b?%%O5`+ho|RMhpNi*KP5Y|q&*R?Chd:e#"so9qsU*VODWlLt8C|;k8A6I0`x^~');
define('LOGGED_IN_KEY',    'mVjSsa%4|+gzi!GeLvf5j)UkRG0f(p1~0X`3^F%Xm5A_$Av+Ng)uDom`C%`93Tni');
define('NONCE_KEY',        '_&ZzQtf6#L;Pgo6zTwRg`ZvbJ+%*BLuLv|TV`+CqRSE:DhGAtL3cUS/EJHme5ud*');
define('AUTH_SALT',        'pYnOnJt?%J3Nf9CzPP(xKgGQPJ"e9dF!P+TFgvV|8TSC!S+A1B$MSw#6#(jU7D|_');
define('SECURE_AUTH_SALT', 'HM`4&#RRk"rKceDy@y%xgo$cfnbf!TY@/gNCP|S/(JhvUiUE(CX!|B71t&!sRQc:');
define('LOGGED_IN_SALT',   'QaDPpsQTWOGkfbfF3k#H_c5JU"Cgnb;2VWi_E0M*ZP?DDcKs|M0f)zoO|"^t2T(Y');
define('NONCE_SALT',       '8"?$;Qr`j2MPn^_H"Ikn#6MC?im(o`D;S94:lWu8GoWaOVyiN3ycH%`gPddDg&wm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_unk3sq_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

