<?php

class SpeedHeightRatio
{

    public $speed;
    public $height;

    function __construct($speed, $height)
    {
        $this->speed = $speed;
        $this->height = $height;
    }

    function computeRatio()
    {
        return $this->speed * 60 / $this->height;
    }
}
