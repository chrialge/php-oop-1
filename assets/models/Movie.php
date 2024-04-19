<?php

class Movie extends Production
{
    public function __construct($title, $language, $vote,  Genre $genre, $image, public int $profits, public $time)
    {
        parent::__construct($title, $language, $vote, $genre, $image);
        $this->profits = $profits;
        $this->time = $time;
    }

    public function setPrice()
    {

        $this->profits = $this->profits;
        $this->profits = number_format($this->profits, 4, '', '.');
    }


    public function setTime()
    {
        if ($this->time >= 60) {
            $hour = floor($this->time / 60);
            $minuts = $this->time - ($hour * 60);
            $this->time = strval($hour) . ' : ' . strval($minuts);
        } else {
            $this->time = '0 : ' . strval($this->time);
        }
    }
}
