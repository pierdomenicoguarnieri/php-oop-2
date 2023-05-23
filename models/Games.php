<?php 

  class Games extends Product{
    private $material;

    function __construct($_name, $_type){
      parent::__construct($_name, $_type);
    }

    public function setMaterial($_material){
      $this->material = $_material;
    }

    public function getMaterial(){
      return $this->material;
    }
  }
?>