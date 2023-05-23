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
$arrayProducts[1]->setIngredients(['Vitello', 'Pollo', 'Sale', 'Addensanti']);

$arrayProducts[2]->setPrice(25);
$arrayProducts[2]->setBrand('Supersantos');
$arrayProducts[2]->setImage('https://media.mediazs.com/bilder/9/140/69372_pla_hundespielzeug_gummi_tennis_ball_2in1_fg_3401_9.jpg');
$arrayProducts[2]->setAnimal('Cani');
$arrayProducts[2]->setMaterial('Silicone');