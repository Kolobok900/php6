<?php 

namespace Vastilok\Php6;

use vastilok\lib\Pizza;

class Vegan extends Pizza
{
    public function __construct()
    {
        parent::__construct("Вегетарианская", "Песто", ["Оливки", "Грибы", "Помидоры"]);
    }
}
