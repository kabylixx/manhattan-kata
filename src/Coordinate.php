<?php
/**
 * Created by PhpStorm.
 * User: sofiane
 * Date: 18/01/2018
 * Time: 14:18
 */

namespace Kata;

class Coordinate
{
    private $value;

    public function __construct($position)
    {
        $this->value = $position;
    }

    public function getDistanceFromPosition(self $position)
    {
        return abs($this->value - $position->value);
    }
}