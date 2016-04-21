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
define('DB_NAME', 'wordpress-db');

/** MySQL database username */
define('DB_USER', 'wordpress-user');

/** MySQL database password */
define('DB_PASSWORD', 'lab');

/** MySQL hostname */
define('DB_HOST', '52.38.117.248:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
/*
define('AUTH_KEY',         'zK7`l{/]<-y~m|z+ak,Qtxa@G+NEq9.X&l][a{-?0cdG&EIV| ||!vze&#p.l(Sg');
define('SECURE_AUTH_KEY',  'DU+iW%1|Q`mZL$^;D0(wkT]4I|7W9Z=EaFas?ts9vCE~`=A{[iv4lzW77j4/H,m_');
define('LOGGED_IN_KEY',    'H`L@=d+jlX)HiY /xDq}|d|</^UDQVV-L`<S(3zBtY,$]tU.%8d+C&@%-.m{jgMv');
define('NONCE_KEY',        '}@Hzz< -Bek$}*4}kxG^*fIz>&ZE/DbN+k99~CB-^nJ5!$#t:O~DGW|x[T5=n) 3');
define('AUTH_SALT',        '$4AN9-fn I<l(yeeLF%gMRY<+#|*gVioOZdrJat*L#EW7BiGXJHFoW}-|+pv`GO;');
define('SECURE_AUTH_SALT', 'aTFCB]xgDmip<gfa`vp+SE_)M+9-LIXnceA@gN9SQO*{v1(n`N 5e2IY84wf_);r');
define('LOGGED_IN_SALT',   '>83axy+E@,F3`-]{y;#f?%@@_LM,gG9PXf]lL8_cbx1$p-jC&_X9d ?X{`I%z,!@');
define('NONCE_SALT',       ',u[Tf_|,HM~ ;4zsL~H7~4#:0m1/Q[4s:=zYyP-OSr~JVRCs/Sm9 E7e|M+L6XF)');
*/
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
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
