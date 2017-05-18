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
define('DB_NAME', 'localwp');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'V1X{`u+j1;c~HvDKe2wl2rxK`Q@-l*D>(YmvwN(l3VbK]@y4(qh lp[Z84/=^eY8');
define('SECURE_AUTH_KEY',  'kNKfw62U3xz]9MFn[C.`9@i=A42[f@4LyqD_b*V@(Fr|!MWCBC4]NPrOZ;`B2BLB');
define('LOGGED_IN_KEY',    'zdQqK6conwi:dYE/Q+}/{3{V(d)Sohc-CY:XhD5O(denvQVP$AnxM]+S_$jV2`|T');
define('NONCE_KEY',        'B>##:{zN|V>SGQ(KUL:IpU{)aJ0?5TKJuz ^9ryn1oP:3y?{`{MNl~@R{]h8`q1v');
define('AUTH_SALT',        'T,F]d3#PxDcF6oHx8}meC2U7>~yV|EVrDmOVLMJb6e>g5UYAe$,Ii-$k?q*N5-a(');
define('SECURE_AUTH_SALT', ';&d+.#..WT{o^0t+9P~~Rinv,#6QeT0Jt$kg0)`Mj9z7t7Z;{GG=yAs|!UoJ~$#a');
define('LOGGED_IN_SALT',   'CT#~_Z5[m-bI8D1-iR_,Q1T^Z7A1wpc5f;{nj<+&I:l*Yg1[0nhiQMT&=,!7c9|5');
define('NONCE_SALT',       'Z~juo}eG~U8 fC=rfQxtSV88n_$hGCs0#TeQGFQwc~0#o%^f*yT|Bf(4T--|:Top');

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
