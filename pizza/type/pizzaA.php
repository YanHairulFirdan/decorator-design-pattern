<?php

namespace Pizza\Type;

use Pizza\Pizza;

class PizzaA implements Pizza
{
    function cost()
    {
        return 2;
    }

    function description()
    {
        return 'this is Pizza A';
    }
}
