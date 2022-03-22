<?php

namespace Pizza\Type;

use Pizza\Pizza;

class PizzaB implements Pizza
{
    function cost()
    {
        return 4;
    }

    function description()
    {
        return 'this is Pizza B';
    }
}
