<?php
/**
 * Grundeinstellungen für WordPress
 *
 * Diese Datei wird zur Erstellung der wp-config.php verwendet.
 * Du musst aber dafür nicht das Installationsskript verwenden.
 * Stattdessen kannst du auch diese Datei als „wp-config.php“ mit
 * deinen Zugangsdaten für die Datenbank abspeichern.
 *
 * Diese Datei beinhaltet diese Einstellungen:
 *
 * * Datenbank-Zugangsdaten,
 * * Tabellenpräfix,
 * * Sicherheitsschlüssel
 * * und ABSPATH.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Datenbank-Einstellungen - Diese Zugangsdaten bekommst du von deinem Webhoster. ** //
/**
 * Ersetze datenbankname_hier_einfuegen
 * mit dem Namen der Datenbank, die du verwenden möchtest.
 */
define( 'DB_NAME', 'EDL_DB' );

/**
 * Ersetze benutzername_hier_einfuegen
 * mit deinem Datenbank-Benutzernamen.
 */
define( 'DB_USER', 'edl_admin' );

/**
 * Ersetze passwort_hier_einfuegen mit deinem Datenbank-Passwort.
 */
define( 'DB_PASSWORD', '' );

/**
 * Ersetze localhost mit der Datenbank-Serveradresse.
 */
define( 'DB_HOST', 'localhost' );

/**
 * Der Datenbankzeichensatz, der beim Erstellen der
 * Datenbanktabellen verwendet werden soll
 */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Der Collate-Type sollte nicht geändert werden.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden untenstehenden Platzhaltertext in eine beliebige,
 * möglichst einmalig genutzte Zeichenkette.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle Schlüssel generieren lassen.
 *
 * Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten
 * Benutzer müssen sich danach erneut anmelden.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|g0?..yV]{=OZ%_j[EK&~D^Tc)[{T>+nq/uqbordm%&&KG(ER8KA*3>P;1hGO<::' );
define( 'SECURE_AUTH_KEY',  'qkMp:XlWF3v|d:._{29!#P@tzAa;FF+2.](,gAeEhi}M9GL>a$e+`BZ2<Uv=>^F]' );
define( 'LOGGED_IN_KEY',    'IU&V<_+sIc*uB4Wx?BU)[i%1n>f7y-%9|8m3T:?k`R9RQ}ge?iu3Cod%8?H*<ch9' );
define( 'NONCE_KEY',        'uc8J&FlKjh_CjJ.U+P nID|YNl6u3SJiIFHOIE!nGV<szDhi[C1zM<b,:(s*VmRs' );
define( 'AUTH_SALT',        'dmvc$+X$#vzN0H_,1E~Xu]${=Z7xYtR[9lQ+FG~<j;: n)ZUc8H,A(=_2hZ-HlVK' );
define( 'SECURE_AUTH_SALT', '-@j&w,7v_/]_Z@<ZMDY:DYzj@l<jCYd#j/HD#X#:jy(%W ~ufN!TKmVhzZ9]3JrE' );
define( 'LOGGED_IN_SALT',   'd#JSgVT*R``#/}el.1Gcd]2xpPo-V-aVCyHGpJEqY-Af0;C?%J=w+68$!%NpO I&' );
define( 'NONCE_SALT',       ',8&ITbA_eP0W^sb}mGNRb~%lzGnp5AR0>p*8:%!0Te+!=nZNZ L!l/sH0[=nl!Tu' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 * Du kannst mehrere Installationen in einer Datenbank haben, wenn du
 * für jede einen eindeutigen Präfix benutzt. Bitte verwende nur Zahlen,
 * Buchstaben und Unterstriche!
 *
 * Bei der Installation werden die Datenbanktabellen mit dem angegebenen
 * Präfix erstellt. Wenn der Wert geändert wird, nachdem WordPress installiert
 * wurde, wird deine Website denken, dass WordPress nicht installiert ist.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Füge individuelle Werte zwischen dieser Zeile und der „Schluss mit dem Bearbeiten“ Zeile ein. */



/* Das war’s, Schluss mit dem Bearbeiten! Viel Spaß. */
/* That's all, stop editing! Happy publishing. */

/** Der absolute Pfad zum WordPress-Verzeichnis. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Definiert WordPress-Variablen und fügt Dateien ein.  */
require_once ABSPATH . 'wp-settings.php';
