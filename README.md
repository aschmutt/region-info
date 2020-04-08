#Region-Info
Das ist ein OpenSource Projekt, um eine Webseite für eine Gemeinde, Dorf oder ähnliches aufzusetzen. 
Diese Seite ist während der Corona Pandemie entstanden, um die Leute über aktuelle Entwicklung zu informieren.

### Installation

Benötigt wird ein Webserver mit php Unterstützung, Version php 7.2 oder höher

* Den master branch von git herunterladen: https://github.com/aschmutt/region-info
  * der Button "Clone or download" bietet verschiedene Download Möglichkeiten an

* diese Ordner auf den Server hochladen: `htdocs`, `vendor` (der vendor Ordner ist recht groß, das kann etwas dauern)
* die Startseite ist: `htdocs/index.php` 

### Development

Wer selber programmieren will, kann das tun: 

* Der Ordner `vendor` wurde von [Composer](https://getcomposer.org/) erzeugt. Das kann man für den Anfang einfach mal so lassen. 
Wenn man Updates braucht oder neue Pakete, kann man das mit den Composer Befehlen recht einfach tun: 

  * `composer install` erzeugt den vendor Ordner neu
  * `composer update` akualisiert alle Pakete im vendor Ordner
  * `composer require neues-package` fügt "neues-package" hinzu 

* Bootstrap Version4 for Frontend https://getbootstrap.com/
* Twig for Templates https://twig.symfony.com/
* ddev für eine lokale Docker Umgebung




### Welche Tools brauche ich dafür? 





### License
This site is published unter GPLv3 - see /htdocs/License.html

It is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.                       
