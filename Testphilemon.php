<?php

// $Bundesliga = 4331;
// $Superliga = 3507;
//$NHL = 57
//$NationalLeague = 51
//$NBA = 12
//$BBL = 40

$sportID = 0;
$leageID = 0;
$teamID = 0;


// You need to load the Composer autoload file somewhere in your code before
require_once 'vendor/autoload.php';

use NklKst\TheSportsDb\Client\ClientFactory;

// Create a client
$client = ClientFactory::create();
print("Sportauswahl\n");


//Sportart auflisten
$sports = $client->list()->sports();
for($i = 0; $i < count($sports); $i++) {
    echo $sports[$i]->idSport . " " .  $sports[$i]->strSport . "\n";
}
$sportID = readline("Welche Sportart möchtest du dir ansehen?\n");

//Ligen auflisten
$leages = $client->lookup()->league($sportID);
for($i = 0; $i < count($leages); $i++) {
    echo $leages[$i]->idLeague . " " .  $leages[$i]->strLeague . "\n";
}
$leageID = readline ("Welche Liga möchtest du dir ansehen?\n");


//Teams auflisten
$teams = $client->list()->teams();
for($i = 0; $i < count($teams); $i++) {
    echo $teams[$i]->idTeam . " " .  $teams[$i]->strTeam . "\n";
}
$teamID = readline("Welches Team möchtest du dir ansehen?\n");

// print $sportsID;
if ($sportsID != 0) {
    $result = $client->lookup()->sports($sportsID);
    print_r($result);
    if ($result != null) {
        echo $result->strsports . PHP_EOL;
        echo $result->strBanner . PHP_EOL;
    }
}   

// print $leageID;
if ($leageID != 0) {
    $result = $client->lookup()->league($leageID);
    print_r($result);
    if ($result != null) {
        echo $result->strLeague . PHP_EOL;
        echo $result->strBanner . PHP_EOL;
    }
 }
// print $teamID;
if ($teamID != 0) {
    $result = $client->lookup()->teams($teamID);
    print_r($result);
    if ($result != null) {
        echo $result->strTeam . PHP_EOL;
        echo $result->strBanner . PHP_EOL;
    }
}   