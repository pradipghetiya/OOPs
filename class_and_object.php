<?php 

    class Bike{

        //properties
        public $name        = 'Harley Davidson';
        public $engine_cc   = 700;
        public $price       = "12.5 Lakhs";

        //methods
        protected function BikeDetails(){
            return $this->name.' is '.$this->engine_cc.' CC bike with the price of '.$this->price.' .';
        }
    }


    //create object based on this
    $bike = new Bike();
    echo $bike->BikeDetails();
?>