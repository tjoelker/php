<?php

namespace Classes;

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