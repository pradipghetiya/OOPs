<?php

class Bike{
    protected $name = 'java';
    protected $price = '12 lakh';

    public function getBike(){

    }
public function Bike(){
    return $this-> name .$this->price;
}


}

$ne = new Bike;
echo $ne->Bike();

?>