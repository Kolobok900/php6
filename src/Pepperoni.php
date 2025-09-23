<?php

namespace Vastilok\Php6;

use vastilok\lib\Pizza;

class Pepperoni extends Pizza
{
    public function __construct()
    {
        parent::__construct("Пепперони", "Томатный соус", ["Пепперони", "Моцарелла"]);
    }
}
