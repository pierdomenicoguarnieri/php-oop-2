<div class="col shadow-sm mb-4">
  <div class="card w-100 h-100" style="width: 18rem;">
    <?php echo $product->getImage(); ?>
    <div class="card-body d-flex flex-column">
      <h5 class="card-title"><?php echo $product->getName(); ?></h5>
      <span class="card-text">Brand: <?php echo $product->getBrand(); ?></span>
      <span class="card-text">Prezzo: <?php echo $product->getPrice(); ?></span>
      <div class="pg-animal-container d-flex align-items-center my-2">
        <span class="card-text rounded-2 bg-danger px-2 text-white"><?php echo $product->getAnimal(); ?></span>
      </div>

      <?php if($product->type === 'food'){ ?>
        <span class="card-text"><span class="fs-5">Lista degli ingredienti:</span> <?php echo $product->getIngrediets(); ?></span>
        <span class="card-text"><span class="fs-5">Data di scadenza:</span> <?php echo $product->getExipryDate(); ?></span>
      <?php }elseif($product->type === 'games'){ ?>
        <span class="card-text"><span class="fs-5">Lista dei materiali:</span> <?php echo $product->getMaterial(); ?></span>
        <?php }elseif($product->type === 'kennel'){ ?>
          <div class="pg-outside-flag-container d-flex align-items-center my-2">
            <span class="card-text rounded-2 bg-warning px-2"><?php echo $product->getOutside(); ?></span>
          </div>
        <span class="card-text"><span class="fs-5">Lista dei materiali:</span> <?php echo $product->getMaterial(); ?></span>
      <?php }?> 
    </div>
  </div>
</div>