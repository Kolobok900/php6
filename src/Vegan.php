<?php 

namespace Vastilok\Php6;;

use Vastilok\Php6\Cheese;
use Vastilok\Php6\Pepperoni;
use vastilok\lib\PizzaStore;

class Vegan extends Pizza
{
    public function __construct()
    {
        parent::__construct("Вегетарианская", "Песто", ["Оливки", "Грибы", "Помидоры"]);
    }
}
