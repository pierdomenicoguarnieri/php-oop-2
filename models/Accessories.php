<?php 

  class Accessories extends Product{
    private $typeOfAccessory;
    private $materials;

    function __construct($_name, $_typeOfAccessory){
      $this->typeOfAccessory = $_typeOfAccessory;
      parent::__construct($_name);
    }

    public function getTypeOfAccessory(){
      return $this->typeOfAccessory;
    }

    public function setMaterial($_materials){
      $this->materials = $_materials;
    }

    public function getMaterial(){
      $string = "";
      foreach ($this->materials as $index => $material){
        $index < (count($this->materials) - 1) ? $string .= $material . ', ' : $string .= $material;
      }
      return $string;
    }
  }
?>