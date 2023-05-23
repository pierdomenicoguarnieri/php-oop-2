  <body>
    <main>
      <div class="pg-wrapper min-vh-100 w-100 bg-dark py-5">
        <h1 class="text-white text-center">Weclome to BoolPets!</h1>
        <div class="container d-flex flex-column text-white py-5">

          <h2>Food</h2>
          <div class="row row-cols-4 w-100 mt-2">
            <?php 
            
              foreach($arrayFood as $product){
                include __DIR__ . "/card.php";
              }
            
            ?>
          </div>
          
          <h2>Games</h2>
          <div class="row row-cols-4 w-100 mt-2">
            <?php 
            
              foreach($arrayGames as $product){
                include __DIR__ . "/card.php";
              }
            
            ?>
          </div>

          <h2>Kennel</h2>
          <div class="row row-cols-4 w-100 mt-2">
            <?php 
            
              foreach($arrayKennel as $product){
                include __DIR__ . "/card.php";
              }
            
            ?>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>