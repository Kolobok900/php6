<?php
namespace Vastilok\Php6;

use vastilok\lib\Pizza;

class Cheese extends Pizza
{
    public function __construct()
    {
        parent::__construct("Сырная пицца", "Томатный соус", ["Моцарелла", "Пармезан"]);
    }
}
