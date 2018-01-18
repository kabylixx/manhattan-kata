<?php
/**
 * Created by PhpStorm.
 * User: sofiane
 * Date: 18/01/2018
 * Time: 13:33
 */

namespace Kata;

class Test extends \PHPUnit_Framework_TestCase
{
    public function test_distance_between_two_points_at_the_same_position_is_0()
    {
        $point1 = new Point(new Coordinate(0),new Coordinate(0));
        $point2 = new Point(new Coordinate(0),new Coordinate(0));

        $distance = Calculator::manhattanDistance($point1, $point2);

        $this->assertEquals(0, $distance);
    }

    public function test_distance_between_two_points_at_the_same_position_is_1()
    {
        $point1 = new Point(new Coordinate(0),new Coordinate(0));
        $point2 = new Point(new Coordinate(0),new Coordinate(1));

        $distance = Calculator::manhattanDistance($point1, $point2);

        $this->assertEquals(1, $distance);
    }

    public function test_distance_between_two_points_at_the_same_position_is_12()
    {
        $point1 = new Point(new Coordinate(0),new Coordinate(0));
        $point2 = new Point(new Coordinate(6),new Coordinate(6));

        $distance = Calculator::manhattanDistance($point1, $point2);

        $this->assertEquals(12, $distance);
    }

    public function test_price_for_distance_9_kms()
    {
        $price = Calculator::calculatePriceForDistance(9, new Pricing());

        $this->assertEquals(13.5, $price);
    }

    public function test_price_for_distance_10_kms()
    {
        $price = Calculator::calculatePriceForDistance(10, new Pricing());

        $this->assertEquals(15, $price);
    }

    public function test_price_for_distance_12_kms()
    {
        $price = Calculator::calculatePriceForDistance(12, new Pricing());

        $this->assertEquals(16.6, $price);
    }

    public function test_price_for_distance_20_kms()
    {
        $price = Calculator::calculatePriceForDistance(20, new Pricing());

        $this->assertEquals(21.5, $price);
    }

}
