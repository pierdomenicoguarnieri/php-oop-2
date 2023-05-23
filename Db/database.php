<?php

include __DIR__ . '/../models/Product.php';

$arrayProducts = [
  new Product('Croccantini'),
  new Food('Cuccia', '12/05/24'),
  new Games('Pallina')
];

$arrayProducts[0]->setPrice(25);
$arrayProducts[0]->setBrand('Royal Canin');
$arrayProducts[0]->setImage('');
$arrayProducts[0]->setAnimal('Cani');

$arrayProducts[1]->setPrice(30);
$arrayProducts[1]->setBrand('Poltrone Sofà');
$arrayProducts[1]->setImage('');
$arrayProducts[1]->setAnimal('Gatti');

$arrayProducts[2]->setPrice(25);
$arrayProducts[2]->setBrand('Supersantos');
$arrayProducts[2]->setImage('');
$arrayProducts[2]->setAnimal('Cani');