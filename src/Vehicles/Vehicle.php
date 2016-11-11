<?php
/**
 * Created by PhpStorm.
 * User: joan
 * Date: 10/11/16
 * Time: 14:44
 */

namespace TrafficSimulator\Vehicles;


use TrafficSimulator\Control;

abstract class Vehicle
{

    protected $id;

    public function __construct(Control $control)
    {
        $this->id = rand(1, 5000000);
        $this->control = $control;
    }

    public function getId()
    {
        return $this->id;
    }
}