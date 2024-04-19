<?php


class TVserie extends Production
{
    public function __construct($title, $language, $vote, Genre $genre, $image, public string $season)
    {
        parent::__construct($title, $language, $vote, $genre, $image);

        $this->season = $season;
    }
}
