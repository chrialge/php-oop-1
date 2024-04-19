<?php


/**
 * Production Class
 * @author Christian Algieri
 * @copyright 2024 Christian Algieri
 * @license MIT
 */

class Production
{
    // dichiaro le istanze
    public $genre;
    public $title;
    public $language;
    public $vote;
    public $image;
    // creouna funzione di costrutto dove prendo i parametri e li inserisco dell'istanta con la sua key

    function __construct(string $title, string $language, int $vote, Genre $genre, string $image)
    {
        // assegno i valori alle istanze
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
        $this->genre = $genre;
        $this->image = $image;
    }
}
