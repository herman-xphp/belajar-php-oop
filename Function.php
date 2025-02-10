<?php

require_once "data/Person.php";

$budi = new Person();
$budi->name = "Budi";
$budi->sayHello("Eko");

$joko = new Person();
$joko->name = "Joko";
$joko->sayHello(null);