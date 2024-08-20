<?php

namespace Tata;

class Rangrover{
    public $name = 'Defender';
    public $price = '2Cr';

    
}

namespace Logo;

class Rangrover{
    public $name = 'BMW';

    public $price = '1.5Cr';

}

$b1 = New \Tata\Rangrover;
echo $b1->name . ' - ' ;
echo $b1->price;


?>