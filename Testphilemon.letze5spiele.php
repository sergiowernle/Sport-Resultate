<?php

// Composer Autoload-Datei
require_once 'vendor/autoload.php';

// API Bibliothek hinzufügen
use NklKst\TheSportsDb\Client\ClientFactory;

// Einen Client erstellen
$client = ClientFactory::create();

//Sportarten anzeigen
$sports = $client->list()->sports();
for ($i = 0; $i < count($sports); $i++) {
    echo $sports[$i]->idSport . " " .  $sports[$i]->strSport . "\n";
}
$sportID = readline("Welche Sportart möchtest du dir ansehen?\n");
//Wahl anzeigen
for ($i = 0; $i < count($sports); $i++) {
    if ($sports[$i]->idSport == $sportID) {
        $userChoice['sport'] = $sports[$i];
    }
}

// Ligen anzeigen
$leages = $client->list()->leagues();
// {"idLeague":"4328","strLeague":"English Premier League","strSport":"Soccer","strLeagueAlternate":"Premier League"}
// Mit strSport eine Wahl erstellen

for ($i = 0; $i < count($leages); $i++) {
    if ($leages[$i]->strSport == $userChoice['sport']->strSport) {
        echo $leages[$i]->idLeague . " " .  $leages[$i]->strLeague . "\n";
    }
}
$leageID = readline("Welche Liga möchtest du dir ansehen?\n");


// Alle Teams der bestimmten Liga anzeigen

$teams = $client->list()->teams($leageID);

//print_r ($teams);

for ($i = 0; $i < count($teams); $i++) {
    // $ttt = $teams[$i];
    // print_r ($ttt);
        echo $teams[$i]->idTeam . " " . $teams[$i]->strTeam . "\n";

//    }
}

//Team hinzufügen
$teamID = readline("Welches Team möchtest du dir ansehen?");

$events = $client->schedule()->teamLast($teamID);

print_r ($events);

for ($i = 0; $i < count($events); $i++) {
    echo $events[$i]->idHomeTeam . " " . $events[$i]->strEvent . "\n";
    echo $events[$i]->intHomeScore.":" . $events[$i]->intAwayScore ."\n";
}


$eventID = readline("Dies sind die letzten Events!");