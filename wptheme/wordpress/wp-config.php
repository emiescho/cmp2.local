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
define('DB_NAME', 'aston martin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '{f` Ob=NXOPKrROYDG~S`X0pS~& zDZ1^rL~gRs>H<CZ {ewb wo%Y`!Ao=Xq^jm');
define('SECURE_AUTH_KEY',  'SN9N+fH7)1bWqlC7DS$#m{dKzn6Z&Mt&P<rJZCg,;k`Jpd]MyEO-ml#+z*8FSk,X');
define('LOGGED_IN_KEY',    '@j=f%6b+jt`*,;H@Y{sLlX;$Oi6,KT1KWZgG*95e`8m&3L[YsHt0nL>@z$8,wVCV');
define('NONCE_KEY',        'e)]mmj(L22%A:Cvml{d4L04{;$?u>NI7$*-te.n~iDI^TM=z-;j_/rz5Mc8-byF[');
define('AUTH_SALT',        'LHaD MADq0=uL>R`qVom2x(y7_O0Ro1yp=;6b//`zk!o}3RHh}}++egEez<,WmQt');
define('SECURE_AUTH_SALT', 'lmZVz^*eZ,:X&Jl* gapjL,Ji1r|g~t<BD2XaNPQD/S.cFeI(NLk]oagfItDX.Y(');
define('LOGGED_IN_SALT',   'M,v;r:H5gPp)-cesx1.<qGnr-El=o.6_#RCS?B/9O7#&gLJH4O0D$1IFo8Vq%iXn');
define('NONCE_SALT',       '!AY.dhN:J4Ac;ZyL~V3i)= H+NB$9Li.uOqujA+:w{w<jU b&Y(gyVQgjOV.o{%+');

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
