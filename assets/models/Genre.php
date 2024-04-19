<?php

class Genre
{
    public function __construct(public string $name, public string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function getName()
    {
        return $this->name;
        return $this->description;
    }
};
