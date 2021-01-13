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
define( 'DB_NAME', 'andy_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'V*K|bLrdxlI&4D]C[}d(W*s+]{LUI|ZB{5S[;J3=JKw0nRy<iwzQM5D{#R43LV4u' );
define( 'SECURE_AUTH_KEY',  'wTPV-J.a[+JqF._PR1{0eGl-b0jT]eZUDcG]rYi6*Cu8y&tm!D^+i6+7?$I8C`;8' );
define( 'LOGGED_IN_KEY',    '>:?mXm%j j7ueq$Z6J`PK_xCqL9?9LdjZIvp0&i;ej+|a<DaRb0vWuvvySK26.RE' );
define( 'NONCE_KEY',        'eK}T4o?|`2ZfZa+*]+X:xuQmSHPAq`rZH5kJ^lddpRd98vag$,UVR&,8OG=D0ITt' );
define( 'AUTH_SALT',        'YkWd$O{&:I?H:yq}XF2Nzn5Z1F0@qzd+5[=Ut.:Dv$bJ$CTcM3H_ )db4r8dE8hU' );
define( 'SECURE_AUTH_SALT', 'pB^D0~^:E=3mi4@!0#jT[ynTUF+:bv77_aDW}FQ?{480r]0k4SF.z8sBpp29e,:Q' );
define( 'LOGGED_IN_SALT',   ' ttatm4B.2X2hrFZ_RuBBu_q22$vA+M8Fl85 |wD_Lpo+w[qF0d(-3^Pw@gFRp2!' );
define( 'NONCE_SALT',       '{VTU9zkYuC.B!<Upn|n~ky<D/q2!ek~.Rw}rw0eJC/N~U;m_~`eT:>|zo,`$nhT[' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
