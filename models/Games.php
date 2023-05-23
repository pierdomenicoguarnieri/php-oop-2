<?php 

  class Games extends Product{
    private $materials;

    function __construct($_name, $_type){
      parent::__construct($_name, $_type);
    }

    public function setMaterial($_materials){
      $this->materials = $_materials;
    }

    public function getMaterial(){
      $string = "";
      foreach ($this->materials as $index => $material){
        $index < (count($this->materials) - 1) ? $string .= $material . ', ' : $string .= $material . ' ';
      }
      return $string;
    }
  }
?>