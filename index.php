<?php

require 'functions.php';
require 'router.php';

// 101 Classes:

class Release 
{
	public ?int $year;
	public ?string $title;
	public ?string $artist;
	public ?array $tracklist;

	public function createTable(): void
	{
		echo "<table data-album=\"{$this->title}\">";
		echo "<tr><th>Artist</th><td>{$this->artist}</td></tr>";
		echo "<tr><th>Title</th><td>{$this->title}</td></tr>";
		echo "<tr><th>Year</th><td>{$this->year}</td></tr>";
		echo "<tr><th>Tracklist</th><td>";
		echo self::printTracklist($this->tracklist);
		echo "</td></tr>";
		echo "</table>";
	}

	private function printTracklist(array $list): void
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

// Connect to MySQL database:

$DSN = 'mysql:host=localhost;port=3306;dbname=php;charset=utf8mb4';
$PDO = new PDO($DSN, 'root');

$STATEMENT = $PDO->prepare('SELECT * FROM core');
$STATEMENT->execute();

$POSTS = $STATEMENT->fetchAll(PDO::FETCH_ASSOC);

try {
	if ($POSTS) {
		throw new Exception('MySQL connection succesfull! Loading data: ');
	}
} catch (Exception $e) {
	echo $e . "\n";
	pre_dump($POSTS);
}

