<?php
/**
 * Created by PhpStorm.
 * User: sofiane
 * Date: 18/01/2018
 * Time: 13:44
 */

namespace Kata;

class Point
{
    private $x;
    private $y;

    public function __construct(Coordinate $x, Coordinate $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    private function getDistanceXFromPoint(self $point)
    {
        return $this->x->getDistanceFromPosition($point->x);
    }

    private function getDistanceYFromPoint(self $point)
    {
        return $this->y->getDistanceFromPosition($point->y);
    }

    public function getDistanceFromPoint(self $point)
    {
        return $this->getDistanceXFromPoint($point) + $this->getDistanceYFromPoint($point);
    }
}