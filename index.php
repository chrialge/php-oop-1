<?php

class Production
{


    function __construct(public string $title, public string $language, public int $vote)
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
    }
}

$hammer = new Production("Hammer", "eng", rand(1, 10));
// $hammer->title = "Hammer";
// $hammer->language = "eng";
// $hammer->vote = rand(1, 10);
echo $hammer->title;
var_dump($hammer);

$sword = new Production("sword", "it", rand(1, 10));

var_dump($sword);
