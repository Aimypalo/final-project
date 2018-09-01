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
define('DB_NAME', 'ap-art-studio');

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
define('AUTH_KEY',         'Y<u/Dtfx%HKVc-Bsob tlSI_-<|;u}(!9+@LkKS16N~p|AU2#<spc6}=XQ& <`Dc');
define('SECURE_AUTH_KEY',  '?]Jt!)]aNt@))ji&(X/}mNJh)MCG+xrlYT!*WQ09|U=8Myt(4)^8ak,Z[9|};P6Z');
define('LOGGED_IN_KEY',    'wbM.MH4DNP5PKk#d&?_#->.|5@OFl,9lbn@Qf)F-]pm$At7Q]5q#kB;H{gNieLN4');
define('NONCE_KEY',        'M:>X}j|/IyA)o(Sk>u~ S2H5PK>Fw{M0!;)}a86J[Rp+.PMV#%U1-,/$ZN6ttI3d');
define('AUTH_SALT',        '!Q0~h?HRK?o?V!y,!SRF#)Zr=w_YuSPmiGT!9jfb7!HUE}Nm0/h<)(@i^*$E4Yxr');
define('SECURE_AUTH_SALT', '&Vb6?xpW-YMM}N)[PZR>YB:>IWIoJ,?)_WiD3viy:VTsi>.eKt^5|)SUK+h_7?[e');
define('LOGGED_IN_SALT',   'qaK`HH%8#`GY>*0 A<Ij(^;|S0LsjZ09[vtFkv9V{,yIM40S-TZolK3!h.kd6tUx');
define('NONCE_SALT',       'Spu,JB9Kw6&,Kwjzq=/<@+pDXcyQX#hPpZ)(SbYkvq-=@ugo9?VRYu3@Rwf|[)oY');

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
