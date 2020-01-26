<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use HelloWorld\Greetings;

echo Greetings::sayHelloWorld();

echo "<br/><br/><hr/><br/><br/>";

$loader = new \Twig\Loader\ArrayLoader([
    'index' => 'Hello {{ name }}!',
]);
$twig = new \Twig\Environment($loader);

echo $twig->render('index', ['name' => 'Fabien']);

?>