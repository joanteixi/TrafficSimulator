<?php
/**
 * Created by PhpStorm.
 * User: joan
 * Date: 08/11/16
 * Time: 18:17
 */

namespace TrafficSimulator\Maps;


class Point
{
    protected $position;

    public function __construct($position)
    {
        $this->position = $position;
    }

    /**
     *
     */
    public function getPosition()
    {
        return $this->position;
    }
}