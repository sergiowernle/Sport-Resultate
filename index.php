<?php

// You need to load the Composer autoload file somewhere in your code before
require_once 'vendor/autoload.php';

use NklKst\TheSportsDb\Client\ClientFactory;

// Create a client
$client = ClientFactory::create();

$arsenal = $client->search("Arsenal");
print_r($arsenal);

// $arsenal = $client->lookup()->league("3507");
// print_r($client-lookup());

// echo $arsenal->strLeague . PHP_EOL;
// echo $arsenal->strBanner . PHP_EOL;

// printf("<h1>%s</h1>", $arsenal->strLeague);
// printf("<img src='%s'/>", $arsenal->strBanner);

// // Get soccer livescores
// $livescores = $client->livescore()->now('Soccer');
// echo $livescores[0]->strProgress;

// // Get video highlights
// $highlights = $client->highlight()->latest();
// echo $highlights[0]->strVideo;

// // Get next events for Liverpool FC
// $events = $client->schedule()->teamNext(133602);
// echo $events[0]->strEvent;