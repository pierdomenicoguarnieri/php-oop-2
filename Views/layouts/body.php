  <body>
    <main>
      <div class="pg-wrapper vh-100 w-100 bg-dark">
        <div class="container d-flex py-5">
          <div class="row row-cols-4 w-100">
            <?php 
            
              foreach($arrayProducts as $product){
                include __DIR__ . "/card.php";
              }
            
            ?>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>