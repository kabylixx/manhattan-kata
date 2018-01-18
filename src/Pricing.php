<?php
/**
 * Created by PhpStorm.
 * User: sofiane
 * Date: 18/01/2018
 * Time: 15:16
 */

namespace Kata;


class Pricing
{
    public function getPriceForDistance($distance)
    {
        if ($distance > 15) {
            return 1.5 * 10 + 0.8 * 5 + ($distance - 15) * 0.5;
        } elseif ( $distance > 10) {
            return 1.5 * 10 + 0.8 * ($distance - 10) ;
        } else {
            return 1.5 * $distance;
        }
    }
}