<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'law solution' );

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
define( 'AUTH_KEY',         'tlXZzK/W:U[2KwS}ms@:H#Fn3A&:;Fl#*20hjo#QZWER$Zd~;6/rLx?R)lXZxU0f' );
define( 'SECURE_AUTH_KEY',  'Vk#(up=x.cie9pL exC*SGQP$tW,9/2*wo+?Z5,+ HihD`5Zqr^?`*4o7Fx< Y?F' );
define( 'LOGGED_IN_KEY',    ' 3291o;C(y2*EQcs%Y)(;BqR=%P=lF o @!#INE*(]TqBY{|r73K9j^-?.}tqJ|C' );
define( 'NONCE_KEY',        'A)T.UR2s|cjvPM`}OYR+_UAmQ[n*EYM|8)tDI!@k{0P&aKfe5f~F?p:N+Te*t`U~' );
define( 'AUTH_SALT',        '1po[q^>aKjbD%#r2F:^r0t1w m*fOnj%CIYh*@OdJ-+y#E4]l6<r4F!Gz~H0^Kjm' );
define( 'SECURE_AUTH_SALT', 'j:79Z,ZJ{R{>VxqJ7D4E69}Yy .db@{?U2[8*RCWx~k`shg+}.+XjParA$fuL*7`' );
define( 'LOGGED_IN_SALT',   ',,T`D@+.zl`mH+uZs/)g| r%ue-5B6%(Ms4z#Z9$Hf81G uH7c$*7#FjxD8bF2`e' );
define( 'NONCE_SALT',       '!#ZIkj?>+qc_WKobM:3wnD8<yT4](4pAb95w!5=]m6.*l&&hahYks%MI4)(?,g^{' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
