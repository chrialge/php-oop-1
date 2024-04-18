<?php


class Production
{
    public $genre;
    // creouna funzione di costrutto dove prendo i parametri e li inserisco dell'istanta con la sua key

    function __construct(public string $title, public string $language, public int $vote, genre $genre, public string $image)
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
        $this->genre = $genre;
        $this->image = $image;
    }
}
