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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/yIhy+RYDXx/kAcA27PB4fPSG2urKiDtqCVibXgRKFNdWkhrVv7EcQU3S0TUd+o265Jy6o40njsRnESMRLMADw==');
define('SECURE_AUTH_KEY',  'kk44A9qy1geeVT1Wu342YQO9Z9Zs9ZQ3P/6w0hmuWOqPmy0tn5lfQyqYZ2enrGzLT9HxgXMyviN8cHCyPG9NeA==');
define('LOGGED_IN_KEY',    '4BKUQ045w3oJkY7IOWmVsqxwghCD0cMzcnefKMxhXJyenhSNN9BWoqbvMy//oJzcXpwlWiC0iJktSzhVtlee5w==');
define('NONCE_KEY',        'vTr8V4GhYe3IG3rnt0oFJcZM9ZeBTxyr+y1jFq1fRG2e/VOyMMrdAhRIXfBKWGIncSq1Zh/HFualYwrNI+oc7w==');
define('AUTH_SALT',        '9234/Hw1TodLnqtSdMx8dU53HlC8OHu17taKu/977DzLvimWcAKcgSa+ua+xf+o90JclW2f0089L1Cd5JOQEmA==');
define('SECURE_AUTH_SALT', 'IoM/JosF/Mcr1fkcX1o7ukwF/kvEyRsnmptLNblBX9OjDFquONdveGZBwoNU+w+7HttokHG6P6Xm28WK4EOsmA==');
define('LOGGED_IN_SALT',   '1dfsdHDeYrrIqieRCoFVIHoIbYMBiZpwtDmuePSILMcHiNv0Gt+BT5/BqgVaJvpDHuUUOybTdzLYoBHHq1rgUw==');
define('NONCE_SALT',       '6DWlW2hpGdliLD534rSB5yITuvPLst18PIhX22QCWwWjgvLPiWOujeTqZdQuS6F75cZKKeNyKFCUEKfsZkmwmg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
