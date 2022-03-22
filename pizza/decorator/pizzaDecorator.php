<?php

namespace Pizza\Decorator;

use Pizza\Pizza;

class PizzaDecorator implements Pizza
{
    protected $pizza;
    protected $prize;
    protected $pizzaDescription;

    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }

    public function cost()
    {
        return $this->pizza->cost() + $this->prize;
    }

    public function description()
    {
        return $this->pizza->description() . ' ' . $this->pizzaDescription;
    }
}
