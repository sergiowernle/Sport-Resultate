<?php

// Composer Autoload-Datei
require_once 'vendor/autoload.php';

// API Bibliothek hinzufügen
use NklKst\TheSportsDb\Client\ClientFactory;

// Einen Client erstellen
$client = ClientFactory::create();

// Sportkategorien erstellen
$sports = $client->list()->sports();
for ($i = 0; $i < count($sports); $i++) {
    echo $sports[$i]->idSport . " " .  $sports[$i]->strSport . "\n";
}
$sportID = readline("Welche Sportart möchtest du dir ansehen?\n");
// Loop für Sport auswahl
for ($i = 0; $i < count($sports); $i++) {
    if ($sports[$i]->idSport == $sportID) 
    {
        $userChoice['sport'] = $sports[$i];
    }
}

// Alle Ligen auflisten
$leages = $client->list()->leagues();
// {"idLeague":"4328","strLeague":"English Premier League","strSport":"Soccer","strLeagueAlternate":"Premier League"}
// So i can use strSport to match user choice

for ($i = 0; $i < count($leages); $i++) {
    if ($leages[$i]->strSport == $userChoice['sport']->strSport) {
        echo $leages[$i]->idLeague . " " .  $leages[$i]->strLeague . "\n";
    }
}
$leageID = readline("Welche Liga möchtest du dir ansehen?\n");


//Alle Teams auflisten
$teams = $client->list()->teams($leageID);

// print_r ($teams);
for ($i = 0; $i < count($teams); $i++) {
    print_r ($teams);
    $ttt = $teams[$i];
        echo $teams[$i]->idTeam . " " . $teams[$i]->strTeam . "\n";
        // echo $events[$i]->strTeam.":" . $events[$i]->strLeague ."\n";
        // echo $events[$i]->strTeamShort.":" . $events[$i]->strAlternate ."\n";
        // echo $events[$i]->intFormedYear.":" . $events[$i]->strSport ."\n";


}



// $events = $client->lookup()->results($teamID);

// print_r ($events);

// for ($i = 0; $i < count($events); $i++) {
//     echo $events[$i]->idEvent . " " . $events[$i]->strEvent . "\n";
// }

$teamID = readline("Dies sind alle Teams und deren Infos aus derf ausgewählten Liga!");