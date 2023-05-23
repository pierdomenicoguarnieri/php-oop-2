<?php

class Product
{
  private $name;
  public $type;
  private $price;
  private $brand;
  private $image;
  private $animal;

  function __construct($_name, $_type){
    $this->name = $_name;
    $this->type = $_type;
  }

  public function getName(){
    return $this->name;
  }

  public function getType(){
    return $this->type;
  }

  public function setPrice($_price){
    $this->price = $_price;
  }

  public function getPrice(){
    if(is_float($this->price)){
      return $this->price . ' €';
    }else{
      return $this->price . '.00 €';
    }
  }

  public function setBrand($_brand){
    $this->brand = $_brand;
  }

  public function getBrand(){
    return $this->brand;
  }

  public function setImage($_image){
    $this->image = $_image;
  }

  public function getImage(){
    return "<img src='$this->image' alt='$this->name' class='card-img-top p-4' title='$this->name'>";
  }

  public function setAnimal($_animal){
    $this->animal = $_animal;
  }

  public function getAnimal(){
    return $this->animal;
  }
}

include __DIR__ . "/Games.php";
include __DIR__ . "/Kennel.php";
include __DIR__ . "/Food.php";