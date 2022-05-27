<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BQt,*{),|d:H^)zWz-UB 0AwiL{z%RcqFr$:$rs8U?B+W22-v[_3f5T@!:Bf1]L^' );
define( 'SECURE_AUTH_KEY',  '+{tPlfcx8)|VAy<)>rKO@mPm!VK0 `;RcAO4:ANcfzMH0BvuXvp6Iy7cw9hZK/&O' );
define( 'LOGGED_IN_KEY',    'Ci,)3%^9Z$R@#g<&D)X>q4z1cCX/G,}LK`}}8cw]fVL~+[XohaGU+cqM9hZ55jo$' );
define( 'NONCE_KEY',        ']*@T@I1BN^]#YgbBlLuYm>a)>Q.Y(1tjn}#;asHD1?12{;YMJOCx](%T(QJ`4%U:' );
define( 'AUTH_SALT',        'H QTGv[HVT4 feivqT2>sbfzE_jI.S(D:_s71CG,-5z^]:KyK@I+<r8*d8gZ/h20' );
define( 'SECURE_AUTH_SALT', 'w8rlhZpI*k,;K^;HnsIAQ5Z[P?b/.1%T]Z|tMXFi: A(MqQ</,PlLGbEU6H )?#-' );
define( 'LOGGED_IN_SALT',   '.#+4p0!VT;X^KkzZ>6f%BA{F)6<4]}+sxp3<S7TsMedCNjz+H{29+?^?AZ.dlYpQ' );
define( 'NONCE_SALT',       'Q vv>l?Vvkd`^j;!oOj69a>7^RcnYsiy0_9kIx]q9KF0Cg4al[Pv`~*JmA8I!hgi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
