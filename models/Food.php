<?php 

  class Food extends Product{
    private $expiryDate;
    private $ingredients;

    function __construct($_name, $_expiryDate){
      $this->expiryDate = $_expiryDate;
      parent::__construct($_name);
    }

    public function getExipryDate(){
      return $this->expiryDate;
    }

    public function setIngredients($_ingredients){
      $this->ingredients = $_ingredients;
    }

    public function getIngrediets(){
      return $this->ingredients;
    }
  }
?>