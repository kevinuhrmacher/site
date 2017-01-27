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
define('DB_NAME', 'kmu71892_portolio');

/** MySQL database username */
define('DB_USER', 'kmu71892');

/** MySQL database password */
define('DB_PASSWORD', 'Orioles!343');

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
define('AUTH_KEY',         '!(1p&y)bg<:zi|nxqV/~L;}E 7Wme66Y(7b%3.h)zbr7oQ!oJ4C`DVLzX]]}8Wh2');
define('SECURE_AUTH_KEY',  '9+<1-rP=zvc?y,N2+:PXoIH;VeD7$J88T-P=[Q5+/M_YAD.oh-D/d2xCUR|eZ#iS');
define('LOGGED_IN_KEY',    'IU#u3-zW6D]8@d15({0* n.6--AO _(yT?|f>/75-6?YH]K2g<=S]C$qQ4*.|E1Z');
define('NONCE_KEY',        'MKq&vmC-^K-3Im H~_-l6`3+r6-i5 k9#BxKrSgU5,k&&#o6JnDs|*,(yky-N6lb');
define('AUTH_SALT',        '<UB+g5}&+j*Gh03%I+lh-6C~0JBMh)#;u&!{5C10K-U8k{4D5v1Cj|FT8gjbCKp|');
define('SECURE_AUTH_SALT', '1<1c;rxDn^$9=uL4dx7|{$O5h*]V]YLAEi7^qroJ!FyLh`wsKN<V6)Z6S;!E<n4@');
define('LOGGED_IN_SALT',   '|tHQi+hW>|hAYk|ko7U{|eI[Tn_H#ZjUW]S{e,Z|nUc^9#gO7$06Ey8]g||pg/Jp');
define('NONCE_SALT',       '>+|zCJp^#X]-_k-&+e8w@s4%9E{$FJTq3]=;Qhx00t(e$6k<hkc[&u.|FtLl^_$8');

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
