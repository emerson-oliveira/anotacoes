<?php

class Produto {
  public $valor_x;
  public $valor_y;
  public $valor_z;
  
  public function getValorX() {
    return $this->valor_x;
  }
  
  public function setValorX($valor_x) {
    $this->valor_x= $valor_x;
  }
  public function getValorY() {
    return $this->valor_y;
  }
  
  public function setValorY($valor_y) {
    $this->valor_y= $valor_y;
  }
  public function getValorZ() {
    return $this->valor_z;
  }
  
  public function setValorZ($valor_z) {
    $this->valor_z= $valor_z;
  }
  public function valorCubico() {
    return $this->valor_x*$this->valor_y*$this->valor_z;
  }  
}

$produto = new Produto;
$produto->setValorX(5);
$produto->setValorY(6);
$produto->setValorZ(7);
echo "<br> Valor x: ".$produto->getValorX();
echo "<br> Valor y: ".$produto->getValorY();
echo "<br> Valor z: ".$produto->getValorZ();
echo "<br> Valor Cubico: ".$produto->valorCubico();

/*
Retorno: 
Valor x: 5
Valor y: 6
Valor z: 7
Valor Cubico: 210
*/