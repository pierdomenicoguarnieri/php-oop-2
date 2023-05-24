<?php 

  class Kennel extends Product{
    private $isForOutside;
    private $materials;

    function __construct($_name){
      parent::__construct($_name);
    }

    public function setOutside($_isForOutside){
      $this->isForOutside = $_isForOutside;
    }

    public function getOutside(){
      $this->isForOutside ? $string = 'Adatta per esterni' : $string = 'Non adatta per esetrni';
      return $string;
    }

    public function setMaterial($_materials){
      $this->materials = $_materials;
    }

    public function getMaterial(){
      return $this->materials;
    }
  }
?>