<?php
/**
 * Created by PhpStorm.
 * User: joan
 * Date: 08/11/16
 * Time: 17:47
 */

namespace TrafficSimulator\Vehicles;


use TrafficSimulator\Exception\ObstacleException;
use TrafficSimulator\Maps\Point;

class Car extends Vehicle
{
    protected $destination;
    protected $position = 0;
    protected $tick = 0;
    protected $inDestiny = false;

    public function setDestination(Point $point)
    {
        $this->destination = $point;
    }

    /**
     *
     */
    public function getPosition()
    {
        return $this->position;
    }

    public function drive()
    {
        try {
            $this->control->begin($this);
            if ($this->destination->getPosition() == $this->position) {
                $this->inDestiny = true;
            } else {
                $this->position++;
                $this->tick++;
                echo "$this->position\n";
            }
        } catch (ObstacleException $e) {
            //dont move...
        }


        $this->control->finish($this);
    }

    public function isInDestiny()
    {
        return $this->inDestiny;
    }

    public function getOffDrive()
    {
        return $this->position / $this->tick;
    }
}