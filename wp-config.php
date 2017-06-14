<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Zu diesen Einstellungen gehören:
 *
 * * MySQL-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * Mehr Informationen zur wp-config.php gibt es auf der
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Zugangsdaten für die MySQL-Datenbank
 * bekommst du von deinem Webhoster.
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als wp-config.php mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * @package WordPress
 */

// ** MySQL-Einstellungen ** //
/**   Diese Zugangsdaten bekommst du von deinem Webhoster. **/

/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define('DB_NAME', 'db_b-wp-gulp');

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem MySQL-Datenbank-Benutzernamen.
 */
define('DB_USER', 'root');

/**
 * Ersetze passwort_hier_einfuegen mit deinem MySQL-Passwort.
 */
define('DB_PASSWORD', 'root');

/**
 * Ersetze localhost mit der MySQL-Serveradresse.
 */
define('DB_HOST', 'localhost');

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define('DB_CHARSET', 'utf8mb4');

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'L;ZQBR.z,>p,>?i|&FuZ_,$Zst<uAk#ST{pJeQ#yhQd65DGcX5{)u)fW;SvJG-=H');
define('SECURE_AUTH_KEY',  '4uyt8N=5f6=%Z%[]Xt(_zKI[~0{[z)1p_c-0!p:IM;awk[lfV:#%Yu9c_h/ZakWg');
define('LOGGED_IN_KEY',    'JMgYR)*Rjw=G*?0=VwD$GinoyZdZy.nIM5uB1l#nGfvA~V0wm&4<})i0}n)-`J72');
define('NONCE_KEY',        '+$> :|)pzt{[f~-#gO:=q~sg2@Sgr]k6HD,8Sq |_UqNo$KwZ(3q7XtMN##;`%KL');
define('AUTH_SALT',        'q`P y;}Q)!OIJKK/Gc_FS>f!,#0#fI|sROyPJ}Kk@a*@h<_1%Tru<QNT-Y^`S?NR');
define('SECURE_AUTH_SALT', 'KBBfGX-(D2VTh8Q/0xI,X/V[1HLb>|^yV]+6sf*ZvkM6Jnzjx5ZvTx@,~cryS#;^');
define('LOGGED_IN_SALT',   'SD|LjKVw~aQ`KsdB,iDrm.?^!Mb`qa8RCJ>OcTfS :Xdkk=1D>@dE1er4Jfm4U/T');
define('NONCE_SALT',       's!uQSGA|a /+PE J#s>+g!{0&1-1:/MA=p<2UP)-(xllqie_jE<}~J,[AM~Y@tM*');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 * verschiedene WordPress-Installationen betreiben.
 * Bitte verwende nur Zahlen, Buchstaben und Unterstriche!
 */
$table_prefix  = 'bwpg_';

/**
 * Für Entwickler: Der WordPress-Debug-Modus.
 *
 * Setze den Wert auf „true“, um bei der Entwicklung Warnungen und Fehler-Meldungen angezeigt zu bekommen.
 * Plugin- und Theme-Entwicklern wird nachdrücklich empfohlen, WP_DEBUG
 * in ihrer Entwicklungsumgebung zu verwenden.
 *
 * Besuche den Codex, um mehr Informationen über andere Konstanten zu finden,
 * die zum Debuggen genutzt werden können.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß beim Bloggen. */
/* That's all, stop editing! Happy blogging. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once(ABSPATH . 'wp-settings.php');

/**
 * Variable zum An- und Abschalten der Template-Names
 */
define('TEMPLATE_PATH', true);
