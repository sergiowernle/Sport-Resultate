# Sport-Resultate

## Unser Projekt:
Das Ziel in unserem Projekt ist es, ein Funktionsfähiges Programm zu erstellen, welches Resultate von verschiedenen Sportarten anzeigt. Die Resultate sollen natürlich aktuell sein. Am Anfang beschränken wir uns auf Fussball, Eishockey und Basketball. Jedoch wird die Zeit eventuell noch reichen für weitere. Dazu wollen wir es so machen, dass man in den Verschiedenen Sportarten die Resultate verschiedener Ligen anschauen kann.

S(Spezifisch): Am Schluss unseres Projekts, wollen wir gerne ein funktionierendes Programm, das uns mithilfe unserer API Sportresultate oder Infos zu Ligen und Clubs liefern kann.

M(Messbar): Unser Ziel ist es, mindestens 3 Sportarten auflisten und gewisse Ligen und Teams auflisten zu können. Dabei sollten mindestens 2 Ligen jeder Sportarten und alle Teams in dessen Ligen angezeigt werden. Natürlich mit den aktuellen Resultaten der jeweiligen spielen. 

A(Attraktiv): Der Vorteil an unserem Projekt ist es, dass man ohne grosse Umstände, die Resultate seines Lieblingsteam abzurufen und deren Infos. In unserem Programm ist es      überhaupt nicht kompliziert die richtige Liga oder das richtige Team zu finden. Das Projekt soll unkompliziert und leicht zu verstehen sein.

R(Realistisch): Unser Ziel ist sehr realistisch formuliert und wir sind zuverlässig, dass wir dieses Projekt gut abschliessen werden. Ich würde sogar soweit gehen, dass wir noch mehr Sportarten und Ligen auflisten könnten, wenn wir die API richtig verstehen. Jedoch möchte ich dies noch nicht sagen.

T(Terminiert): Unser ProJekt soll am Freitag, den 15.10.21 abgeschlossen sein. Dazu gehören alle Abgaben zu erledigen und unser Programm den anderen vorzustellen.

Teamkodex: In unserem Team wird Respekt gross geschriben. Wir gehen miteinander freundlich und höflich um und hören einander immer zu. Wen es Fragen gibt, versuchen wir einander zu helfen damit man das Problem gemeinsam lösen kann. Es gibt keine schlechten Fragen. In unserem Team werden die Aufgaben fair aufgeteilt und wir beachten Wünsche von Teamkollegen. Ebenfalls achten wir darauf, dass andere Mitarbeiter effizient arbeiten können. Dies machen wir, indem wir nicht zu laut sind und die anderen nicht ablenken oder stören. 
Nur so ist ein vernünftiges Arbeitsklima möglich.

### Unsere API:
Unsere API hat den Namen TheSportsDB und beinhaltet genau die Befehle und Funktionen die wir brauchen, mit ihr können wir die Live Resultate von TheSportsDB abrufen und in unser Projekt einfügen. Im ReadME wird vieles der Funktionene beschrieben, genauere Details findet man unter (Code/Vendor/(nkl-kst/the-sports-db)/src/Client) dort stehen die groben funktionen beschrieben weitere kleine wichtige Funktionen sind unter (Code/Vendor/(nkl-kst/the-sports-db)/src/Client/Endpoint)
Link API: https://www.thesportsdb.com/

### Beispiel wie unsere API funktioniert:

```php
<?php


phpinfo();


exit;


// You need to load the Composer autoload file somewhere in your code before
require_once 'vendor/autoload.php';

use NklKst\TheSportsDb\Client\ClientFactory;


// Create a client
$client = ClientFactory::create();


// Get soccer livescores
$livescores = $client->livescore()->now('Soccer');
echo $livescores[0]->strProgress;


// Get video highlights
$highlights = $client->highlight()->latest();
echo $highlights[0]->strVideo;


// Get next events for Liverpool FC
$events = $client->schedule()->teamNext(133602);
echo $events[0]->strEvent;
```

https://user-images.githubusercontent.com/89902698/136927134-7d03257b-ea38-451e-8107-6233be7902b6.png


https://user-images.githubusercontent.com/89902676/136811820-e4609a91-f716-437a-a22d-87408dbe5c60.png


Mitglieder: Philemon und Sergio
