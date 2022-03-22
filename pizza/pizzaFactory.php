<?php

namespace Pizza;

use Exception;
use Pizza\Type\PizzaA;
use Pizza\Type\PizzaB;

class PizzaFactory
{
    public static function create($type)
    {
        switch ($type) {
            case 'pizzaA':
                return new PizzaA();
                break;
            case 'pizzaB':
                return new PizzaB();
                break;
            default:
                throw new Exception("Error Pizza Type Not Found", 1);
                break;
        }
    }
}
