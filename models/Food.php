<?php 

  class Food extends Product{
    private $expiryDate;
    private $ingredients;

    function __construct($_name, $_type, $_expiryDate){
      $this->expiryDate = $_expiryDate;
      parent::__construct($_name, $_type);
    }

    public function getExipryDate(){
      return $this->expiryDate;
    }

    public function setIngredients($_ingredients){
      $this->ingredients = $_ingredients;
    }

    public function getIngrediets(){
      $string = "";
      foreach ($this->ingredients as $index => $ingredient){
        $index < (count($this->ingredients) - 1) ? $string .= $ingredient . ', ' : $string .= $ingredient;
      }
      return $string;
    }
  }
?>