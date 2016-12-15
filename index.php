<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/JokeGenerator.php';

$jokeApi = new JokeGenerator();
echo "<p>{$jokeApi -> randomJoke()}</p>\n";

echo "<h2>All jokes:</h2>";

foreach($jokeApi->getAllJokes() as $joke) {
	echo "<p>{$joke} </p>";
}

