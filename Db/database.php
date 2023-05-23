<?php

include __DIR__ . '/../models/Product.php';

// Array of products
$arrayProducts = [
  new Food('Royal Canin Maxi Adult Crocchette per cani', 'food', '12/05/24'),
  new Food('Purina ONE Dual Nature Sterilized Salmone con Spirulina Crocchette per gatti', 'food', '18/12/24'),
  new Food('Gourmet Gold Paté 24 x 85 g Alimento umido per gatti', 'food', '14/09/23'),
  new Games('Pallina da tennis in gomma 2in1', 'games'),
  new Kennel('Letto per cani Cozy ecoLIFE grigio', 'kennel'),
  new Kennel('Letto Cozy Kingdom', 'kennel'),
  new Kennel('Cuccia per cani e gatti HAFENBANDE Cottage', 'kennel')
];

// Products valorization using setter functions
$arrayProducts[0]->setPrice(30);
$arrayProducts[0]->setBrand('Royal Canin');
$arrayProducts[0]->setImage('https://shop-cdn-m.mediazs.com/bilder/royal/canin/maxi/adult/crocchette/per/cani/6/400/rc_shn_adultmaxi_mv_eretailkit_it_it_6.jpg');
$arrayProducts[0]->setAnimal('Cani');
$arrayProducts[0]->setIngredients(['Proteine di pollame disidratate', 'Mais', 'Farina di mais', 'Grassi animali', 'Frumento', 'Proteine di maiale disidratate']);

////////////////////////////////
$arrayProducts[1]->setPrice(42);
$arrayProducts[1]->setBrand('Purina');
$arrayProducts[1]->setImage('https://shop-cdn-m.mediazs.com/bilder/purina/one/dual/nature/sterilized/salmone/con/spirulina/crocchette/per/gatti/9/400/116197_pla_nestlefr_maindc_purinaone_dualnature_sterilized_lachs_1_4kg_hs_01_9.jpg');
$arrayProducts[1]->setAnimal('Gatti');
$arrayProducts[1]->setIngredients(['Proteine di pollame disidratate', 'Mais', 'Farina di mais', 'Grassi animali', 'Frumento', 'Proteine di maiale disidratate']);

////////////////////////////////
$arrayProducts[2]->setPrice(27);
$arrayProducts[2]->setBrand('Gourmet');
$arrayProducts[2]->setImage('https://shop-cdn-m.mediazs.com/bilder/gourmet/gold/pat/x/g/alimento/umido/per/gatti/6/400/246397_pla_nestle_gourmet_gold_terrine_gemuese_12x85g_hs_01_6.jpg');
$arrayProducts[2]->setAnimal('Gatti');
$arrayProducts[2]->setIngredients(['Proteine di pollame disidratate', 'Mais', 'Farina di mais', 'Grassi animali', 'Frumento', 'Proteine di maiale disidratate']);

////////////////////////////////
$arrayProducts[3]->setPrice(25.50);
$arrayProducts[3]->setBrand('ZooPLUS');
$arrayProducts[3]->setImage('https://shop-cdn-m.mediazs.com/bilder/pallina/da/tennis/in/gomma/in/9/400/69372_pla_hundespielzeug_gummi_tennis_ball_2in1_fg_3401_9.jpg');
$arrayProducts[3]->setAnimal('Cani');
$arrayProducts[3]->setMaterial(['Silicone', 'Gomma']);

////////////////////////////////
$arrayProducts[4]->setPrice(50);
$arrayProducts[4]->setBrand('ecoLIFE');
$arrayProducts[4]->setImage('https://shop-cdn-m.mediazs.com/bilder/letto/per/cani/cozy/ecolife/grigio/7/400/180712_pla_cozy_ecolife_grau_fg_6369_7.jpg');
$arrayProducts[4]->setAnimal('Cani');
$arrayProducts[4]->setOutside(false);
$arrayProducts[4]->setMaterial(["Piume d'oca", 'Cotone']);

////////////////////////////////
$arrayProducts[5]->setPrice(45);
$arrayProducts[5]->setBrand('ZooPLUS');
$arrayProducts[5]->setImage('https://shop-cdn-m.mediazs.com/bilder/letto/cozy/kingdom/4/400/48523_PLA_Cozy_Kuschelbett_Kingdom_FG_11_63_4.jpg');
$arrayProducts[5]->setAnimal('Gatti');
$arrayProducts[5]->setOutside(false);
$arrayProducts[5]->setMaterial(["Piume d'oca", 'Cotone']);

////////////////////////////////
$arrayProducts[6]->setPrice(30.99);
$arrayProducts[6]->setBrand('HAFENBANDE');
$arrayProducts[6]->setImage('https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/e/gatti/hafenbande/cottage/8/400/160197_160196_hafenbande_cottage_ms_hs40spiegel_8.jpg');
$arrayProducts[6]->setAnimal('Cani');
$arrayProducts[6]->setOutside(true);
$arrayProducts[6]->setMaterial(['Plastica']);