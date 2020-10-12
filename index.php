<?php
include_once 'Point.php';
include_once 'MoveablePoint.php';

$fisrt = new MoveablePoint(1,2,5,6);
//var_dump($fisrt->getXYSpeed());
echo $fisrt->toString();