<div class="col shadow-sm mb-4 text-dark">

  <div class="card w-100 h-100" style="width: 18rem;">

    <!-- Image output -->
    <?php echo $product->getImage(); ?>

    <div class="card-body d-flex flex-column">

      <!-- Product name output -->
      <h5 class="card-title"><?php echo $product->getName(); ?></h5>

      <!-- Brand output -->
      <span class="card-text"><?php echo $product->getBrand(); ?></span>

      <!-- Price output -->
      <span class="card-text"><span class="fw-bold">Prezzo: </span><?php echo $product->getPrice(); ?></span>

      <div class="pg-animal-container d-flex align-items-center my-2">

        <?php echo $product->getAnimal(); ?>
      </div>

      <!-- If with conditions on type for output using exclusive class functions -->
      <?php if(get_class($product) === 'Food'){ ?>

        <span class="card-text"><span class="fw-bold">Lista degli ingredienti: </span><?php echo $product->getIngrediets(); ?></span>
        <span class="card-text"><span class="fw-bold">Data di scadenza: </span><?php echo $product->getExipryDate(); ?></span>

      <?php }elseif(get_class($product) === 'Games'){ ?>

        <span class="card-text"><span class="fw-bold">Lista dei materiali: </span><?php echo $product->getMaterial(); ?></span>

      <?php }elseif(get_class($product) === 'Kennel'){ ?>

        <div class="pg-outside-flag-container d-flex align-items-center my-2">
          <span class="card-text rounded-2 bg-warning px-2"><?php echo $product->getOutside(); ?></span>
        </div>
        <span class="card-text"><span class="fw-bold">Lista dei materiali: </span><?php echo $product->getMaterial(); ?></span>

      <?php }elseif(get_class($product) === 'Accessories'){ ?>

        <span class="card-text"><span class="fw-bold">Categoria: </span><?php echo $product->getTypeOfAccessory(); ?></span>
        <span class="card-text"><span class="fw-bold">Lista dei materiali: </span><?php echo $product->getMaterial(); ?></span>

      <?php }?> 
    </div>
  </div>
</div>