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
//define('DB_NAME', 'codeceptdemo');
//define('DB_USER', 'codeceptdemo');
//define('DB_PASSWORD', 'codeceptdemo');
//define('DB_HOST', 'localhost');

define('DB_NAME', 'codeceptdemo_test');

/** MySQL database username */
define('DB_USER', 'demotester');

/** MySQL database password */
define('DB_PASSWORD', 'demotester');

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
define('AUTH_KEY',         'dW>gpbb41lgDWvKu*!iK@tm>f,4g]{L)9#=ZEP2O{t.u$|z_~[=jLyo_LSgX=4no');
define('SECURE_AUTH_KEY',  '3#c6uX$bT9o7.qiK&Un=@#MJ>|xi,#O]f9w91kOY*TsfKwspxY^!rz3S]2d8u@cb');
define('LOGGED_IN_KEY',    '=d}dfA%XM!Ap4ThEt6;ujzi)4,c1&V2y/_]Y;eEb&B:Kh;k&;Q&,8,Vk<kozN1`*');
define('NONCE_KEY',        ']rF><#1Sf?}k>GF_4O}XeYeDr*1&j8jO&CQogEDUe,t,5>eoJFtlj8ju!LS,Arp.');
define('AUTH_SALT',        '4hs&qfCILR/7wBqE`Q+#Ihlh%e^jkx,r/;Oto$)XB5&B/bQoRz~x(3{1Vi}*Q2}5');
define('SECURE_AUTH_SALT', 'OkXa*O|~qu$C4X)(Yq-c|HB+-_TuJw8y^]^+S3/tt~b{}{HpyB3[/G`H*y-:u)M3');
define('LOGGED_IN_SALT',   '[Jz5e%`Oo*.N;>gW4~?`N|0q]iN{YuYufdAfc@t8Af#wmOvf@)+;=+zyYiuto&YP');
define('NONCE_SALT',       '9beL>o&;h.@[MOc6M#o}ilx`CVb=9nOmU4a[%ktkqXTHHvE )8tg0F^85q<#T9K+');
define('WP_HOME', 'http://localhost/codeceptdemo');
define('WP_SITEURL', 'http://localhost/codeceptdemo');
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

