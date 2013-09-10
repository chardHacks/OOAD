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
define('DB_NAME', 'faculty');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '8>^);1r(Soe/gGyOv.LM,.{_?J:F/QBUblAuv*}w}I$Qk[dXUBV.I-zccgE6u)?a');
define('SECURE_AUTH_KEY',  'Mfy&sfSCZYX0A}KIA0j.)-pV=.F@O>8|rfs*}y4M68r*_PMKtq> 9W,0TgzL(RKH');
define('LOGGED_IN_KEY',    'Rr)Rm/)DzH)9}chM(cJ(@6`)aIA2l,6ff(GGg|HfgX3E0-Jc}q}?j*,gyYec!xu,');
define('NONCE_KEY',        'ESl]p22AtLFEi@[=~x27aU}[!](*=^#cg>/N>v<5m[uA|%JJc%zrGQ)YMnZ)1GZY');
define('AUTH_SALT',        'E(g6R&TAZd!#?HO^m4RY;_7Gj}/Uq,:QfhMm6u,Nif3B/8}-)pTBPC% PJ,fO/ko');
define('SECURE_AUTH_SALT', 'coBA]R.]_l5*+/.[vg5Tj9zEyN)NRZ4-/JkqObIRM-[[3?$,TEsf1|ej+J*j!Ym5');
define('LOGGED_IN_SALT',   '!(xE`)Qd>S;i~{J?05E#RurpZZy/s(k$rvx<5uQH_:89r2@xBJ._Ken||_!QuCmf');
define('NONCE_SALT',       '>kP(<[dGd_46 R{]#=,$sh-LbOh|Pzo R$5E(OiQDAOjvH;6ZjE#-ob26UZLji&0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fmis_';

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
