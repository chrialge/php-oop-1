<?php


/**
 * Genre Class
 * @author Christian Algieri
 * @copyright 2024 Christian Algieri
 * @license MIT
 */

class Genre
{
    // funzione che costruisce le istanze con i valori che ci passano
    public function __construct(public string $name, public string $description)
    {
        // assegno i valori alle istanze
        $this->name = $name;
        $this->description = $description;
    }

    // funzzione che rida le istanze
    public function getName()
    {
        // faccio ritornare i valori che gliabbiamo assegnato
        return $this->name;
        return $this->description;
    }
};
