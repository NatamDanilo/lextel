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
define('DB_NAME', 'alexcomc_promo');

/** MySQL database username */
define('DB_USER', 'alexcomc_promo');

/** MySQL database password */
define('DB_PASSWORD', '1w78v6PS21');

/** MySQL hostname */
define('DB_HOST', '10.243.4.159');

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
define('AUTH_KEY',         'v7qqd7iixfiygcdl0m0ohv9k5cu7bpqpztxbpbibqg9ey6xtc3bixxmbp14fhkum');
define('SECURE_AUTH_KEY',  'xzs9fgalfhriiacc55ett6vrml8shhyluwi6kcrcmqrxnz4nmlfnp9jddcj5cc4t');
define('LOGGED_IN_KEY',    'qaouiiacsz7obm1uegv3apm5tymmk4mkyebbamde00lma4iwvsihiab6akjqxcst');
define('NONCE_KEY',        'ovhc4kf1kve5xh9ihkzxkjfybqddlgo27z0w9quqr6h7pbwnaz4dwi4tetre2du0');
define('AUTH_SALT',        'hbzagnnxyhkjgggbh1zu4tiuqm8kyvxclpjr87cbddy26hewd6txbcd1x7cwnxsb');
define('SECURE_AUTH_SALT', 'fg4zfzbifykwrlj2fmb99umhhtjrouifaucxrvtt6dgnvuysm7y7d5asrd8usvrm');
define('LOGGED_IN_SALT',   'u7s41wtasgofucnmsw2okjyhfziu1lazgbzsl2wf6luypubr89rjfpdax91yapc2');
define('NONCE_SALT',       'datjx1g6ebqnqhscfm82fteg2z1oslggq5hdbet00lhclifqcbt3k27z99u15dpv');

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
define('WPLANG', 'pt_BR');

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
