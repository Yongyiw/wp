<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */


if( $_SERVER['SERVER_NAME'] == 'wp.dev'){
	define('WP_HOME','wp.dev');
	define('WP_SITEURL','/');
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'yongyiwc_wo6274');

/** MySQL database username */
define('DB_USER', 'yongyiwc_wo6274');

/** MySQL database password */
define('DB_PASSWORD', 'zgseyZ34s85B');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '$V!lL}?}Zjha!}^s}QVo&vd&FD-%PbZg)lJ?D/;r+tKoDFcf-|?Q|Gu>[;aL-OvUYKSktKmGk=KXsq;;[Ed/S!P?%V&ngj@AsnsU+y/]z[o*mGxm![h%j%kvkFEtP-yg');
define('SECURE_AUTH_KEY', 'B>!B]x[|oha|(gOv{Mf;xzLuZT}Dfea])=-w%>afJJ&CmSk&=FxqDT$RJS[=wOP]h/p+Q{yJe%RygOWwR{GiX]]stH}LsM(P{Qs^/VJ$GH)w|!%!JgXCB+KVk^VAr+u/');
define('LOGGED_IN_KEY', 'ujOV*})F-Y*A*+TLl&UWg=%EcGgwwC?+pX/uG;ND{}TqxE{Q>vuILS/tqXOd>>WTIuKP|lzAh/EWZp*mEqsPj>i;h;}w{%&!=RT%b+}D@$_$Nq*xR|=](+c<(%$_je}l');
define('NONCE_KEY', '[@)^RK[Go(|P$]^hKM<Kua[qdT%y>@xTP}|BgY|JZb=EB+}]R}b-KU[Fvo{C$Ql$>k]FZBg&Do<cw_RzM]EypY^!DqE]T&]PakLh!TOq+&!lv{W}WH}F=BJE}]$DhEl+');
define('AUTH_SALT', 'UeXtobh!T[^v^kndEWSWEE?e$pLuFdTzyj&fLjblkYfFrax^Fp}!MHr^Tdf^<<cQvF+LhQIly&KYUP;szaD(EBRpf@l$@x+<-PsemvciUHsM%wcL}[E)CuKZ}f@CtC;f');
define('SECURE_AUTH_SALT', 'OKFVt*ss+&wFY+NEys!w&AugvMw+YiHlTdjYrM=mmqEyq[yuYqts/RkzyTvMIAt@{eKi!FOZmb)FvFz]BySdZ?dh^{m?F]FtW*^+zUQFngiAI?}opH[}?|>r=Q]Ce>=>');
define('LOGGED_IN_SALT', 'aMBHGQoevWVC-xbGI>GeL[y-P=LJCB^LYzM!!{p?)CC@]/rJj_B+&N@h=GlyXcdM+W!;CsRBS)-LYfXV>C/CTj@Xk?O@h$hawmR|)OQ[[aV[?;rEqqLp*+(Q}}IfOuBh');
define('NONCE_SALT', '=CS(S(UwlEmdTD;ME*%U}^<n*mErSOsW_aSEggcEtrD>;YSSDQkFG=I$P)lJz*QW?MoWdWowTaALE-{;gz<$nF}GFoh@|brT}nUm!xCq$VPmyA*)a!o!<TmCvG]Bd{ib');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_stbk_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
