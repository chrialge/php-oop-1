<?php


/**
 * Movie Class
 * @author Christian Algieri
 * @copyright 2024 Christian Algieri
 * @license MIT
 */
class Movie extends Production
{
    // funzione che costruisce i valori che ci hanno passato
    public function __construct($title, $language, $vote,  Genre $genre, $image, public int $profits, public $time)
    {
        // essa prende la funzione construct del genitore e gli passa valori
        parent::__construct($title, $language, $vote, $genre, $image);
        // assegno i valori alle istanze
        $this->profits = $profits;
        $this->time = $time;
    }

    // funzione che setta il prezzo
    public function setPrice()
    {
        // formatto il valore di profitto
        $this->profits = number_format($this->profits, 4, '', '.');
    }


    // funzione che setta la durata
    public function setTime()
    {
        // se la durata supera i 60
        if ($this->time >= 60) {
            // variabile hour prende le ore
            $hour = floor($this->time / 60);
            //variabile che prende i minuti
            $minuts = $this->time - ($hour * 60);
            // e assegna all' istanza $time questa stringa
            $this->time = strval($hour) . ' : ' . strval($minuts);
        } //altrimenti
        else {
            // e assegna all' istanza $time questa stringa
            $this->time = '0 : ' . strval($this->time);
        }
    }
}
