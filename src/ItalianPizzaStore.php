<?php

namespace Vastilok\Php6;

use Vastilok\Php6\Cheese;
use Vastilok\Php6\Pepperoni;
use vatilok\lib\PizzaStore;
use Vastilok\Php6\Vegan;

class ItalianPizzaStore extends PizzaStore
{
    public function createPizza(string $type)
    {
        switch ($type) {
            case 'cheese':
                return new Cheese();
            case 'pepperoni':
                return new Pepperoni();
            case 'vegan':
                return new Vegan();
        }
    }
}
