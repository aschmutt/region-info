# Region-Info
Das ist ein OpenSource Projekt, um eine Webseite für eine Gemeinde, Dorf oder ähnliches aufzusetzen. 
Die Demoseite läuft unter: http://demo.gessertshausen-info.de/ 

Diese Seite ist während der Corona Pandemie entstanden, um die Leute über aktuelle Entwicklung zu informieren.

### Installation

Benötigt wird ein Webserver mit php Unterstützung, Version php 7.2 oder höher

* Auf git kann man die Dateien herunterladen: https://github.com/aschmutt/region-info
  * rechts oben der Button "Clone or download" bietet verschiedene Download Möglichkeiten an

* diese Ordner auf den Server hochladen: `htdocs`, `vendor` 

* die Startseite ist unter: `htdocs/index.php`

#### Inhalte bearbeiten 

Jetzt kann man einfach die vorhandenen Inhalte kopieren und bearbeiten, sie liegen unter `htdocs/Templates` 

#### Bootstrap: vorgefertigte HTML Bausteine

Die HTML Elemente sind mit Bootstrap gemacht. Das ist wie ein Baukasten für vorgefertigte HTML Elemente, wie Buttons und Boxen. 
Damit kann man ohne große CSS Aufwände schöne Inhaltselemente erstellen. 

Beispielsweise ist hier das Card Element, das überall verwendet wurde: https://getbootstrap.com/docs/4.4/components/card/

Und damit die Inhalte auch am Handy schön umbrechen, ist auch ein Grid System beinhaltet. 
Hier ist ein gutes Tutorial dazu: https://www.w3schools.com/bootstrap4/bootstrap_grid_system.asp

#### Twig: für wiederverwendbare Blöcke

Elemente die mehrfach verwendet werden, sind unter `htdocs/Templates/Partials`  

Diese werden dann eingebunden über ein Include:
`{{ include('Partials/nav.twig') }}`

Alles mit geschweiften Klammern sind Twig Funktionen. Mehr über Twig findet man hier: https://twig.symfony.com/

#### Weitergehendes Development

Wer selber damit programmieren will, kann das natürlich tun! Ich habe absichtlich nur die einfachsten Technologien verwendet, 
damit sie jeder ohne Aufwand einsetzen kann. Wer mehr will kann folgendes verwenden: 
 
##### Composer Paketverwaltung

Der Ordner `vendor` wurde von [Composer](https://getcomposer.org/) erzeugt. Das kann man für den Anfang einfach mal so lassen. 
Wenn man Updates braucht oder neue Pakete, kann man das mit den Composer Befehlen machen: 

* `composer install` erzeugt den vendor Ordner neu
* `composer update` akualisiert alle Pakete im vendor Ordner
* `composer require neues-package` fügt "neues-package" hinzu 

##### DDEV: Docker Setup
Wer gerne mit einer lokalen Docker Umgebung arbeitet, kann das DDEV verwenden. 

Mit `ddev start` fahren die Docker Container hoch, die lokale URL wird auf Kommandozeile ausgegeben

Die Konfiguration findet im .ddev Ordner statt

Mehr zu DDEV: https://ddev.readthedocs.io/en/stable/


### License
This site is published unter GPLv3 - see /htdocs/License.html

                  
