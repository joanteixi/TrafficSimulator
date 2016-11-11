<?php

/**
 * Created by PhpStorm.
 * User: joan
 * Date: 08/11/16
 * Time: 18:24
 */

namespace TrafficSimulator\Tests;

use TrafficSimulator\Control;
use TrafficSimulator\Exception\ExceptionAccident;
use TrafficSimulator\Maps\Lane;
use TrafficSimulator\Maps\Point;
use TrafficSimulator\Simulator;
use TrafficSimulator\Vehicles\Car;

class ControlTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function shouldFollowCar()
    {
        $control = new Control();
        $car1 = new Car();
        $car2 = new Car();
        $car1->setDestination(5);
        $car2->setDestination(5);


        try {
            $control->move($car1);
            $control->move($car2);
        } catch(ExceptionAccident $accident) {

        }

    }


    /**
     * @test
     */
    public function shouldCarReachDestination()
    {
        $simulator = new Simulator();
        $simulator->setLane(new Lane(20));
        $car = new Car();
        $car->setDestination(new Point(10));
        $simulator->addCar($car);
        $simulator->run();

        $this->assertEquals(10, $car->getPosition());
        $this->assertTrue($car->isInDestiny());
    }

    /**
     * @test
     */
    public function shouldTwoCarsNotBeInSameSpaceAtSameTime()
    {
        $simulator = new Simulator();
        $simulator->setLane(new Lane(20));
        $car1 = new Car();
        $car1->setDestination(new Point(10));

        $car2 = new Car();
        $car2->setDestination(new Point(10));
        $simulator->addCar($car1);
        $simulator->addCar($car2);
        $simulator->run();
    }
}
