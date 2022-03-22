<?php
require_once 'vendor/autoload.php';

use Pizza\PizzaFactory;
use Pizza\TopingFactory;

$totalCost   = 0;
$description = '';

$pizza = PizzaFactory::create($_POST['type']);
$description .= $pizza->description();
$description .= ($_POST['toping']) ? ' With ' : '';
foreach ($_POST['toping'] as $key => $toping) {
    $pizza = TopingFactory::create($toping, $pizza);
    // topping a(topping b(pizza))
    // $totalCost   += $toping->cost();
    // $description .= ($key == count($_POST['toping']) - 1) ? 'and ' . $toping->description() . '.' : '' . $toping->description() . ', ';
}


echo "<pre>";
echo 'total cost : ' . $pizza->cost() . "\n";
echo 'pizza description : ' . $pizza->description() . "\n";
echo "</pre>";
