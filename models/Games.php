<?php 

  class Games extends Product{
    private $material;

    function __construct($_name){
      parent::__construct($_name);
    }

    public function setMaterial($_material){
      $this->material = $_material;
    }

    public function getMateial(){
      return $this->material;
    }
  }
?>