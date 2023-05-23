<?php

include __DIR__ . '/../models/Product.php';

$arrayProducts = [
  new Food('Croccantini', 'food', '12/05/24'),
  new Games('Pallina', 'games'),
  new Kennel('Cuccia imbottita', 'kennel')
];

$arrayProducts[0]->setPrice(30);
$arrayProducts[0]->setBrand('Royal Canin');
$arrayProducts[0]->setImage('');
$arrayProducts[0]->setAnimal('Gatti');
$arrayProducts[0]->setIngredients(['Vitello', 'Pollo', 'Sale', 'Addensanti']);

$arrayProducts[1]->setPrice(25.50);
$arrayProducts[1]->setBrand('Supersantos');
$arrayProducts[1]->setImage('https://media.mediazs.com/bilder/9/140/69372_pla_hundespielzeug_gummi_tennis_ball_2in1_fg_3401_9.jpg');
$arrayProducts[1]->setAnimal('Cani');
$arrayProducts[1]->setMaterial('Silicone');

$arrayProducts[2]->setPrice(50);
$arrayProducts[2]->setBrand('Poltrone Sofà');
$arrayProducts[2]->setImage('');
$arrayProducts[2]->setAnimal('Cani');
$arrayProducts[2]->setOutside(false);
$arrayProducts[2]->setMaterial(['Legno', "Piume d'oca", 'Cotone']);