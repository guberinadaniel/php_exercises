<?php

class Bmw {

  protected $model;
  protected $tankSide;
  protected $tankHeight;

  public function __construct($model, $tankSide, $tankHeight){
    $this -> model = $model;
    $this -> tankSide = $tankSide;
    $this -> tankHeight = $tankHeight;
  }

  public function calcTankVolume() {
    return $this ->tankSide * $this ->tankSide * $this ->tankHeight;
  }
}

function calcTankPrice(Bmw $bmw, $pricePerGalon){
  return $bmw -> calcTankVolume() * 0.0043290 * $pricePerGalon . " $";
}

$bmw3 = new Bmw('323',15,20);
echo calcTankPrice($bmw3, 3);

