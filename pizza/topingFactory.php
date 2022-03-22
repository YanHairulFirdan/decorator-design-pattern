<?php

namespace Pizza;

use Exception;
use Pizza\Decorator\CheeseDecorator;
use Pizza\Decorator\MushroomsDecorator;
use Pizza\Decorator\PaprikaDecorator;
use Pizza\Decorator\SausageDecorator;

class TopingFactory
{
    public static function create($type, Pizza $pizza)
    {
        switch ($type) {
            case 'cheese':
                return new CheeseDecorator($pizza);
                break;
            case 'sausage':
                return new SausageDecorator($pizza);
                break;
            case 'paprika':
                return new PaprikaDecorator($pizza);
                break;
            case 'mushrooms':
                return new MushroomsDecorator($pizza);
                break;
            default:
                throw new Exception("Error toping Type Not Found", 1);
                break;
        }
    }
}
