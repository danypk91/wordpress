<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'wordpress');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', '');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'QaqB}U|7F0Mk2lniX@rGQ>LMgECsgPnI.S/r|RCe!<1I;oX)9:(&A|:+fQZ/d1j^');
define('SECURE_AUTH_KEY',  'f(^6?A@1rjX*jN*9IM^mM{@!fu= /^7Sz$&^B6Bt!@75R0u_4mgYTy,c)v !$C6`');
define('LOGGED_IN_KEY',    '1ylf-r%<m~lF[CC<w[u|m^p-~$Ue3l5s[VBTS>[hJ~`aMK:!>%z^6x(v3If#EMW;');
define('NONCE_KEY',        'vCOMtv.[R]d%*)hFcK_aN;|4l[T3@poFhT,<sy%==HRf,aJnN_]13.Bc@M56Iu-~');
define('AUTH_SALT',        'yudo0?UXs:|E_zqA#2XYwEkHws|*9Kt!(kFfF.`9TuUPRLJGB!NH]`Ah Z[L^{~K');
define('SECURE_AUTH_SALT', '[|4HjoMy~i5GbG89j{vngHX#/LDvU5hQxI=3|1L$h:I`V]y 6R!JJs@YxLYMI+^X');
define('LOGGED_IN_SALT',   '9aVPMh[FUkMRIyHi+b;HCp+#y_,Y0Vf@9P[on<JuJp6gfl_Q;I>6#/%B1o<5U))`');
define('NONCE_SALT',       'NP*,S7rqQB%LSKUl/b%WCCA=T3Vh~suT&gIAa!:?ZXc,;G-:xYVS)`:Rp64AbBXs');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');