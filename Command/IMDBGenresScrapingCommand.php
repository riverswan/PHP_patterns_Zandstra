<?php declare(strict_types=1);


namespace app\Command;


class IMDBGenresScrapingCommand extends WebScrapingCommand {
	public function __construct() {
		$this->url = "https://www.imdb.com/feature/genre/";
	}

	public function parse($html): void {
		preg_match_all("|href=\"(https://www.imdb.com/search/title\?genres=.*?)\"|", $html, $matches);
		echo "IMDBGenresScrapingCommand: Discovered " . count($matches[1]) . " genres.\n";

		foreach ($matches[1] as $genre) {
			Queue::get()->add(new IMDBGenrePageScrapingCommand($genre));
		}
	}
}