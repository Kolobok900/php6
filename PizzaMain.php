<?php
require_once (__DIR__.'vendor/autoload.php');

use Vastilok\Php6\ItalianPizzaStore;

$pizzaStore = new ItalianPizzaStore();
$pepperoniPizza=$pizzaStore->orderPizza("pepperoni");
echo "\n";
$veggiePizza=$pizzaStore->orderPizza("vegan");
echo "\n";
$cheesePizza=$pizzaStore->orderPizza("cheese");
