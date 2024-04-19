<?php

/**
 * Tvserie Class
 * @author Christian Algieri
 * @copyright 2024 Christian Algieri
 * @license MIT
 */
class TVserie extends Production
{
    // funzione che costruisce le istanze 
    public function __construct($title, $language, $vote, Genre $genre, $image, public string $season)
    {
        // essa prende la funzione construct del genitore e gli passa valori
        parent::__construct($title, $language, $vote, $genre, $image);

        // assegna il valore di season all'istanza
        $this->season = $season;
    }
}
