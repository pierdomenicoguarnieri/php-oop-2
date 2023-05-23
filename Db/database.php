<?php

include __DIR__ . '/../models/Product.php';

$arrayFood = [
  new Food('Royal Canin Maxi Adult Crocchette per cani', 'food', '12/05/24'),
  new Food('Purina ONE Dual Nature Sterilized Salmone con Spirulina Crocchette per gatti', 'food', '18/12/24'),
  new Food('Gourmet Gold Paté 24 x 85 g Alimento umido per gatti', 'food', '14/09/23')
];

$arrayGames = [
  new Games('Pallina da tennis in gomma 2in1', 'games'),
  new Games('Gioco per cani Ferplast Puller', 'games'),
  new Games('Base con giochi Wild Mouse con sonoro e LED', 'games')
];

$arrayKennel = [
  new Kennel('Letto per cani Cozy ecoLIFE grigio', 'kennel'),
  new Kennel('Letto Cozy Kingdom', 'kennel'),
  new Kennel('Cuccia per cani e gatti HAFENBANDE Cottage', 'kennel')
];

// Array Food
$arrayFood[0]->setPrice(30);
$arrayFood[0]->setBrand('Royal Canin');
$arrayFood[0]->setImage('https://shop-cdn-m.mediazs.com/bilder/royal/canin/maxi/adult/crocchette/per/cani/6/400/rc_shn_adultmaxi_mv_eretailkit_it_it_6.jpg');
$arrayFood[0]->setAnimal('Cani');
$arrayFood[0]->setIngredients(['Proteine di pollame disidratate', 'Mais', 'Farina di mais', 'Grassi animali', 'Frumento', 'Proteine di maiale disidratate']);

////////////////////////////////
$arrayFood[1]->setPrice(42);
$arrayFood[1]->setBrand('Purina');
$arrayFood[1]->setImage('https://shop-cdn-m.mediazs.com/bilder/purina/one/dual/nature/sterilized/salmone/con/spirulina/crocchette/per/gatti/9/400/116197_pla_nestlefr_maindc_purinaone_dualnature_sterilized_lachs_1_4kg_hs_01_9.jpg');
$arrayFood[1]->setAnimal('Gatti');
$arrayFood[1]->setIngredients(['Proteine di pollame disidratate', 'Mais', 'Farina di mais', 'Grassi animali', 'Frumento', 'Proteine di maiale disidratate']);

////////////////////////////////
$arrayFood[2]->setPrice(27);
$arrayFood[2]->setBrand('Gourmet');
$arrayFood[2]->setImage('https://shop-cdn-m.mediazs.com/bilder/gourmet/gold/pat/x/g/alimento/umido/per/gatti/6/400/246397_pla_nestle_gourmet_gold_terrine_gemuese_12x85g_hs_01_6.jpg');
$arrayFood[2]->setAnimal('Gatti');
$arrayFood[2]->setIngredients(['Proteine di pollame disidratate', 'Mais', 'Farina di mais', 'Grassi animali', 'Frumento', 'Proteine di maiale disidratate']);



// Array Games
$arrayGames[0]->setPrice(9.99);
$arrayGames[0]->setBrand('ZooPLUS');
$arrayGames[0]->setImage('https://shop-cdn-m.mediazs.com/bilder/pallina/da/tennis/in/gomma/in/9/400/69372_pla_hundespielzeug_gummi_tennis_ball_2in1_fg_3401_9.jpg');
$arrayGames[0]->setAnimal('Cani');
$arrayGames[0]->setMaterial(['Silicone', 'Gomma']);

////////////////////////////////
$arrayGames[1]->setPrice(12.50);
$arrayGames[1]->setBrand('Ferplast');
$arrayGames[1]->setImage('https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/ferplast/puller/7/400/199296_pla_ferplastitalien_ferplast_hundespielzeug_puller_midi_27cm_hs_01_7.jpg');
$arrayGames[1]->setAnimal('Cani');
$arrayGames[1]->setMaterial(['Silicone', 'Gomma']);

$arrayGames[2]->setPrice(23.49);
$arrayGames[2]->setBrand('Ferplast');
$arrayGames[2]->setImage('https://shop-cdn-m.mediazs.com/bilder/base/con/giochi/wild/mouse/con/sonoro/e/led/6/800/67335_pla_sincerepet_katzenspielbrett_wild_mouse_fg_7669_6.jpg');
$arrayGames[2]->setAnimal('Gatti');
$arrayGames[2]->setMaterial(['Plastica', 'Tessuto']);

// Array Kennel
$arrayKennel[0]->setPrice(50);
$arrayKennel[0]->setBrand('ecoLIFE');
$arrayKennel[0]->setImage('https://shop-cdn-m.mediazs.com/bilder/letto/per/cani/cozy/ecolife/grigio/7/400/180712_pla_cozy_ecolife_grau_fg_6369_7.jpg');
$arrayKennel[0]->setAnimal('Cani');
$arrayKennel[0]->setOutside(false);
$arrayKennel[0]->setMaterial(["Piume d'oca", 'Cotone']);

////////////////////////////////
$arrayKennel[1]->setPrice(45);
$arrayKennel[1]->setBrand('ZooPLUS');
$arrayKennel[1]->setImage('https://shop-cdn-m.mediazs.com/bilder/letto/cozy/kingdom/4/400/48523_PLA_Cozy_Kuschelbett_Kingdom_FG_11_63_4.jpg');
$arrayKennel[1]->setAnimal('Gatti');
$arrayKennel[1]->setOutside(false);
$arrayKennel[1]->setMaterial(["Piume d'oca", 'Cotone']);

////////////////////////////////
$arrayKennel[2]->setPrice(30.99);
$arrayKennel[2]->setBrand('HAFENBANDE');
$arrayKennel[2]->setImage('https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/e/gatti/hafenbande/cottage/8/400/160197_160196_hafenbande_cottage_ms_hs40spiegel_8.jpg');
$arrayKennel[2]->setAnimal('Cani');
$arrayKennel[2]->setOutside(true);
$arrayKennel[2]->setMaterial(['Plastica']);