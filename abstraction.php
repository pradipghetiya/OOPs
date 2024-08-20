<?php
abstract class Picture{
    public $name = 'My Picture';
}

class News extends Picture{
    
    public function Picture(){
        return "This Picture"." - " .$this->name;
    }
}

$b1 = new News;
echo $b1->Picture();

?>