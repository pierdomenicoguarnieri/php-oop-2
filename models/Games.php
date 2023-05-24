<?php 

  class Games extends Product{
    private $materials;

    function __construct($_name){
      parent::__construct($_name);
    }

    public function setMaterial($_materials){
      $this->materials = $_materials;
    }

    public function getMaterial(){
      return $this->materials;
    }
  }
?>