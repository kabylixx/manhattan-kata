<?php

namespace Kata;

class Calculator
{

    public static function manhattanDistance(Point $point1, Point $point2)
    {
        return $point1->getDistanceFromPoint($point2);
    }

    public static function calculatePriceForDistance($distance, Pricing $pricing)
    {
        return $pricing->getPriceForDistance($distance);
    }
}
