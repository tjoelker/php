<?php

require 'functions.php';
require 'router.php';

pre_dump($_SERVER['REQUEST_URI']);

// Connect to MySQL database:

class Release 
{
	public ?int $year;
	public ?string $title;
	public ?string $artist;
	public ?array $tracklist;

	public function createTable(): void
	{
		echo "<table>";
		echo "<tr><th>Artist</th><td>{$this->artist}</td></tr>";
		echo "<tr><th>Title</th><td>{$this->title}</td></tr>";
		echo "<tr><th>Year</th><td>{$this->year}</td></tr>";
		echo "<tr><th>Tracklist</th><td>";
		echo self::printTracklist($this->tracklist);
		echo "</td></tr>";
		echo "</table>";
	}

	private function printTracklist($list): void
	{
		echo "<ol>";
		foreach ($list as $title) {
			echo "<li>{$title}</li>";
		}
		echo "</ol>";
	}
}

$album = new Release;
$album->year = 2018;
$album->title = 'Portrait with Firewood';
$album->artist = 'DjRUM';
$album->tracklist = [
	'Unblocked',
	'Waters Rising (feat. Lola Empire)',
	'Creature Pt. 1',
	'Creature Pt. 2',
	'Sex',
	'Blue Violet',
	'Sparrows (feat. Lola Empire)',
	'Showreel Pt. 3',
	'Blood In My Mouth',
];

$album->createTable();
