<?php


class Point
{
    public $x=0.0;
    public $y=0.0;

    public function __construct($_x, $_y)
    {
        $this->x = $_x;
        $this->y = $_y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY()
    {
        return [$this->x, $this->y];
    }

    public function toString()
    {
        return $this->x.$this->y;
    }

}