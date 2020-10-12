<?php
include_once "Point.php";

class MoveablePoint extends Point
{
    public $xspeed;
    public $yspeed;

    public function __construct($_x, $_y, $x_speed, $y_speed)
    {
        parent::__construct($_x, $_y);
        $this->xspeed = $x_speed;
        $this->yspeed = $y_speed;
    }

    public function getXspeed()
    {
        return $this->xspeed;
    }

    public function setXspeed($xspeed)
    {
        $this->xspeed = $xspeed;
    }

    public function getYspeed()
    {
        return $this->yspeed;
    }

    public function setYspeed($yspeed)
    {
        $this->yspeed = $yspeed;
    }

    public function setXYSpeed($_xspeed,$_yspeed)
    {
        $this->xspeed = $_xspeed;
        $this->yspeed = $_yspeed;
    }

    public function getXYSpeed()
    {
        return [$this->xspeed,$this->yspeed];
    }

    public function toString()
    {
        return $this->x.','.$this->y.","."speed=(".$this->xspeed.','.$this->yspeed.')';
    }

    public function move()
    {
        $this->x += $this->xspeed;
        $this->y += $this->yspeed;
    }


}