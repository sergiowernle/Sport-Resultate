<?php

$Bundesliga = 3510;
$Superliga = 3507;
//$NHL = 57
//$NationalLeague = 51
//$NBA = 12
//$BBL = 40

$leageID = 0;



// You need to load the Composer autoload file somewhere in your code before
require_once 'vendor/autoload.php';

use NklKst\TheSportsDb\Client\ClientFactory;

// Create a client
$client = ClientFactory::create();


//Sportart wählen
print("Sportauswahl\n");
print("
Fussball\n
Eishockey\n
Basketball\n
Tennis\n");
$module = readline("Welche Sportart möchtest du?");

//Fussball
switch ($module) {
    case "Fussball":
        print ("Sie haben sich für Fussball entschieden!\n");
        // for($x = 2; $x >= 0; $x--);
        // if ($module == "Fussball") {
            print(" Wähle die Kategorie \n
            Superliga\n
            Bundesliga\n");
            $module = readline("Welche Liga möchtest du?\n");
            if ($module == "Superliga"){
                print("Sie haben sich für die Superliga entschieden!\n");
                $leageID = $Superliga;
             } elseif ($module == "Bundesliga"){
                print("Sie haben sich für die Bundesliga entschieden!\n");
                $leageID = $Bundesliga;
            }
        //Basketball
        break;
    case "Basketball";{
            print("
                NBA\n
                BBL\n");
        readline("Welche Liga möchtest du?\n");
            break;
            print("Diese Liga gibt es leider nicht!\n");
    }
        //Eishockey
            break;
            case "Eishockey";{
                print("
                    NHL\n
                    NationalLeague\n");
                        readline("Welche Liga möchtest du?\n");
                        break;
                        print("Diese Liga gibt es leider nicht!\n");
    }
}

// print $leageID;
if ($leageID != 0) {
    $result = $client->lookup()->league($leageID);
    print_r($result);

    echo $result->strLeague . PHP_EOL;
    echo $result->strBanner . PHP_EOL;

    // printf("<h1>%s</h1>", $result->strLeague);
    // printf("<img src='%s'/>", $result->strBanner);
}