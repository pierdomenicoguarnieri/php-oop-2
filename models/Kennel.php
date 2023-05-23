<?php 

  class Kennel extends Product{
    private $isForOutside;
    private $materials;

    function __construct($_name, $_type){
      parent::__construct($_name, $_type);
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
      $string = "";
      foreach ($this->materials as $index => $material){
        $index < (count($this->materials) - 1) ? $string .= $material . ', ' : $string .= $material;
      }
      return $string;
    }
  }
?>