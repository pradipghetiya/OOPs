<?php
 class  Book{
    public $name = 'PHP';

    public $price = '200';

    public $title = 'xyz'; 

    public function display(){
        return $this->title.' is '.$this->name.' BOOKs '.$this->price.' .';

    }
 }

 $book = new Book;
 echo $book-> display();
?>