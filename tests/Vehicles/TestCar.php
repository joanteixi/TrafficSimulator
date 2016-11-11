<?php
/**
 * Created by PhpStorm.
 * User: joan
 * Date: 08/11/16
 * Time: 17:48
 */

namespace TrafficSimulator\Tests\Vehicles;


use TrafficSimulator\Vehicles\Car;

class TestCar extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testCarExists()
    {
        $car = new Car();

        $this->assertInstanceOf('\TrafficSimulator\Vehicles\Car', $car);
    }
}