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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'DKMyA3kzvHomFxyzAyOLuv0C0J7LV3VsQTZCfcDMbTQqxJ2HKqAhl+/5CNhcxGIxVaBah3LJ8CjIPM6jQPUM4Q==');
define('SECURE_AUTH_KEY',  '8oc+0hDRAOoSHiA+Bvzarpo42MpOdMRieE2zCrjj5tGzJ0oNyNb12nN0nhXv3waJd5i+8RzU4/aaNWdZroGtxw==');
define('LOGGED_IN_KEY',    'DMZpFEeM4Yl+MJp4XZ6yeNbLdxAsiClAKQvH9JP4Ucj1+rp6+YWVNP9wIwSA3r4yh0ZX48E+cNKY/shkeJ7tgw==');
define('NONCE_KEY',        'ReZ/1/Y783sLjjm0ifXJ3AdKeM6KLODjOPkBwtUhZ3j7UUf+2l2IltsLgV9dJD68f3XvwAuKCpS8xfJQ/HdMCw==');
define('AUTH_SALT',        'MSdQrvk1qqVlBfHGKa6ITzee7nu/f7rFOiLJAr2oC2ztkDeFjOIuWgqQ9/dpFmLBwjC68HbG5qoJz33tg51kHQ==');
define('SECURE_AUTH_SALT', 'O2KuAQKYrsKnnepjyfcRI/tit+AWeCEi0KJ3WghOsJWc7uum9FQ/rkWluaPA1hia5X2AtzIYqJLRTAKggb8xBg==');
define('LOGGED_IN_SALT',   'o2FSCE7z66cYfaj0R6Yb+P0b4/oKwOyKyyd3woepeEGyYmXfU8c80vEt/RSc7t6fxBrp1Z5nmetI7hKzMHyOGQ==');
define('NONCE_SALT',       'ame28Lt68LGIg+RLaaDnfl122T2FeF16K4XD1DyXaows356vHd6g/lnN7AMJVjtTatKz4IA/wCAxHwzMoC6nnw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
