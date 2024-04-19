<?php


class Production
{
    public $genre;
    public $title;
    public $language;
    public $vote;
    public $image;
    // creouna funzione di costrutto dove prendo i parametri e li inserisco dell'istanta con la sua key

    function __construct(string $title, string $language, int $vote, Genre $genre, string $image)
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
        $this->genre = $genre;
        $this->image = $image;
    }
}
