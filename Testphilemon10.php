<?php

// Load the Composer autoload file
require_once 'vendor/autoload.php';

// Include API library
use NklKst\TheSportsDb\Client\ClientFactory;

// Create a client
$client = ClientFactory::create();

// Get all sport categories
$sports = $client->list()->sports();
for ($i = 0; $i < count($sports); $i++) {
    echo $sports[$i]->idSport . " " .  $sports[$i]->strSport . "\n";
}
$sportID = readline("Welche Sportart möchtest du dir ansehen?\n");
// Loop again to store user choice
for ($i = 0; $i < count($sports); $i++) {
    if ($sports[$i]->idSport == $sportID) {
        $userChoice['sport'] = $sports[$i];
    }
}

// Get all leagues
$leages = $client->list()->leagues();
// {"idLeague":"4328","strLeague":"English Premier League","strSport":"Soccer","strLeagueAlternate":"Premier League"}
// So i can use strSport to match user choice

for ($i = 0; $i < count($leages); $i++) {
    if ($leages[$i]->strSport == $userChoice['sport']->strSport) {
        echo $leages[$i]->idLeague . " " .  $leages[$i]->strLeague . "\n";
    }
}
$leageID = readline("Welche Liga möchtest du dir ansehen?\n");


//Get all Teams

$teams = $client->list()->teams($leageID);

//print_r ($teams);

for ($i = 0; $i < count($teams); $i++) {
    // $ttt = $teams[$i];
    // print_r ($ttt);
//    if ($teams[$i]->strTeams == $userChoice['sport']->strTeams) {
//    if ($teams[$i]->strTeams == $userChoice['sport']->strTeams) {
        echo $teams[$i]->idTeam . " " . $teams[$i]->strTeam . "\n";
//    }
}

$teamID = readline("Welches Team möchtest du dir ansehen?");


$events = $client->lookup()->results($teamID);

print_r ($events);

for ($i = 0; $i < count($events); $i++) {
    echo $events[$i]->idEvent . " " . $events[$i]->strEvent . "\n";
}

$eventID = readline("Dies ist das aktuelle Resultat:");