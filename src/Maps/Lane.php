<?php
/**
 * Created by PhpStorm.
 * User: joan
 * Date: 08/11/16
 * Time: 18:26
 */

namespace TrafficSimulator\Maps;


class Lane
{
    protected $distance;

    public function __construct($distance)
    {
        $this->distance = $distance;
    }

    public function getDistance()
    {
        return $this->distance;
    }

}