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
define('DB_NAME', 'flames_agency');

/** MySQL database username */
define('DB_USER', 'flamesagency');

/** MySQL database password */
define('DB_PASSWORD', 'GPGEVme^');

/** MySQL hostname */
define('DB_HOST', 'mysql.flames.agency');

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
define('AUTH_KEY',         'dvwOq&_pki0WVOSA(J1iH^kRE^t!|wWQ`YOvgQ^Y/AM8w?/1lei0$qPcQy#5p|A?');
define('SECURE_AUTH_KEY',  '$mP7j1)Z_j4RVnvWHz7BSzLaq8S/2u#:8:9h5L!V3:bTL#KeHPpIAXXS^Ad&+K7u');
define('LOGGED_IN_KEY',    'kb@tACoH@&5ltV7ji|zUsSbMNfsc:#vX&ad+flfP+lj%_#jrb7AFvoeaDedkcn?A');
define('NONCE_KEY',        'c~X6V~tnrt"fiT6u#Mq+z!tQ8k9~BajSF6(4t%nDB)~b%ckxb(k#$fk#WhHCy8Im');
define('AUTH_SALT',        'ZEqpCe#3t6LE$o9~+Zoc!vGgb()oQ~r**IX7(al1A@y3_D7Vi"gP(CYinqW@Po(j');
define('SECURE_AUTH_SALT', ':?CcIEw1zF%4/D%mjsz0zP2gb(MfsXeLS~&O$vl;l95x^r7yd0lt&CL|3+XP5"G2');
define('LOGGED_IN_SALT',   'I7E2EtvXs|EH#8p^N?:*G+3xM"c18~%`KU:XL_fboJ)AlFznbOCNoz`I:Ng@wD@`');
define('NONCE_SALT',       'OIahr)B4Qj#Pr0LIx_4x0_9vy_~5g!w*620&5q7YMS/UgAKiG/h&hl@@h+;V7MBR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_tydd2p_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  3);

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

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

