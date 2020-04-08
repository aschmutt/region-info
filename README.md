#Region-Info
Das ist ein OpenSource Projekt, um eine Webseite für eine Gemeinde, Dorf oder ähnliches aufzusetzen. 
Diese Seite ist während der Corona Pandemie entstanden, um die Leute über aktuelle Entwicklung zu informieren.

### Installation

Benötigt wird ein Webserver mit php Unterstützung, Version php 7.2 oder höher

* Den master branch von git herunterladen: https://github.com/aschmutt/region-info
  * der Button "Clone or download" bietet verschiedene Download Möglichkeiten an

* diese Ordner auf den Server hochladen: `htdocs`, `vendor` (der vendor Ordner ist recht groß, das kann etwas dauern)

* die Startseite ist: `htdocs/index.php` 

Jetzt kann man einfach die vorhandenen Inhalte kopieren und bearbeiten, sie liegen unter `htdocs/Templates` 

Die HTML Elemente sind mit Bootstrap gemacht. Damit kann man ohne große CSS Aufwände schöne Inhaltselemente erstellen. 

Beispielsweise ist das ein Card Element, das überall verwendet wurde: https://getbootstrap.com/docs/4.4/components/card/

Und damit die Inhalte auch am Handy gut aussehen, gibt es das Grid System. Hier ist ein gutes Tutorial dazu: https://www.w3schools.com/bootstrap4/bootstrap_grid_system.asp

Die Navigation und mehrfach verwendete Elemente findet man unter `htdocs/Templates/Partials` 

Diese werden dann eingebunden über ein Include: `{{ include('Partials/categories.twig') }}`

Alles mit geschweiften Klammern sind Twig Funktionen. Mehr über Twig findet man hier: https://twig.symfony.com/

### Development

Wer selber damit programmieren will, kann das tun: 

* Der Ordner `vendor` wurde von [Composer](https://getcomposer.org/) erzeugt. Das kann man für den Anfang einfach mal so lassen. 
Wenn man Updates braucht oder neue Pakete, kann man das mit den Composer Befehlen recht einfach tun: 

  * `composer install` erzeugt den vendor Ordner neu
  * `composer update` akualisiert alle Pakete im vendor Ordner
  * `composer require neues-package` fügt "neues-package" hinzu 

* wer gerne mit einer lokalen Docker Umgebung arbeitet, kann das DDEV verwenden. 
Mit `ddev start` fahren die Docker Container hoch, die lokale URL wird auf Kommandozeile ausgegeben
Die Konfiguration findet im .ddev Ordner statt
Mehr zu DDEV: https://ddev.readthedocs.io/en/stable/


### License
This site is published unter GPLv3 - see /htdocs/License.html

                  
