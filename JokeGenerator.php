<?php

class JokeGenerator {

	private $client;
	private $jokesList;

	public function __construct() {
		$this->client = new \GuzzleHttp\Client(); 
		$res = $this->client->request('GET', 'http://v-ie.uek.krakow.pl/~s187443/list');
		$this->jokesList = json_decode($res -> getBody());
	}

	public function randomJoke() {
		$jokesListSize = count($this->jokesList);
		return $this->jokesList[rand(0, $jokesListSize - 1)] -> content;
	}

	public function getAllJokes() {
		$jokes = [];
		foreach($this->jokesList as $joke) {
			array_push($jokes, $joke->content);
		}
		
		return $jokes;
	}
	
}
