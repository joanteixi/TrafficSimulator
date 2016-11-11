<?php
/**
 * Created by PhpStorm.
 * User: joan
 * Date: 08/11/16
 * Time: 18:18
 */

namespace TrafficSimulator;


use TrafficSimulator\Maps\Lane;
use TrafficSimulator\Vehicles\Car;

class Simulator
{
    protected $cars;
    protected $lane;
    protected $positions;
    protected $control;

    public function __construct()
    {
        $this->control = new Control();
    }

    public function addCar(Car $car)
    {
        $this->cars[] = $car;
    }

    public function setLane(Lane $lane)
    {
        $this->lane = $lane;
    }

    public function run()
    {
        for ($i = 1; $i <= $this->lane->getDistance(); $i++) {
            foreach ($this->cars as $car) {
                $car->drive();
            }
        }
    }

}