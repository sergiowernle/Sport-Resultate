<?php

print("Sportauswahl\n");
print("
Fussball\n
Eishockey\n
Basketball\n
Tennis\n");
$module = readline("Welche Sportart möchtest du? "); 
switch ($module) {
    case 'Fussball':
        print ("Sie haben sich für Fussball entschieden!\n");
        break;
    case "Eishockey":
        print("Sie haben sich für Eishockey entschieden!\n");
        break;
    case "Basketball":
        print ("Sie haben sich für Basketball entschieden!\n");
        break;
    case "Tennis":
        print ("Sie haben sich für Tennis entschieden!\n");
        break;
    default:
        print("Diese Sportart gibt es leider nicht!\n");
    }