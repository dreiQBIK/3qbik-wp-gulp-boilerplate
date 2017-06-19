<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dreiQbik
 */

get_header(); ?>

	<?php if ( TEMPLATE_PATH ): ?>
		<p class="h-file-path"><span class="h-file-path--highlight">Datei-Info:&nbsp;</span>page.php</p>
	<?php endif ?>

	<main class="site__main">

		<section class="container container--imprint">
			<div class="container--inner">

				<h1 class="heading-1"><?php the_title(); ?></h1>

				<p class="text">Bappert, Holzhäuer, Schleifer GbR</p>

				<h3 class="heading-3">vertretungsberechtigte Gesellschafter:</h3>
				<p class="text">Moritz Bappert, Joscha Holzhäuer und Lennart Schleifer</p>

				<h3 class="heading-3">Kontakt:</h3>
				<address>
					<span class="text">Alter Schlachthof 39 // E4</span><br>
					<span class="text">76131 Karlsruhe</span>
				</address>
				<p class="text">+49 (0) 721 14581260</p>
				<a href="mailto:kontakt@dreiqbik.de" class="link link--inline">kontakt@dreiqbik.de</a>

				<h3 class="heading-3">Umsatzsteuer-Identifikationsnummer gem. § 27 a Umsatzsteuergesetz:</h3>
				<p class="text">DE305625650</p>

				<h3 class="heading-3">Verantwortliche i.S.d. § 55 Abs. 2 RStV:</h3>
				<p class="text">Moritz Bappert, Joscha Holzhäuer und Lennart Schleifer</p>

			</div>
		</section>

		<section class="container container--imprint">
			<div class="container--inner">

				<h2 class="heading-2">Haftungsausschluss</h2>

				<h3 class="heading-3">Haftung für Inhalte</h3>
				<p class="text">Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt. Eine diesbezügliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung möglich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p>

				<h3 class="heading-3">Haftung für Links</h3>
				<p class="text">Unser Angebot enthält Links zu externen Webseiten Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf mögliche Rechtsverstöße überprüft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar. Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.</p>

				<h3 class="heading-3">Urheberrecht</h3>
				<p class="text">Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur für den privaten, nicht kommerziellen Gebrauch gestattet. Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.</p>

			</div>
		</section>

		<section class="container container--imprint">
			<div class="container--inner">

				<h2 class="heading-2">Datenschutzerklärung</h2>

				<h3 class="heading-3">Datenschutz</h3>
				<p class="text">Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Datenschutzvorschriften sowie dieser Datenschutzerklärung. Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder E-Mail-Adressen) erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis. Diese Daten werden ohne Ihre ausdrückliche Zustimmung nicht an Dritte weitergegeben. Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich.</p>

				<h3 class="heading-3">Google Fonts</h3>
				<p class="text">Diese Website bindet externe Schriften von Google Fonts ein. Google Fonts ist ein Dienst der Firma Google Inc. (USA). Die Einbindung der Schriften erfolgt durch einen Serveraufruf bei Google in den USA, wobei davon auszugehen ist, dass Anfragen durch Google gespeichert werden.</p>
				<p class="text">Nähere Informationen dazu können Sie dem Google Fonts FAQ <a href="https://developers.google.com/fonts/faq#what-does-using-the-google-fonts-api-mean-for-the-privacy-of-my-users" class="link link--inline">hier</a> bzw. den Google Datenschutzhinweisen <a href="https://www.google.de/intl/de/policies/" class="link link--inline">hier</a> entnehmen.</p>

				<h3 class="heading-3">Datenschutzerklärung für die Nutzung von Google Analytics</h3>
				<p class="text">Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. („Google“). Google Analytics verwendet sog. „Cookies“, Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglichen. Die durch das Cookie erzeugten Informationen über Ihre Benutzung dieser Website werden in der Regel an einen Server von Google in den USA übertragen und dort gespeichert. Im Falle der Aktivierung der IP-Anonymisierung auf dieser Website, wird Ihre IP-Adresse von Google jedoch innerhalb von Mitgliedstaaten der Europäischen Union oder in anderen Vertragsstaaten des Abkommens über den Europäischen Wirtschaftsraum zuvor gekürzt. Nur in Ausnahmefällen wird die volle IP-Adresse an einen Server von Google in den USA übertragen und dort gekürzt. Im Auftrag des Betreibers dieser Website wird Google diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen gegenüber dem Websitebetreiber zu erbringen. Die im Rahmen von Google Analytics von Ihrem Browser übermittelte IP-Adresse wird nicht mit anderen Daten von Google zusammengeführt. Sie können die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website vollumfänglich werden nutzen können. Sie können darüber hinaus die Erfassung der durch das Cookie erzeugten und auf Ihre Nutzung der Website bezogenen Daten (inkl. Ihrer IP-Adresse) an Google sowie die Verarbeitung dieser Daten durch Google verhindern, indem Sie <a href="http://tools.google.com/dlpage/gaoptout?hl=de" class="link link--inline">hier</a> das verfügbare Browser-Plugin herunterladen und installieren.</p>

			</div>
		</section>

	</main>

<?php
get_footer();
