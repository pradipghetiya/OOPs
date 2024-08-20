<?php
class Fruit {
  public $name;
  public $color;

  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
     public function new() {
    echo "The fruit is . $this->name. and the color is . $this->color .";
  }
}


class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit ? ";
  }
}

$b1 = new Strawberry("Strawberry", "red");
$b1->message();
$b1->new();

?>