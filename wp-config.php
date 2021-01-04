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
define( 'DB_NAME', 'osdb' );

/** MySQL database username */
define( 'DB_USER', 'os_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'i )@OG.]*li$<{8BitlK3C=mPL+9E]EST,!+$ o@@.9neFj#+YsA+5cT$W6I{j)C' );
define( 'SECURE_AUTH_KEY',  '[&pu@w*K,-CESJWbl12>=`J0|I*nvtS9VZ*U0Nv*:.1/@`1h;WAt)gULSHnz7|jC' );
define( 'LOGGED_IN_KEY',    'Q>+{fTUlyp8u`=~:wNbT*%1a@yw_g&[@M?^S|Uz&sIbEFqP4T>(jg_4Sm3@~z=+g' );
define( 'NONCE_KEY',        '/6Li)Pgn=(HtVE{M/n/2l2S0Z+Q*.t5 ><MZV5V$;tt#talSjyHb;EhG19 [1N3x' );
define( 'AUTH_SALT',        '>l<;W|W}>?$AiWXhTv1f;>nJ8ie7Y|-qbD z@KUX}[Zn@.)I8xCw<~C1cF/o_|?4' );
define( 'SECURE_AUTH_SALT', '1q.WRF%$1g}IM2XA5jUe}1|>W[|3W>jAvE!bR>&3Pl~!:nyHoMA Mu =mMEh5=Uw' );
define( 'LOGGED_IN_SALT',   'LD@xD)5lKc]NR|!kQQgM{wn/!4lfe>yxn_MXtN2C&BSJU=IyZ|[_v5n*D@#+vK/u' );
define( 'NONCE_SALT',       'EQ7#CA>bv?[.7R;1[Ydw.-+@cZ`mC~lN#1KC+o&<aSGg*i$zF{lVCWZhlGYcF`x[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'os_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
