<div class="col shadow-sm">
  <div class="card w-100 h-100" style="width: 18rem;">
    <?php echo $product->getImage(); ?>
    <div class="card-body d-flex flex-column">
      <h5 class="card-title"><?php echo $product->getName(); ?></h5>
      <span class="card-text">Brand: <?php echo $product->getBrand(); ?></span>
      <span class="card-text">Prezzo: <?php echo $product->getPrice(); ?></span>
      <span class="card-text"><?php echo $product->getAnimal(); ?></span>

      <?php if($product->type === 'food'){ ?>
        <span class="card-text"><span class="fs-5">Ingredienti:</span> <?php echo $product->getIngrediets(); ?></span>
      <?php }elseif($product->type === 'games'){ ?>
        <span class="card-text"><span class="fs-5">Materiali:</span> <?php echo $product->getMaterial(); ?></span>
        <?php }elseif($product->type === 'kennel'){ ?>
          <span class="card-text"><?php echo $product->getOutside(); ?></span>
        <span class="card-text"><span class="fs-5">Lista dei materiali:</span> <?php echo $product->getMaterial(); ?></span>
      <?php }?> 
    </div>
  </div>
</div>