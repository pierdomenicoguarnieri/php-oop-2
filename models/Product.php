<?php

class Product
{
  private $name;
  private $price;
  private $brand;
  private $image;
  private $animal;

  function __construct($_name){
    $this->name = $_name;
  }

  public function getName(){
    return $this->name;
  }

  public function setPrice($_price){
    $this->price = $_price;
  }

  public function getPrice(){
    return number_format($this->price, 2, ',','.') . ' €';
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
    $this->animal === 'Cani' ? $string = '<span class="card-text rounded-2 bg-danger px-2 text-white"><i class="fa-solid fa-dog me-1" style="color: #ffffff;"></i> ' . $this->animal .'</span>' : $string = '<span class="card-text rounded-2 bg-danger px-2 text-white"><i class="fa-solid fa-cat me-1" style="color: #ffffff;"></i>' . $this->animal . '</span>';
    return $string;
  }
}

// Include of Class with extend
include __DIR__ . "/Games.php";
include __DIR__ . "/Kennel.php";
include __DIR__ . "/Food.php";
include __DIR__ . "/Accessories.php";