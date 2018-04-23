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
define('DB_NAME', 'gaiael');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '?+~`D:0zLErub|P~H~D3Wx_hLdRC`*JzO+#H2cxpDo9&izk-%md{=S[+JF^M)!iU');
define('SECURE_AUTH_KEY',  'PR!wm-[&Q=[Z`ZhGZ?]%1><YxrE8[s~/G!k.z:EdG @iKZG0y7xrx`-d$DveQP;s');
define('LOGGED_IN_KEY',    'W+xoZc_9Wy}+s~#}1#M=|^fDJspPe$+jrS9^w|5ul:bQZ5*eek^_J8RPzH|g`(7%');
define('NONCE_KEY',        ',xGPu1*XDz$_5A_3zEZU%Fyi5WD.@d|65.*gz>PO[GMKYzZ?yC0:D|nJE0[B]k,U');
define('AUTH_SALT',        'Qob#0&^E28~rs2Bf= z-*h,?JS/I3.meI}gBXC+!ie9_YXo B_+Or~<F`FvH2jwx');
define('SECURE_AUTH_SALT', 'W7>,l+YJVa/pyIeN?{v|e@<6K4PWy3tk9F;.1}`)AcG<>:W+Mf;Z{)<U$Wl{b7CH');
define('LOGGED_IN_SALT',   'R54[Vwe]{jD+i/}}ePV2x,RNP=hmikGJH|}`w%$|x0o8qax#Eo%&b8v@k?+A$vZz');
define('NONCE_SALT',       '(Yf*HOX8l t[v{/q<Du+>.[!#R_-#B-{oGoR@^Q!sI)_$*nDX>gBC67Ym=C>w+xD');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gal_';



/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp' );

/**
 * Custom content directory.
 * 
 * Use a content directory different from the usual wp-content, so it becomes
 * easier to update WordPress versions.
 */
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/core' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/core' );

//desactiva el editor por defecto
define( 'DISALLOW_FILE_EDIT', true);

//quita o enumera la cantidad de revisiones guardadas, en vez de false se puede poner un número
define( 'WP_POST_REVISIONS', false );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('UPLOADS', '../contenido');
