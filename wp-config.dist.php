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
define('DB_NAME', 'DATABASE');

/** MySQL database username */
define('DB_USER', 'USERNAME');

/** MySQL database password */
define('DB_PASSWORD', 'PASSWORD');

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
define('AUTH_KEY',         'h9/Q_3V3JD0[>A_Z!BIQ/y$.T0Ds398oY334DpV^J)/,=%7THt.NK9VNcrGV$1|P');
define('SECURE_AUTH_KEY',  'P5S^}P7ZteC<,KSBg%U$vfTnhA6uN}<,]m7DNb5gJx+)K|EZ)P0Q^*FJr|ww`J4{');
define('LOGGED_IN_KEY',    'zbZCY2yBw*<(@sD OJY 3f2|ts-`b}r.F@QI26OUJ>94**5!H*V]X,MPm(jx!a8$');
define('NONCE_KEY',        'hFuDsY^=fsyyrAx|>=D$LXHt>-4@2vg#qW(1?@udGW9:uoP`La<Q8T_JH<1Q?5-S');
define('AUTH_SALT',        '}]Tnw$b_E$%i?ej-9qwic.gl|nyC2.SHrWDq>5xi+W+Yn=(hm27hsry[,GitFvN8');
define('SECURE_AUTH_SALT', 'j[Q9yI?|CO#A11~mB)vrG+/BXgze5A@cUDp-+m$r_))`-XKKy&/dK&v|b^F%375Z');
define('LOGGED_IN_SALT',   '),O0HZy?+j+/12,!-!-,79rd4x7H4&q-i^|yI~bD-`36)Ya=*mOpU~jA@SE;jG2/');
define('NONCE_SALT',       '~E{*(r{(;/gq?Eu/M6;Xka8hHDU--TuYRw;(_HU;JV9.T1qf+tz?#p;R~N?94k]l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
