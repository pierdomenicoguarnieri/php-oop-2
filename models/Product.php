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
    return number_format($this->price, '.', "") . ' €';
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
    return "<img src='$this->image' alt='Product Image' title='Product Image'>";
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