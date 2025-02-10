<?php

require_once "data/Person.php";

$person1 = new Person();
$person1->name = "Syafiq";
$person1->address = "Subang";

var_dump($person1);

echo "Name : $person1->name" . PHP_EOL;
echo "Address : $person1->address". PHP_EOL;
echo "Country : $person1->country". PHP_EOL;

$person2 = new Person();
$person2->name = "Eko";
$person2->address = "Subang";

var_dump($person2);

// Error
//$person2->name = [];