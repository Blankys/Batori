<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '~ypL,~QXPCCP ?G%6~C^)i,ltD<T6(pRiK!0()fVgNr+NI9O:dRZo5[YGtlrM$4#');
define('SECURE_AUTH_KEY', ')/mZNwd|Ig#EJpR9aIU;]~MaP 0EJ_`;3wLPI3ZZPd?ge[L3YI)AxNkJo2RGaSR,');
define('LOGGED_IN_KEY', '+Uq?&BhxC%d#m/Dy;J.;FM2LO6h_?!#5#`^l{CK+0=^B80a,h<M]%@9^-&y !z`G');
define('NONCE_KEY', 'lMy1^t<-CaCX[ ~nE6*~#8MW3Da=7(9%iv*k1ahlRa[bK:e7KW)sE59hT6OWZ6K6');
define('AUTH_SALT', 'i*HgJo($=}S=ClD9Y7C$K79]vfmo3-wN[nn-P8LQ,Fy22<F]p We1vXB0jy3/n^x');
define('SECURE_AUTH_SALT', 'euh{wKMdg!5mSkX{6|$h)_yj`CkQ(LaOrh(qBZC{:N78jinoxf:-C<8nbUQ3zAk]');
define('LOGGED_IN_SALT', 'A.#A+ngXxeRq--O.0S.kpRWbu5Vvpf(bOcOM{UWgjq<?1D8`<}`asU)/G*gcO;,j');
define('NONCE_SALT', 'R#T,oZ)Ea4}7CDi#t#-rHcJ0&!#X%]:P%ZYuli,g$M,Gcbkq54l%(l60_S9s#E88');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

