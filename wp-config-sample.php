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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'WordPress' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

/** MySQL hostname */
define( 'DB_HOST', 'mysqlhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'sIQ-<fsURGB+oN& {h^!?;IeQ7KzoVG .v)x_@< 1MNv^0tlZqk31r7Y+{<8Ea`/');
define('SECURE_AUTH_KEY',  '1ICU;[LMNpjKV6=OB|<P/JzY`GWaO-$kstyg,x_yP C+0Ak@|qnjEb8]!A3T1^(=');
define('LOGGED_IN_KEY',    '%_x`kC:W$[`D=W^y,Yc/&_%oTiDO+{)?dsR82J`$2/zRJuUeGZE881t$8l3]{MY}');
define('NONCE_KEY',        '$0+K-=`+Y,;az{;|ye}Ou2lSA@n.B<$H.$3K=h-4|O0@&PK#AD=?0i/V7ps|%Mu6');
define('AUTH_SALT',        'cP;GR|y-mq$P|%$cgF;y}^S+Yo*I~ydSvaCw%DRr.@;jkVLE _#B:$_r`#wA=Afk');
define('SECURE_AUTH_SALT', 'oV=Tdnw<DsZ;V+3]@Ug-Lmg%Y8l/dVC8t[&z|-wE*H~}H>Cfen[4_;@*3Me|zJsz');
define('LOGGED_IN_SALT',   '(k/=Wse*+)8X?VY@|37-R`RW?5NaXqgM3$Lr9|-=I,VV=h/E&bw[>at$f33Z)6dj');
define('NONCE_SALT',       '(.Rn9yfW|]X<ES(O+w2E|F-RckaFYy_$`7{s`AD,IQ(UOz&SFacHXBx[?vfJwU^-');

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

define( 'FS_METHOD', 'direct' );
define( 'AWS_ACCESS_KEY_ID', 'ACCESSKEY' );
define( 'AWS_SECRET_ACCESS_KEY', 'SECRETKEY' );
define( 'DISALLOW_FILE_MODS', true );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'AS3CF_SETTINGS', serialize( array(
    // Storage Provider ('aws', 'do', 'gcp')
    'provider' => 'aws',
    // Bucket to upload files to
    'bucket' => 'mybucket',
    // Automatically copy files to bucket on upload
    'copy-to-s3' => true,
    // Enable object prefix, useful if you use your bucket for other files
    'enable-object-prefix' => true,
    // Object prefix to use if 'enable-object-prefix' is 'true'
    'object-prefix' => 'wp-content/uploads/',
    // Rewrite file URLs to bucket
    'serve-from-s3' => true,
    ) ) );
	
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
