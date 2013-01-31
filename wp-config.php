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

/*
 * Environment specific configuration:
 *
 */
if ( file_exists( dirname( __FILE__ ) . '/../env_local') ) {
	// Local Environment
	define('WP_ENV', 'local');
	define('WP_DEBUG', true);
	define('DB_NAME', 'mistermachine');
	define('DB_USER', 'mrmweb');
	define('DB_PASSWORD', 'eetdfXY8F7pCVb');
	define('DB_HOST', '127.0.0.1');
	define('DB_CHARSET', 'utf8');
	define('DB_COLLATE', '');
	define('GOOGLE_ID', 'UA-XXXXXXXX-X'); // Google Analytics ID
	define('FB_APP_ID', ''); // Facebook App ID
	define('FB_APP_SECRET', ''); // Facebook App Secret
	define('MC_API', ''); // MailChimp API Key
	define('MC_LIST_ID', ''); // MailChimp List ID
	define('EMAIL_CONTACT', 'michael.enslow@gmail.com'); 
	define('TYPEKIT_ID', ''); // Typekit ID for JavaScript
} elseif ( file_exists( dirname( __FILE__ ) . '/../env_design') ) {
	// Local for designer
	define('WP_ENV', 'design');
	define('WP_DEBUG', false);
	define('DB_NAME', 'esra');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_HOST', '127.0.0.1:8889');
	define('DB_CHARSET', 'utf8');
	define('DB_COLLATE', '');
	define('GOOGLE_ID', 'UA-XXXXXXXX-X'); // Google Analytics ID
	define('FB_APP_ID', ''); // Facebook App ID
	define('FB_APP_SECRET', ''); // Facebook App Secret
	define('MC_API', ''); // MailChimp API Key
	define('MC_LIST_ID', ''); // MailChimp List ID
	define('EMAIL_CONTACT', 'michael.enslow@gmail.com'); 
	define('TYPEKIT_ID', ''); // Typekit ID for JavaScript
} elseif ( file_exists( dirname( __FILE__ ) . '/../../shared/env_test' ) ) {
	// Test Environment
	define('WP_ENV', 'test');
	define('WP_DEBUG', false);
	define('DB_NAME', 'mistermachine');
	define('DB_USER', 'mrmweb');
	define('DB_PASSWORD', '9OlasvIyXYZ7mR');
	define('DB_HOST', 'localhost');
	define('DB_CHARSET', 'utf8');
	define('DB_COLLATE', '');
	define('GOOGLE_ID', 'UA-XXXXXXXX-X'); // Google Analytics ID
	define('FB_APP_ID', ''); // Facebook App ID
	define('FB_APP_SECRET', ''); // Facebook App Secret
	define('MC_API', ''); // MailChimp API Key
	define('MC_LIST_ID', ''); // MailChimp List ID
	define('EMAIL_CONTACT', 'michael.enslow@gmail.com');
	define('TYPEKIT_ID', ''); // Typekit ID for JavaScript
} else {
	define('WP_ENV', 'production');
	define('WP_DEBUG', false);
	define('DB_NAME', 'esra');
	define('DB_USER', 'esraweb');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
	define('DB_CHARSET', 'utf8');
	define('DB_COLLATE', '');
	define('GOOGLE_ID', 'UA-XXXXXXXX-X'); // Google Analytics ID
	define('FB_APP_ID', ''); // Facebook App ID
	define('FB_APP_SECRET', ''); // Facebook App Secret
	define('MC_API', ''); // MailChimp API Key
	define('MC_LIST_ID', ''); // MailChimp List ID
	define('EMAIL_CONTACT', 'michael.enslow@gmail.com'); 
	define('TYPEKIT_ID', ''); // Typekit ID for JavaScript
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ']u8=|Nq<3nz>$Y0v$~i6?>.n|Z1pEis|`@arja-s,sS|9xq9?$4Oa8e}|aszAJ9N');
define('SECURE_AUTH_KEY',  'u[%}9MmDjW7Yty~4NgC@:5Z5ol}zmxfkRx#ZnIm>o6s;nh(^8#iT7`d|ikf9d+gA');
define('LOGGED_IN_KEY',    'aT gs,W-=8^xy=/hfU8_R),xpwC$=s%}+r^->%!BKWs&k+_H% fD<iB+?Gs<hLHs');
define('NONCE_KEY',        '5v@r_x,)KI/H[iK8{B|uAZ?c+Kc%M5bT+^wG3gf%tSv?1f:w6V|sEitmp%/4$kDu');
define('AUTH_SALT',        '*LzAY&TZlCzcGIMkv?>c=kwu5+Umc|@:OE2eEN1CK<T*Oqx+(FKR$1X_!$4qe@cn');
define('SECURE_AUTH_SALT', 'fkdYWkX`2Z>0fN5E|=)wI8RgLLR{3}gr)g@kzPEp-dl|UdD|B(|ac.RZYO|?DoDc');
define('LOGGED_IN_SALT',   'af.t-VO]$oO<JJC#4Jz`TK)LRJHr%skIEWFr*;:,MG;x(hrOVl_]dC,o5@l5y2)R');
define('NONCE_SALT',       'jM-N(q&8Q<q@o?iznrx?E|/^c$^.@MTTYwmPMaj?iKmx]wg?,w@9<di7.Ojicc9@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpmm_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');