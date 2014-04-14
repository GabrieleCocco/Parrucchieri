<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file definisce le seguenti configurazioni: impostazioni MySQL,
 * Prefisso Tabella, Chiavi Segrete, Lingua di WordPress e ABSPATH.
 * E' possibile trovare ultetriori informazioni visitando la pagina: del
 * Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Editing wp-config.php}. E' possibile ottenere le impostazioni per
 * MySQL dal proprio fornitore di hosting.
 *
 * Questo file viene utilizzato, durante l'installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web,è anche possibile copiare questo file in "wp-config.php" e
 * rimepire i valori corretti.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - E? possibile ottenere questoe informazioni
// ** dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'Sql339040_5');

/** Nome utente del database MySQL */
define('DB_USER', 'Sql339040');

/** Password del database MySQL */
define('DB_PASSWORD', 'c7149425');

/** Hostname MySQL  */
define('DB_HOST', '62.149.150.113');

/** Charset del Database da utilizare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

/** Il tipo di Collazione del Database. Da non modificare se non si ha
idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * E' possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * E' possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`C_<a|X%=]04fvR[TJhPX+i>8HT{om<nt|vfM 9ssY^->njB&~%{cF-lb+ZQp%0d');
define('SECURE_AUTH_KEY',  'xQ=:@99=;.h<T)c?+f1%^I++|^gNpb3Uun>3>NwynPO(NnLT9o+o[uHNS#8=}+2F');
define('LOGGED_IN_KEY',    '?>2Cud-KdwL[,:O!&*g|^).w<+Ml,cA{@I4,`l;9n3*ShzfBJQxac8Zm^TRCOQ>D');
define('NONCE_KEY',        'Y%E)P@A--hkY*^cz;Zubd$^k.jM)v-*XkMFUc`snf+G|3a@<7,~}v;:%bEp7tx#A');
define('AUTH_SALT',        '`Y+aJ)C`/Dsn+BEU7.XFClP{!KQj.r<3)K jEVKE,]!KtYPG{6scm?}s]+#j|&o*');
define('SECURE_AUTH_SALT', 'Iwq{R/89eaTGMH>Q^_?T;u]lh|;aqxXHkGr1V3[g+475g$Yxn%]GLq|*Xe9n}piZ');
define('LOGGED_IN_SALT',   '~rnkK61AdejS3/6g*|[~(d<DQRk9L~)L$D;(XA|YK^ko +pVLj-~Nc@e!:|`H|Bu');
define('NONCE_SALT',       '_nkCcY@|=x-q^CB!u-M[f&Q}z5X8ST*92+(DjyI4Q* w,?rj+YmApt.GbZ!}Zzcu');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress .
 *
 * E' possibile avere installazioni multiple su di un unico database if you give each a unique
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Lingua di Localizzazione di WordPress, di base Inglese.
 *
 * Modificare questa voce per localizzare WordPress. Occorre che nella cartella
 * wp-content/languages sia installato un file MO corrispondente alla lingua
 * selezionata. Ad esempio, installare de_DE.mo in to wp-content/languages ed
 * impostare WPLANG a 'de_DE' per abilitare il supporto alla lingua tedesca.
 *
 * Tale valore è già impostato per la lingua italiana
 */
define('WPLANG', 'it_IT');

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * E' fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all'interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta lle variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
