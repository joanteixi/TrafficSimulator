<?php
/**
 * Created by PhpStorm.
 * User: joan
 * Date: 10/11/16
 * Time: 14:33
 */

namespace TrafficSimulator;


use TrafficSimulator\Exception\ObstacleException;
use TrafficSimulator\Vehicles\Car;

class Control
{

    protected $positions;

    /**
     * @param Car $car
     */
    public function begin(Car $car)
    {
        if ($this->checkObstacles($car->getPosition())) {
            throw new ObstacleException();
        }
    }

    protected function checkObstacles($position)
    {
        return in_array($position, $this->positions);
    }

    protected function finish(Car $car)
    {
        $this->positions[$car->getId()] = $car->getPosition();
    }
}